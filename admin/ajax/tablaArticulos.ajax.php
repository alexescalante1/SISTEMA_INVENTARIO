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
	$tituloCateg = null;

	$idCat = array();
	$NameCat = array();
	
	$categoria = ControladorCategoria::ctrMostrarCategoria($item, $valor);
	
	for($i = 0; $i < count($categoria); $i++){
	
		$idCat[$i] = $categoria[$i]["idCategoria"];
		$NameCat[$i] = $categoria[$i]["titulo"];
	
	}

  	$articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

  	$datosJson = '

  		{
  			"data":[';

	 	for($i = 0; $i < count($articulos); $i++){

			/*=============================================
  			TRAER LAS CATEGORÍAS
  			=============================================*/
			
			
			for($j = 0; $j < count($categoria); $j++){
				
				if($idCat[$j] == $articulos[$i]["idCategoria"]){
					$tituloCateg = $NameCat[$j];
					break;
				}
			
			}

			/*
  			$item = "idCategoria";
			$valor = $articulos[$i]["idCategoria"];

			
			$categorias = ControladorCategoria::ctrMostrarCategoria($item, $valor);
			
			if($categorias["titulo"] == ""){

				$categoria = "SIN CATEGORÍA";
			
			}else{

				$categoria = $categorias["titulo"];
			}
			*/

			if($tituloCateg == null){

				$tituloCateg = "SIN CATEGORÍA";
			
			}

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

			$disponible = "<button class='btn btn-xs btnActivar ".$colorEstado."' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' estadoArticulo='".$estadoArticulo."'>".$textoEstado."</button>";
			/*=============================================
  			TRAER IMAGEN PRINCIPAL
  			=============================================*/

			$imagenPrincipal = "<a href='".$articulos[$i]["ruta"]."'><img src='".$articulos[$i]["portada"]."' class='img-thumbnail imgTablaPrincipal' width='100px'></a>";

			/*=============================================
			TRAER MULTIMEDIA
  			=============================================*/

  			if($articulos[$i]["multimedia"] != null){

				$multimedia = json_decode($articulos[$i]["multimedia"],true);

				if($multimedia[0]["foto"] != ""){

					$vistaMultimedia = "<img src='".$multimedia[0]["foto"]."' class='img-thumbnail imgTablaMultimedia' width='100px'>";

				}else{

					$vistaMultimedia = "<img src='http://i3.ytimg.com/vi/".$articulos[$i]["multimedia"]."/hqdefault.jpg' class='img-thumbnail imgTablaMultimedia' width='100px'>";
					
				}

			}else{

				$vistaMultimedia = "<img src='vistas/img/multimedia/default/default.jpg' class='img-thumbnail imgTablaMultimedia' width='100px'>";

			}

			/*=============================================
  			TRAER LAS ACCIONES
  			=============================================*/

			$accionesV = "<div class='btn-group'><a href='".$articulos[$i]["ruta"]."'><button class='btn btn-success' ><i class='fa fa-eye'> Ver Articulo</i></button></a></div>";

			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarArticulo' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' data-toggle='modal' data-target='#modalEditarArticulo'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarArticulo' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' rutaCabecera='".$articulos[$i]["ruta"]."' imgPrincipal='".$articulos[$i]["portada"]."'><i class='fa fa-times'></i></button></div>";

			$datosJson .='[
					
					"'.($i+1).'",
					"'.$articulos[$i]["ruta"].'",
					"'.$articulos[$i]["titulo"].'",
					"'.$tituloCateg.'",
					"'.$articulos[$i]["palabrasClave"].'",
					"'.$disponible.'",
					"'.$imagenPrincipal.'",
					"'.$articulos[$i]["descripcion"].'",
					"'.$articulos[$i]["prestados"].'",
					"'.$articulos[$i]["peso"]." Kg".'",
					"'."S/.".$articulos[$i]["precio"].".00".'",
					"'.$accionesV.'",
					"'.$acciones.'"	   

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


