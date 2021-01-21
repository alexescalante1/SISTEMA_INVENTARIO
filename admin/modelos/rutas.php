<?php

class Ruta{

	/*=============================================
	RUTA LADO DEL CLIENTE
	=============================================*/	

	public function ctrRuta(){

		return "http://localhost/SISTEMA_INVENTARIO/estudiante/";
	
	}

	/*=============================================
	RUTA LADO DEL SERVIDOR
	=============================================*/	

	public function ctrRutaServidor(){

		return "http://localhost/SISTEMA_INVENTARIO/admin/";
	
	}

}

class IdProducto{

	public $idProduct = 4;

	public function IdProductoSET($ID){

		$idProduct = $ID;

	}

	public function IdProductoGET(){
		
		//return $idProduct;

	}
}