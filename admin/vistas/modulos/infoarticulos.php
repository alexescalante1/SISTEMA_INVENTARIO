
<!--=====================================
INFOPRODUCTOS
======================================-->
<div class="container-fluid infoproducto content-wrapper">
	
	<div class="content">
		
		<div class="box">


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
					echo '<div class="col-md-5 col-sm-6 col-xs-12 ">

							<br>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">';

								if($mda != null){
									
									echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
									for($i = 1; $i < count($mda); $i ++){
										
										echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
	
									}								
	
								}

								echo '
								</ol>
							
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">';

								if($mda != null){

									echo '<div class="item active">
											<img src="'.$mda[0]["foto"].'" alt="...">
											<div class="carousel-caption">
											...
											</div>
										</div>';

									for($i = 1; $i < count($mda); $i ++){
	
										echo '<div class="item">
											<img src="'.$mda[$i]["foto"].'" alt="...">
											<div class="carousel-caption">
											...
											</div>
										</div>';
										
									}								
	
								}
								
								echo '

								</div>
							
								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
								</a>
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
			PRODUCTO
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
				REGRESAR A LA TIENDA
				======================================-->

				<div class="col-xs-6">
					
					<h6>
						
						<a href="javascript:history.back()" class="text-muted">
							
							<i class="fa fa-reply"></i> Regresar al Gestor de Articulos

						</a>

					</h6>

				</div>

				<div class="clearfix"></div>

				<!--=====================================
				ESPACIO PARA EL PRODUCTO
				======================================-->



				<?php

					/*=============================================
					TITULO
					=============================================*/				
					/*
					if($infoproducto["oferta"] == 0){
*/
						$fecha = date('Y-m-d');
						$fechaActual = strtotime('-30 day', strtotime($fecha));
						$fechaNueva = date('Y-m-d', $fechaActual);


						echo '<h1 class="text-muted text-uppercase">'.$infoarticulo["titulo"].'</h1>';


						/*
						if($fechaNueva > $infoproducto["fecha"]){

							echo '<h1 class="text-muted text-uppercase">'.$infoarticulo["titulo"].'</h1>';

						}else{

							echo '<h1 class="text-muted text-uppercase">'.$infoproducto["titulo"].'

							<br>

							<small>
						
								<span class="label label-warning">Nuevo</span>

							</small>

							</h1>';

						}



						*/




					/*=============================================
					DESCRIPCIÓN
					=============================================*/		

					echo '<p>'.$infoarticulo["descripcion"].'</p>';

				?>
				
				<!--=====================================
				CARACTERÍSTICAS DEL PRODUCTO
				======================================-->
					<input type="text" class="knob" value="55" data-width="90" data-height="90" data-fgcolor="blue" data-readonly="true">
	
					<p class="text-muted text-center" style="font-size:12px"> 55% disponible</p>

				<hr>

				<div class="form-group row">
					
				<?php
							echo '
							<br><br>
							<h4 class="col-md-12 col-sm-0 col-xs-0">

								<hr>

								<span class="label label-default" style="font-weight:100">

									<i class="fa fa-tasks" style="margin-right:5px"></i> 4
									Unidades Disponibles  | 
									

									<i class="fa fa-balance-scale" style="margin:0px 5px"></i>
									'.$infoarticulo["peso"].' Kg |
									
									
									<i class="fa fa-credit-card-alt" style="margin:0px 5px"></i>
									Precio: S/.<span class="vistas">'.$infoarticulo["precio"].'</span> .00

								</span>

							</h4>

							';


				?>

				</div>

				<!--=====================================
				BOTONES DE COMPRA
				======================================-->

				<div class="row botonesCompra">

				<?php
/*
					if($infoproducto["precio"]==0){
*/
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

							}

							*/






						}else{

							echo '<a href="#modalNotificacion" data-toggle="modal">

								<button class="btn btn-default btn-block btn-lg backColor">	SOLICITAR AHORA</button>

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
			</div>
			
			



			<div class="box-header with-border container">
	 
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCodArticulo">
				
				Agregar Articulo

				</button>

			</div>
			<div class="box-body container">

				<table class="table table-bordered table-striped dt-responsive tablaCodArticulos" width="100%">

					<thead>
					
						<tr>
						
						<th style="width:10px">#</th>
						<th>Codigo Natural</th>
						<th>Codigo Patrimonial</th>
						<th>Estado</th>
						<th>Fecha de creacion</th>
						<th>Acciones</th>

						</tr> 

					</thead>   

				</table>
				
			</div>


						





		</div>

		<?php

			echo $infoarticulo["idDetalleArticulo"];		///AQUI BROO			

		?>

		</div>

	</div>

</div>


<?php

echo $infoarticulo["idDetalleArticulo"];		///AQUI BROO			

$idProductS = IdProducto::IdProductoGET();

echo $idProductS;

?>
