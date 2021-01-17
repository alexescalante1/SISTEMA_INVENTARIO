<?php

require_once "conexion.php";

class ModeloArticulos{

	/*=============================================
	MOSTRAR EL TOTAL DE VENTAS
	=============================================*/	

	static public function mdlMostrarTotalArticulos($tabla, $orden){
	
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt-> close();

		$stmt = null;

	}



	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	static public function mdlMostrarSumaVentas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT SUM(ventas) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR ARTICULOS
	=============================================*/

	static public function mdlActualizarArticulos($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
		
	}

	/*=============================================
	ACTUALIZAR OFERTA ARTICULOS
	=============================================*/
	static public function mdlActualizarOfertaArticulos($tabla, $datos, $ofertadoPor, $precioOfertaActualizado, $descuentoOfertaActualizado, $idOferta){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $ofertadoPor = :$ofertadoPor, oferta = :oferta, precioOferta = :precioOferta, descuentoOferta = :descuentoOferta, imgOferta = :imgOferta, finOferta = :finOferta WHERE id = :id");

		$stmt->bindParam(":".$ofertadoPor, $datos["oferta"], PDO::PARAM_STR);
		$stmt->bindParam(":oferta", $datos["oferta"], PDO::PARAM_STR);
		$stmt->bindParam(":precioOferta", $precioOfertaActualizado, PDO::PARAM_STR);
		$stmt->bindParam(":descuentoOferta", $descuentoOfertaActualizado, PDO::PARAM_STR);
		$stmt->bindParam(":imgOferta", $datos["imgOferta"], PDO::PARAM_STR);
		$stmt->bindParam(":finOferta", $datos["finOferta"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $idOferta, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;


	}






	/*=============================================
	MOSTRAR ARTICULOS
	=============================================*/

	static public function mdlMostrarArticulos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY idDetalleArticulo DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;


	}


	/*=============================================
	CREAR ARTICULO
	=============================================*/

	static public function mdlIngresarArticulo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ruta, titulo, descripcion, disponible, portada, multimedia, prestados, peso, precio, idCategoria, palabrasClave) VALUES (:ruta, :titulo, :descripcion, :disponible, :portada, :multimedia, :prestados, :peso, :precio, :idCategoria, :palabrasClave)");

		$stmt->bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":disponible", $datos["disponible"], PDO::PARAM_STR);
		$stmt->bindParam(":portada", $datos["imgFotoPrincipal"], PDO::PARAM_STR);
		$stmt->bindParam(":multimedia", $datos["multimedia"], PDO::PARAM_STR);
		$stmt->bindParam(":prestados", $datos["prestados"], PDO::PARAM_STR);
		$stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_STR);
		$stmt->bindParam(":palabrasClave", $datos["palabrasClave"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}



	/*=============================================
	EDITAR ARTICULO
	=============================================*/

	static public function mdlEditarArticulo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ruta = :ruta, titulo = :titulo, descripcion = :descripcion, disponible = :disponible, portada = :portada, multimedia = :multimedia, peso = :peso, precio = :precio, idCategoria = :idCategoria, palabrasClave = :palabrasClave WHERE idDetalleArticulo = :idDetalleArticulo");

		$stmt->bindParam(":ruta", $datos["rutaArticulo"], PDO::PARAM_STR);
		$stmt->bindParam(":titulo", $datos["tituloArticulo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcionArticulo"], PDO::PARAM_STR);
		$stmt->bindParam(":disponible", $datos["disponible"], PDO::PARAM_STR);
		$stmt->bindParam(":portada", $datos["imgFotoPrincipal"], PDO::PARAM_STR);
		$stmt->bindParam(":multimedia", $datos["multimedia"], PDO::PARAM_STR);
		$stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_STR);
		$stmt->bindParam(":palabrasClave", $datos["pClavesArticulo"], PDO::PARAM_STR);
		
		$stmt -> bindParam(":idDetalleArticulo", $datos["idDetalleArticulo"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	
	/*=============================================
	ELIMINAR ARTICULO
	=============================================*/

	static public function mdlEliminarArticulo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idDetalleArticulo = :idDetalleArticulo");

		$stmt -> bindParam(":idDetalleArticulo", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}


}