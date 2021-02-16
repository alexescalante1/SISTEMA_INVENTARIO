<?php

if($_SESSION["perfil"] != "administrador"){

	return;	

}

$nuevasNotificaciones = ControladorNotificacionesM::ctrContarNotificaciones("notificacion","visto", 0);
$usuariosMorosos = ControladorNotificacionesM::ctrContarNotificaciones("usuarios","verificacion", 1);

$totalNotificaciones = $usuariosMorosos[0] + $nuevasNotificaciones[0];

?>

<!--=====================================
NOTIFICACIONES
======================================-->

<!-- notifications-menu -->
<li class="dropdown notifications-menu">
	
	<!-- dropdown-toggle -->
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		
		<i class="fa fa-bell-o"></i>
		
		<span class="label label-success"><?php  echo $totalNotificaciones; ?></span>
	
	</a>
	<!-- dropdown-toggle -->

	

	<!--dropdown-menu -->
	<ul class="dropdown-menu">

		<li class="header">Tu tienes <?php  echo $totalNotificaciones; ?> notificaciones</li>

		<li>
			<!-- menu -->
			<ul class="menu">

				<!-- ventas -->
				<li>
					
					<a href="notificacionesM">
					
						<i class="fa fa-shopping-cart text-aqua"></i> <?php  echo $nuevasNotificaciones[0]; ?> Prestamos Pendientes
					
					</a>

				</li>

				<!-- usuarios -->
				<li>
				
					<a href="usuarios">
					
						<i class="fa fa-users text-red"></i> <?php  echo $usuariosMorosos[0]; ?> Usuarios Morosos
					
					</a>

				</li>

			</ul>
			<!-- menu -->

		</li>

	</ul>
	<!--dropdown-menu -->

</li>
<!-- notifications-menu -->	
