<?php

class ControladorArticulos{

	/*=============================================
	MOSTRAR CATEGORÍAS
	=============================================*/

	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "categoria";

		$respuesta = ModeloArticulos::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR ARTICULOS
	=============================================*/

	static public function ctrMostrarArticulos($ordenar, $item, $valor, $base, $tope, $modo){

		$tabla = "detallearticulo";

		$respuesta = ModeloArticulos::mdlMostrarArticulos($tabla, $ordenar, $item, $valor, $base, $tope, $modo);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR INFOARTICULOS
	=============================================*/

	static public function ctrMostrarInfoArticulo($item, $valor){

		$tabla = "detallearticulo";

		$respuesta = ModeloArticulos::mdlMostrarInfoArticulo($tabla, $item, $valor);

		return $respuesta;

	}













    






	/*=============================================
	LISTAR PRODUCTOS
	=============================================*/

	static public function ctrListarProductos($ordenar, $item, $valor){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlListarProductos($tabla, $ordenar, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR BANNER
	=============================================*/

	static public function ctrMostrarBanner($ruta){

		$tabla = "banner";

		$respuesta = ModeloProductos::mdlMostrarBanner($tabla, $ruta);

		return $respuesta;

	}

	/*=============================================
	BUSCADOR
	=============================================*/

	static public function ctrBuscarProductos($busqueda, $ordenar, $modo, $base, $tope){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlBuscarProductos($tabla, $busqueda, $ordenar, $modo, $base, $tope);

		return $respuesta;

	}

	/*=============================================
	LISTAR PRODUCTOS BUSCADOR
	=============================================*/

	static public function ctrListarProductosBusqueda($busqueda){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlListarProductosBusqueda($tabla, $busqueda);

		return $respuesta;

	}

	/*=============================================
	ACTUALIZAR VISTA PRODUCTO
	=============================================*/

	static public function ctrActualizarProducto($item1, $valor1, $item2, $valor2){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlActualizarProducto($tabla, $item1, $valor1, $item2, $valor2);

		return $respuesta;
	}

}