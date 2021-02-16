<?php

require_once "conexion.php";

class ModeloNotificacionesM{
	
	/*=============================================
	MOSTRAR NOTIFICACIONES
	=============================================*/

	static public function mdlMostrarNotificaciones($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY idNotificacion DESC");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ELIMINAR NOTIFICACION
	=============================================*/

	static public function mdlEliminarNotificacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idNotificacion = :idNotificacion");

		$stmt -> bindParam(":idNotificacion", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}