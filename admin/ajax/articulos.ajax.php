<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";

class AjaxArticulo{

	/*=============================================
  	ACTIVAR PRODUCTOS
 	=============================================*/	

 	public $activarArticulo;
	public $activarIdA;

	public function ajaxActivarArticulo(){

		$tabla = "detallearticulo";

		$item1 = "disponible";
		$valor1 = $this->activarArticulo;

		$item2 = "idDetalleArticulo";
		$valor2 = $this->activarIdA;

		$respuesta = ModeloArticulos::mdlActualizarArticulos($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}

 }





/*=============================================
ACTIVAR PRODUCTOS
=============================================*/	

if(isset($_POST["activarArticulo"])){
	
	$activarArticulo = new AjaxArticulo();
	$activarArticulo -> activarArticulo = $_POST["activarArticulo"];
	$activarArticulo -> activarIdA = $_POST["activarIdA"];
	$activarArticulo -> ajaxActivarArticulo();

}