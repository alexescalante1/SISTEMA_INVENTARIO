<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";

class AjaxArticulo{

	/*=============================================
  	ACTIVAR ARTICULOS
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

	/*=============================================
	VALIDAR NO REPETIR ARTICULOS
	=============================================*/	

	public $validarArticulo;

	public function ajaxValidarArticulo(){

		$item = "titulo";
		$valor = $this->validarArticulo;

		$respuesta = ControladorArticulos::ctrMostrarArticulos($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	RECIBIR MULTIMEDIA
	=============================================*/

	public $imagenMultimedia;
	public $rutaMultimedia;	

	public function  ajaxRecibirMultimedia(){

		$datos = $this->imagenMultimedia;
		$ruta = $this->rutaMultimedia;

		$respuesta = ControladorArticulos::ctrSubirMultimedia($datos, $ruta);

		echo $respuesta;

	}

	/*=============================================
	GUARDAR PRODUCTO Y EDITAR PRODUCTO
	=============================================*/	

	public $tituloArticulo;
	public $rutaArticulo;
	public $seleccionarCategoria;
	public $descripcionArticulo;
	public $pClavesArticulo;
	public $precio;
	public $peso;
	public $disponible;
	public $multimedia;
	public $fotoPrincipal;

	public $id;
	public $antiguaFotoPrincipal;

	public function  ajaxCrearArticulo(){

		$datos = array(
			"tituloArticulo"=>$this->tituloArticulo,
			"rutaArticulo"=>$this->rutaArticulo,				
			"categoria"=>$this->seleccionarCategoria,
			"descripcionArticulo"=>$this->descripcionArticulo,
			"pClavesArticulo"=>$this->pClavesArticulo,
			"precio"=>$this->precio,
			"peso"=>$this->peso,
			"disponible"=>$this->disponible,
			"multimedia"=>$this->multimedia,
			"fotoPrincipal"=>$this->fotoPrincipal
			);

		$respuesta = ControladorArticulos::ctrCrearArticulo($datos);

		echo $respuesta;

	}


	/*=============================================
	TRAER ARTICULOS
	=============================================*/	

	public $idArticulo;

	public function ajaxTraerArticulo(){

		$item = "idDetalleArticulo";
		$valor = $this->idArticulo;

		$respuesta = ControladorArticulos::ctrMostrarArticulos($item, $valor);

		echo json_encode($respuesta);

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




/*=============================================
VALIDAR NO REPETIR PRODUCTO
=============================================*/

if(isset($_POST["validarArticulo"])){

	$valArticulo = new AjaxArticulo();
	$valArticulo -> validarArticulo = $_POST["validarArticulo"];
	$valArticulo -> ajaxValidarArticulo();

}


#RECIBIR ARCHIVOS MULTIMEDIA
#-----------------------------------------------------------
if(isset($_FILES["fileM"])){

	$multimedia = new AjaxArticulo();
	$multimedia -> imagenMultimedia = $_FILES["fileM"];
	$multimedia -> rutaMultimedia = $_POST["ruta"];
	$multimedia -> ajaxRecibirMultimedia();

}


#CREAR PRODUCTO
#-----------------------------------------------------------
if(isset($_POST["tituloArticulo"])){

	$producto = new AjaxArticulo();
	$producto -> tituloArticulo = $_POST["tituloArticulo"];
	$producto -> rutaArticulo = $_POST["rutaArticulo"];
	$producto -> seleccionarCategoria = $_POST["seleccionarCategoria"];
	$producto -> descripcionArticulo = $_POST["descripcionArticulo"];
	$producto -> pClavesArticulo = $_POST["pClavesArticulo"];
	$producto -> precio = $_POST["precio"];
	$producto -> peso = $_POST["peso"];
	$producto -> disponible = $_POST["disponible"];

	$producto -> multimedia = $_POST["multimedia"];

	if(isset($_FILES["fotoPrincipal"])){

		$producto -> fotoPrincipal = $_FILES["fotoPrincipal"];

	}else{

		$producto -> fotoPrincipal = null;

	}

	$producto -> ajaxCrearArticulo();

}

/*
$articulos = new AjaxArticulo();
	$articulos -> tituloArticulo = $_POST["tituloArticulo"];
	$articulos -> rutaArticulo = $_POST["rutaArticulo"];
	$articulos -> seleccionarCategoria = $_POST["seleccionarCategoria"];
	$articulos -> descripcionArticulo = $_POST["descripcionArticulo"];
	$articulos -> pClavesArticulo = $_POST["pClavesArticulo"];
	$articulos -> precio = $_POST["precio"];
	$articulos -> peso = $_POST["peso"];
	$articulos -> disponible = $_POST["disponible"];

	$articulos -> multimedia = $_POST["multimedia"];

	if(isset($_FILES["fotoPrincipal"])){

		$articulos -> fotoPrincipal = $_FILES["fotoPrincipal"];

	}else{

		$articulos -> fotoPrincipal = null;

	}

	$articulos -> ajaxCrearArticulo();
*/



/*=============================================
TRAER ARTICULO
=============================================*/
if(isset($_POST["idArticulo"])){

	$traerProducto = new AjaxArticulo();
	$traerProducto -> idArticulo = $_POST["idArticulo"];
	$traerProducto -> ajaxTraerArticulo();

}