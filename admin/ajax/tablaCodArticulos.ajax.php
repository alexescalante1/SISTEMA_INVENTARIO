<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";

require_once "../modelos/rutas.php";

class TablaArticulos{
	
  /*=============================================
  MOSTRAR LA TABLA DE PRODUCTOS
  =============================================*/ 

  public function mostrarTablaArticulos(){
	
  	$item = null;
  	$valor = null;
	  
	

  	$productos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

  	$datosJson = '

  		{
  			"data":[';

	 	for($i = 0; $i < count($productos); $i++){

			/*=============================================
  			TRAER LAS CATEGORÍAS
  			=============================================*/

  			$item = "idCategoria";
			$valor = $productos[$i]["idCategoria"];

			
			$categorias = ControladorCategoria::ctrMostrarCategoria($item, $valor);

			if($categorias["titulo"] == ""){

				$categoria = "SIN CATEGORÍA";
			
			}else{

				$categoria = $categorias["titulo"];
			}

			/*=============================================
  			AGREGAR ETIQUETAS DE ESTADO
  			=============================================*/

  			if($productos[$i]["disponible"] == 0){

				$colorEstado = "btn-danger";
				$textoEstado = "Desactivado";
				$estadoArticulo = 1;

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activado";
				$estadoArticulo = 0;

			}

			$disponible = "<button class='btn btn-xs btnActivar ".$colorEstado."' idArticulo='".$productos[$i]["idDetalleArticulo"]."' estadoArticulo='".$estadoArticulo."'>".$textoEstado."</button>";
			/*=============================================
  			TRAER IMAGEN PRINCIPAL
  			=============================================*/


			$imagenPrincipal = "<a href='".$productos[$i]["ruta"]."'><img src='".$productos[$i]["portada"]."' class='img-thumbnail imgTablaPrincipal' width='100px'></a>";

			/*=============================================
			TRAER MULTIMEDIA
  			=============================================*/

  			if($productos[$i]["multimedia"] != null){

				$multimedia = json_decode($productos[$i]["multimedia"],true);

				if($multimedia[0]["foto"] != ""){

					$vistaMultimedia = "<img src='".$multimedia[0]["foto"]."' class='img-thumbnail imgTablaMultimedia' width='100px'>";

				}else{

					$vistaMultimedia = "<img src='http://i3.ytimg.com/vi/".$productos[$i]["multimedia"]."/hqdefault.jpg' class='img-thumbnail imgTablaMultimedia' width='100px'>";
					
				}

			}else{

				$vistaMultimedia = "<img src='vistas/img/multimedia/default/default.jpg' class='img-thumbnail imgTablaMultimedia' width='100px'>";

			}

			/*=============================================
  			TRAER LAS ACCIONES
  			=============================================*/

			$accionesV = "<div class='btn-group'><a href='".$productos[$i]["ruta"]."'><button class='btn btn-success' ><i class='fa fa-eye'> Ver Articulo</i></button></a></div>";

			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarArticulo' idArticulo='".$productos[$i]["idDetalleArticulo"]."' data-toggle='modal' data-target='#modalEditarArticulo'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarArticulo' idArticulo='".$productos[$i]["idDetalleArticulo"]."' rutaCabecera='".$productos[$i]["ruta"]."' imgPrincipal='".$productos[$i]["portada"]."'><i class='fa fa-times'></i></button></div>";

			$datosJson .='[
					
					"'.($i+1).'",
					"'.$productos[$i]["ruta"].'",
					"'.$productos[$i]["titulo"].'",
					"'.$disponible.'",
					"'.$imagenPrincipal.'",
					"'.$productos[$i]["prestados"].'",
					"'.$productos[$i]["peso"].'",
					"'.$productos[$i]["precio"].'",
					"'.$categoria.'",
					"'.$productos[$i]["palabrasClave"].'",
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
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activarArticulo = new TablaArticulos();
$activarArticulo -> mostrarTablaArticulos();


