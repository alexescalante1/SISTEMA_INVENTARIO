<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";


class TablaArticulos{
	
  /*=============================================
  MOSTRAR LA TABLA DE PRODUCTOS
  =============================================*/ 

  public function mostrarTablaArticulos($CodPR){
	
  	
	$RUT = "ruta"; 
	$idArticuloD = ControladorArticulos::ctrMostrarInfoArticulo($RUT,$CodPR);
	 
	$item = "idDetalleArticulo";
	$valor = $idArticuloD["idDetalleArticulo"];
	  
  	$productos = ControladorArticulos::ctrMostrarCodArticulos($item, $valor);

  	$datosJson = '

  		{
  			"data":[';

	 	for($i = 0; $i < count($productos); $i++){

			
			/*=============================================
  			AGREGAR ETIQUETAS DE ESTADO
  			=============================================*/

  			if($productos[$i]["estado"] == 0){

				$colorEstado = "btn-danger";
				$textoEstado = "Desactivado";
				$estadoArticulo = 1;

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activado";
				$estadoArticulo = 0;

			}

			$estado = "<button class='btn btn-xs btnActivar ".$colorEstado."' idArticulo='".$productos[$i]["idDetalleArticulo"]."' estadoArticulo='".$estadoArticulo."'>".$textoEstado."</button>";
			
			/*=============================================
  			TRAER LAS ACCIONES
  			=============================================*/

			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarArticulo' idCodArticulo='".$productos[$i]["idArticulo"]."' data-toggle='modal' data-target='#modalEditarArticulo'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarArticulo' idCodArticulo='".$productos[$i]["idArticulo"]."' ><i class='fa fa-times'></i></button></div>";

			$datosJson .='[
					
					"'.($i+1).'",
					"'.$productos[$i]["codigo"].'",
					"'.$productos[$i]["codigoPatrimonial"].'",
					"'.$estado.'",
					"'.$estado.'",
					"'.$productos[$i]["fecha"].'",
					"'.$acciones.'"	   

			],';

		}

		if($productos==null){
			$datosJson .='[	
				"0",
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
ACTIVAR TABLA DE PRODUCTOS
=============================================*/

/*
$activarArticulo = new TablaArticulos();
$activarArticulo -> mostrarTablaArticulos($rutas[0]);
*/

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activarArticulo = new TablaArticulos();


#CREAR PRODUCTO
#-----------------------------------------------------------
if(isset($_POST["action"])){

	$activarArticulo -> mostrarTablaArticulos($_POST["name"]);

}else{

	$activarArticulo -> mostrarTablaArticulos(122);

}

