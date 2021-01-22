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

	/*=============================================
	ELIMINAR NOTIFICACION
	=============================================*/

	static public function ctrEliminarNotificacion(){

		if(isset($_GET["idNotificacion"])){

			$datos = $_GET["idNotificacion"];

			$respuesta = ModeloNotificacionesM::mdlEliminarNotificacion("notificacion", $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La notificacion ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "notificacionesM";

								}
							})

				</script>';

			}		



		}

	}

}