<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";


class AjaxPrestamo{


	/*=============================================
  	DAR DE BAJA COD ARTICULOS
 	=============================================*/	
/*
 	public $bajaCodArticulo;
	public $bajaIdCodA;

	public function ajaxBajaCodArticulo(){

		$tabla = "articulos";

		$item1 = "estado";
		$valor1 = $this->bajaCodArticulo;

		$item2 = "idArticulo";
		$valor2 = $this->bajaIdCodA;

		$respuesta = ModeloArticulos::mdlActualizarArticulos($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}
*/
	/*=============================================
	GUARDAR PRESTAMO Y EDITAR PRESTAMO
	=============================================*/	

	public $nombrePrestamista;
	public $nombreUsuario;
	public $codUsuario;
	public $selecDiasPrestamo;
	public $idDetArticulo;

	public function  ajaxCrearPrestamo(){

		$datos = array(
			"nombrePrestamista"=>$this->nombrePrestamista,
			"nombreUsuario"=>$this->nombreUsuario,				
			"codUsuario"=>$this->codUsuario,
			"selecDiasPrestamo"=>$this->selecDiasPrestamo,
			"idDetalleArticulo"=>$this->idDetArticulo
			);

		$respuesta = ControladorArticulos::ctrCrearPrestamo($datos);

		echo $respuesta[0];

	}


	public $idPrestamo;
	public $idArticulo;
	public $codPatrimonial;

	public function  ajaxCrearPrestamoCod(){

		$datos = array(
			"idPrestamo"=>$this->idPrestamo,
			"idArticulo"=>$this->idArticulo,				
			"codPatrimonial"=>$this->codPatrimonial
			);

		$respuesta = ControladorArticulos::ctrCrearPrestamoCod($datos);

		echo $respuesta;

	}


	/*=============================================
	TRAER ARTICULOS
	=============================================*/	
	/*
	public $idArticulo;

	public function ajaxTraerArticulo(){

		$item = "idDetalleArticulo";
		$valor = $this->idArticulo;

		$respuesta = ControladorArticulos::ctrMostrarArticulos($item, $valor);

		echo json_encode($respuesta);

	}
*/
	/*=============================================
	EDITAR ARTICULOS
	=============================================*/	
/*
	public function  ajaxEditarArticulo(){

		$datos = array(
			"idArticulo"=>$this->idA,
			"tituloArticulo"=>$this->tituloArticulo,
			"rutaArticulo"=>$this->rutaArticulo,
			"categoria"=>$this->seleccionarCategoria,
			"descripcionArticulo"=>$this->descripcionArticulo,					
			"pClavesArticulo"=>$this->pClavesArticulo,
			"precio"=>$this->precio,
			"peso"=>$this->peso,
			"disponible"=>$this->disponible,
			"multimedia"=>$this->multimedia,
			"fotoPrincipal"=>$this->fotoPrincipal,
			"antiguaFotoPrincipalA"=>$this->antiguaFotoPrincipalA
			);

		$respuesta = ControladorArticulos::ctrEditarArticulo($datos);
	
		echo $respuesta;

	}
*/
	
 }




























/*=============================================
BAJA COD ARTICULO
=============================================*/	
/*
if(isset($_POST["bajaIdCodA"])){
	
	$bajaCodigoArticuloM = new AjaxPrestamo();
	$bajaCodigoArticuloM -> bajaCodArticulo = $_POST["bajaCodArticulo"];
	$bajaCodigoArticuloM -> bajaIdCodA = $_POST["bajaIdCodA"];
	$bajaCodigoArticuloM -> ajaxBajaCodArticulo();

}
*/
/*=============================================
TRAER ARTICULO
=============================================*/

/*
if(isset($_POST["idArticulo"])){

	$traerProducto = new AjaxPrestamo();
	$traerProducto -> idArticulo = $_POST["idArticulo"];
	$traerProducto -> ajaxTraerArticulo();

}
*/
/*=============================================
EDITAR ARTICULO
=============================================*/

/*
if(isset($_POST["idA"])){

	$editarArticulo = new AjaxPrestamo();
	$editarArticulo -> idA = $_POST["idA"];
	$editarArticulo -> tituloArticulo = $_POST["editarArticulo"];
	$editarArticulo -> rutaArticulo = $_POST["rutaArticulo"];
	$editarArticulo -> seleccionarCategoria = $_POST["seleccionarCategoria"];
	$editarArticulo -> descripcionArticulo = $_POST["descripcionArticulo"];		
	$editarArticulo -> pClavesArticulo = $_POST["pClavesArticulo"];
	$editarArticulo -> precio = $_POST["precio"];
	$editarArticulo -> peso = $_POST["peso"];
	$editarArticulo -> disponible = $_POST["disponible"];
	$editarArticulo -> multimedia = $_POST["multimedia"];

	if(isset($_FILES["fotoPrincipal"])){

		$editarArticulo -> fotoPrincipal = $_FILES["fotoPrincipal"];

	}else{

		$editarArticulo -> fotoPrincipal = null;

	}

	$editarArticulo -> antiguaFotoPrincipalA = $_POST["antiguaFotoPrincipalA"];

	$editarArticulo -> ajaxEditarArticulo();

}
*/

#CREAR PRESTAMO
#-----------------------------------------------------------
if(isset($_POST["nombrePrestamista"])){

	//echo $_POST["nombrePrestamista"];

	$prestamo = new AjaxPrestamo();
	$prestamo -> nombrePrestamista = $_POST["nombrePrestamista"];
	$prestamo -> nombreUsuario = $_POST["nombreUsuario"];
	$prestamo -> codUsuario = $_POST["codUsuario"];
	$prestamo -> selecDiasPrestamo = $_POST["selecDiasPrestamo"];
	$prestamo -> idDetArticulo = $_POST["idDetalleArticuloPresta"];
	$prestamo -> ajaxCrearPrestamo();

}

#CREAR PRESTAMO
#-----------------------------------------------------------
if(isset($_POST["idPrestamo"])){

	//echo $_POST["idPrestamo"];

	$prestamoCod = new AjaxPrestamo();
	$prestamoCod -> idPrestamo = $_POST["idPrestamo"];
	$prestamoCod -> idArticulo = $_POST["idArticulo"];
	$prestamoCod -> codPatrimonial = $_POST["codPatrimonial"];

	$prestamoCod -> ajaxCrearPrestamoCod();

}