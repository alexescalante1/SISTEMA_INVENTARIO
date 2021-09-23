<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";

class TablaArticulos{

  /*=============================================
  MOSTRAR LA TABLA DE ARTICULOS
  =============================================*/ 

  public function mostrarTablaArticulos(){
	
  	$item = null;
  	$valor = null;
	$idCat = array();
	
	$categoria = ControladorCategoria::ctrMostrarCategoria($item, $valor);
	
	for($i = 0; $i < count($categoria); $i++){
	
		$idCat[$categoria[$i]["idCategoria"]] = $categoria[$i]["titulo"];
	
	}

  	$articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

  	$datosJson = '

  		{
  			"data":[';

	 	for($i = 0; $i < count($articulos); $i++){

			/*=============================================
  			AGREGAR ETIQUETAS DE ESTADO
  			=============================================*/

  			if($articulos[$i]["disponible"] == 0){

				$colorEstado = "btn-danger";
				$textoEstado = "Desactivado";
				$estadoArticulo = 1;

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activado";
				$estadoArticulo = 0;

			}

			$disponible = "<button style='width:80px' class='btn btn-xs btnActivar ".$colorEstado."' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' estadoArticulo='".$estadoArticulo."'>".$textoEstado."</button>";

			$imagenPrincipal = "<a href='".$articulos[$i]["ruta"]."'><img src='".$articulos[$i]["portada"]."' class='img-thumbnail imgTablaPrincipal' width='100px'></a>";

			$accionesFinal = "<div><a href='".$articulos[$i]["ruta"]."'><button class='btn btn-success' ><i class='fa fa-eye'></i></button></a><button class='btn btn-warning btnEditarArticulo' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' data-toggle='modal' data-target='#modalEditarArticulo'><i class='fa fa-pencil'></i></button></div>";

			$datosJson .='[
					
					"'.($i+1).'",
					"'.$disponible.'",
					"'.$articulos[$i]["titulo"].'",
					"'.$idCat[$articulos[$i]["idCategoria"]].'",
					"'.$articulos[$i]["palabrasClave"].'",
					"'.$imagenPrincipal.'",
					"'.$articulos[$i]["descripcion"].'",
					"'.$articulos[$i]["prestados"].'",
					"'.$articulos[$i]["peso"]." Kg".'",
					"'."S/.".$articulos[$i]["precio"].".00".'",
					"'.$accionesFinal.'"	   

			],';

		}

		if($articulos==null){
			$datosJson .='[
				
				"0",
				"null",
				"null",
				"null",
				"null",
				"null",
				"null",
				"null",
				"null",
				"null",
				"null"

			],';
		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']

		}';

		echo $datosJson;

  }


}

/*=============================================
ACTIVAR TABLA DE ARTICULOS
=============================================*/ 
$activarArticulo = new TablaArticulos();
$activarArticulo -> mostrarTablaArticulos();


