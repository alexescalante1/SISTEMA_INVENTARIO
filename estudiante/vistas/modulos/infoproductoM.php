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
				
				$infoarticulo = ControladorArticulos::ctrMostrarInfoArticulo($item, $valor);

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
				
				<div class="col-md-6 col-sm-0 col-xs-0" style="display: table-cell;vertical-align: middle;text-align: center;">
				<?php

					$CantDisponible = ControladorArticulos::ctrContarCodArticulos("estado", 1, "idDetalleArticulo", $infoarticulo["idDetalleArticulo"]);
					$CantPrestados = ControladorArticulos::ctrContarCodArticulos("estado", 2, "idDetalleArticulo", $infoarticulo["idDetalleArticulo"]);
					
					$CantTotal = $CantDisponible[0]+$CantPrestados[0];

					if($CantTotal){
						
						echo '
						<input type="text" class="knob" value="'.round( ($CantDisponible[0]*100)/$CantTotal, 1, PHP_ROUND_HALF_UP).'" data-width="220" data-height="220" data-fgcolor="#5AB0FF" data-readonly="true">

						<p class="text-muted text-center" style="font-size:14px"> '.round( ($CantDisponible[0]*100)/$CantTotal, 1, PHP_ROUND_HALF_UP).'% DISPONIBLE</p>';

					}else{
						echo '
						<input type="text" class="knob" value="0" data-width="220" data-height="220" data-fgcolor="blue" data-readonly="true">

						<p class="text-muted text-center" style="font-size:14px"> 0% DISPONIBLE</p>';
					}

				?>
				</div>


				<div class="form-group row">
					
				<?php
					
				echo '
				<h4 class="col-md-12 col-sm-0 col-xs-0">

					<span class="label label-default" style="font-weight:100">

						<i class="fa fa-tasks" style="margin-right:5px"></i> '.$CantDisponible[0].'
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

					if($CantTotal){
						if(isset($_SESSION["validarSesionUSERSIUNAP"]) && $_SESSION["validarSesionUSERSIUNAP"] == "ok"){

							if($infoarticulo["disponible"]){
	
								echo '<a href="#modalNotificacion" data-toggle="modal">
	
								<button class="btn btn-default btn-block btn-lg backColor">SOLICITAR AHORA</button>
	
								</a>';
	
							}else{
	
								echo '<a href="#" data-toggle="modal">
	
								<button class="btn btn-default btn-block btn-lg">NO DISPONIBLE PARA PRESTAMO</button>
	
								</a>';
							}
	
						}else{
							echo '<a href="#modalIngreso" data-toggle="modal">
	
							<button class="btn btn-default btn-block btn-lg backColor">INGRESAR</button>

							</a>';
						}
					}else{
						echo '<a href="#" data-toggle="modal">

							<button class="btn btn-default btn-block btn-lg">SIN STOCK</button>

							</a>';
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

				<!--
				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<select class="form-control input-lg"  id="regTipoDocT" name="regTipoDocT" required>

							<option value="0">ESTUDIANTE</option>
							<option value="1">DOCENTE</option>

						</select>

					</div>

				</div>
-->
				

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control" id="regNumDocT" name="regNumDocT" placeholder="Numero de Documento" value="<?php echo $_SESSION["codigoUSERSIUNAP"];?>" required readonly>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<input type="text" class="form-control" id="regNombreT" name="regNombreT" value="<?php echo $_SESSION["nombreUSERSIUNAP"];?>" required readonly>

					</div>

				</div>


				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<select class="form-control input-lg"  id="regCant" name="regCant" required>

							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>

						</select>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<select class="form-control input-lg"  id="regDias" name="regDias" required>

							<option value="3">3</option>
							<option value="6">6</option>
							<option value="9">9</option>
							<option value="12">12</option>
							<option value="15">15</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option value="40">40</option>

						</select>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

						<textarea type="text" maxlength="320" rows="3" class="form-control input-lg" id="regDetalle" name="regDetalle" placeholder="Ingresar descripción del articulo"></textarea>

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


