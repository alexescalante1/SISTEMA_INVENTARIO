<?php

$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

?>

<!--=====================================
BREADCRUMB INFOARTICULOS
======================================-->
<div class="container-fluid">
	
	<div class="container">
		
		<div class="row">
			
			<ul class="breadcrumb fondoBreadcrumb text-uppercase">
				
				<li><a href="<?php echo $url;  ?>">INICIO</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>

		</div>

	</div>

</div>


<!--=====================================
INFOARTICULOS
======================================-->
<div class="container-fluid infoproducto">
	
	<div class="container">
		
		<div class="row">

			<?php

				$item =  "ruta";
				$valor = $rutas[0];
				$infoproducto = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

				$infoarticulo = ControladorArticulos::ctrMostrarInfoArticulo($item, $valor);

				$multimedia = json_decode($infoproducto["multimedia"],true);

				$mda = json_decode($infoarticulo["multimedia"],true);
				/*=============================================
				VISOR DE IMÁGENES
				=============================================*/
/*
				if($infoproducto["tipo"] == "fisico"){
*/
					echo '<div class="col-md-5 col-sm-6 col-xs-12 visorImg">
						
							<figure class="visor">';

							if($mda != null){

								for($i = 0; $i < count($mda); $i ++){

									echo '<img id="lupa'.($i+1).'" class="img-thumbnail" src="'.$servidor.$mda[$i]["foto"].'">';

								}								

								echo '</figure>

								<div class="flexslider">
								  
								  <ul class="slides">';

								for($i = 0; $i < count($mda); $i ++){

									echo '<li>
								     	<img value="'.($i+1).'" class="img-thumbnail" src="'.$servidor.$mda[$i]["foto"].'" alt="'.$infoarticulo["titulo"].'">
								    </li>';

								}

							}		
							    						 
							  echo '</ul>

							</div>

						</div>';			
/*
				}else{

					/*=============================================
					VISOR DE VIDEO
					=============================================*/
/*
					echo '<div class="col-sm-6 col-xs-12">
							
						<iframe class="videoPresentacion" src="https://www.youtube.com/embed/'.$infoproducto["multimedia"].'?rel=0&autoplay=0" width="100%" frameborder="0" allowfullscreen></iframe>

					</div>';

				}			
*/
			?>

			<!--=====================================
			ARTICULOS
			======================================-->

			<?php
/*
				if($infoproducto["tipo"] == "fisico"){
*/
					echo '<div class="col-md-7 col-sm-6 col-xs-12">';
/*
				}else{

					echo '<div class="col-sm-6 col-xs-12">';
				}
*/
			?>

				<!--=====================================
				REGRESAR A INICIO
				======================================-->
				<!--
				<div class="col-xs-6">
					
					<h6>
						
						<a href="javascript:history.back()" class="text-muted">
							
							<i class="fa fa-reply"></i> REGRESAR

						</a>

					</h6>

				</div>
				-->
				<!--=====================================
				COMPARTIR EN REDES SOCIALES
				======================================-->

				<div class="clearfix"></div>


				<?php

					/*=============================================
					TITULO
					=============================================*/				

					$fecha = date('Y-m-d');
					$fechaActual = strtotime('-30 day', strtotime($fecha));
					$fechaNueva = date('Y-m-d', $fechaActual);

					if($fechaNueva > $infoarticulo["fecha"]){

						echo '<h1 class="text-muted text-uppercase">'.$infoarticulo["titulo"].'</h1>';

					}else{

						echo '<h1 class="text-muted text-uppercase">'.$infoarticulo["titulo"].'

						<br>

						<small>
					
							<span class="label label-warning">Nuevo</span>

						</small>

						</h1>';

					}

					/*=============================================
					DESCRIPCIÓN
					=============================================*/		

					echo '<p style="text-align: justify" >'.$infoarticulo["descripcion"].'</p>';

				?>
				
				<!--=====================================
				CARACTERÍSTICAS DEL PRODUCTO
				======================================-->
				
				<br>


				<input type="text" class="knob" value="65" data-width="220" data-height="220" data-fgcolor="blue" data-readonly="true">

				<p class="text-muted text-center" style="font-size:12px"> 65% disponible</p>

				

				<div class="form-group row">
					
				<?php
					
				echo '
				<h4 class="col-md-12 col-sm-0 col-xs-0">

					<span class="label label-default" style="font-weight:100">

						<i class="fa fa-tasks" style="margin-right:5px"></i> 4
						Unidades Disponibles  | 
						

						<i class="fa fa-balance-scale" style="margin:0px 5px"></i>
						'.$infoarticulo["peso"].' Kg |
						
						
						<i class="fa fa-credit-card-alt" style="margin:0px 5px"></i>
						Precio: S/.<span class="vistas">'.$infoarticulo["precio"].'</span>.00

					</span>

				</h4>';

				?>

				</div>

				<!--=====================================
				BOTONES DE COMPRA
				======================================-->

				<div class="row botonesCompra">

				<?php

					echo '<div class="col-md-6 col-xs-12">';

					if(isset($_SESSION["validarSesion"]) && $_SESSION["validarSesion"] == "ok"){

						/*
						if($infoproducto["tipo"]=="virtual"){
					
							echo '<button class="btn btn-default btn-block btn-lg backColor agregarGratis" idProducto="'.$infoproducto["id"].'" idUsuario="'.$_SESSION["id"].'" tipo="'.$infoproducto["tipo"].'" titulo="'.$infoproducto["titulo"].'">ACCEDER AHORA</button>';

						}else{

							echo '<button class="btn btn-default btn-block btn-lg backColor agregarGratis" idProducto="'.$infoproducto["id"].'" idUsuario="'.$_SESSION["id"].'" tipo="'.$infoproducto["tipo"].'" titulo="'.$infoproducto["titulo"].'">SOLICITAR AHORA</button>

								<br>

								<div class="col-xs-12 panel panel-info text-left">

								<strong>¡Atención!</strong>

									El producto a solicitar es totalmente gratuito y se enviará a la dirección solicitada, sólo se cobrará los cargos de envío.

								</div>
							';

						}*/

					}else{

						if($infoarticulo["disponible"]){

							echo '<a href="#modalNotificacion" data-toggle="modal">

							<button class="btn btn-default btn-block btn-lg backColor">SOLICITAR AHORA</button>

							</a>';

						}else{

							echo '<a href="#" data-toggle="modal">

							<button class="btn btn-default btn-block btn-lg">NO DISPONIBLE</button>

							</a>';
						}

					}

					echo '</div>';

				?>

				</div>
				
				<!--=====================================
				ZONA DE LUPA
				======================================-->

				<figure class="lupa">
					
					<img src="">

				</figure>

			</div>
			
		</div>









		<!--=====================================
		MANUALES
		======================================-->

		<div class="row">

			<?php
			/*
			$datos = array("idUsuario"=>"",
						   "idProducto"=>$infoproducto["id"]);

			$comentarios = ControladorUsuarios::ctrMostrarComentariosPerfil($datos);
			$cantidad = 0;

			foreach ($comentarios as $key => $value){
				
				if($value["comentario"] != ""){

					$cantidad += count($value["id"]);

				}
			}
			*/

			$cantidad = 0;

			?>
			
			<ul class="nav nav-tabs">

			<?php

				if($cantidad == 0){

					echo '<li class="active"><a>ESTE ARTICULO NO TIENE MANUALES</a></li>';

				}else{

					echo '<li class="active"><a>MANUALES '.$cantidad.'</a></li>
						  <li><a id="verMas" href="">Ver más</a></li>';

				}

			?>

			</ul>

			<br>

		</div>

		<div class="row">

				
				<!-- MANIALES -->


		</div>

	</div>

</div>








<!--=====================================
VENTANA MODAL PARA NOTIFICACION
======================================-->

<div class="modal fade modalFormulario" id="modalNotificacion" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">NOTIFICAR</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

			<!--=====================================
			REGISTRO DIRECTO
			======================================-->

			<form method="post" onsubmit="return registroNotificacion()">
				
			<!--<form method="post">-->

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="number" class="form-control" id="regTipoDocT" name="regTipoDocT" placeholder="Tipo de Documento" required  min="0" max="1" value="0">

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control" id="regNumDocT" name="regNumDocT" placeholder="Numero de Documento" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control" id="regNombreT" name="regNombreT" placeholder="Nombres" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control" id="regApellidoT" name="regApellidoT" placeholder="Apellidos" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="number" class="form-control" id="regCant" name="regCant" placeholder="Cantidad de Articulos" required  min="0" max="5" value="0">

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="number" class="form-control" id="regDias" name="regDias" placeholder="Dias de prestamo" required  min="0" max="12" value="0">

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control" id="regDetalle" name="regDetalle" placeholder="Detallar Motivos" required>

					</div>

				</div>

				<?php

					$notificar = new ControladorNotificacion();
					$notificar -> ctrRegistroNotificacion($infoarticulo["idDetalleArticulo"]);

				?>
				
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>
      
    </div>

</div>


