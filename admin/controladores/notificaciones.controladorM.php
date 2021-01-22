<?php

Class ControladorNotificacionesM{

	/*=============================================
	MOSTRAR NOTIFICACIONES
	=============================================*/

	static public function ctrMostrarNotificaciones(){

		$tabla = "notificacion";

		$respuesta = ModeloNotificacionesM::mdlMostrarNotificaciones($tabla);

		return $respuesta;

	}

}