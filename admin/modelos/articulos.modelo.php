<?php

require_once "conexion.php";

class ModeloArticulos{

	/*=============================================
	MOSTRAR INFOARTICULO
	=============================================*/

	static public function mdlMostrarInfoArticulo($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}
	
	
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

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ruta, titulo, descripcion, disponible, portada, multimedia, prestados, peso, precio, idCategoria, palabrasClave, fecha) VALUES (:ruta, :titulo, :descripcion, :disponible, :portada, :multimedia, :prestados, :peso, :precio, :idCategoria, :palabrasClave, :fecha)");

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
		$stmt->bindParam(":fecha", $datos["fechact"], PDO::PARAM_STR);
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


























	/*=============================================
	CREAR COD
	=============================================*/

	static public function mdlIngresarCodigoPatrimonial($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(estado, idDetalleArticulo, codigoPatrimonial, fecha) VALUES (:estado, :idDetalleArticulo, :codigoPatrimonial, :fecha)");

		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":idDetalleArticulo", $datos["idDetalleArticulo"], PDO::PARAM_STR);
		$stmt->bindParam(":codigoPatrimonial", $datos["codigoPatrimonial"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fechact"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}



	/*=============================================
	ELIMINAR COD
	=============================================*/

	static public function mdlEliminarCodArticulo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idArticulo = :idArticulo");

		$stmt -> bindParam(":idArticulo", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	CODIGO CONTADOR
	=============================================*/

	static public function mdlContarCodArticulos($tabla, $item, $valor, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("SELECT count(*) FROM $tabla WHERE $item = :$item AND $item2 = :$item2");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

}