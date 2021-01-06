<!--=====================================
BANNER
======================================-->

<?php

$servidor = Ruta::ctrRutaServidor();

$ruta = "sin-categoria";

$banner = ControladorProductos::ctrMostrarBanner($ruta);

/*=============================================
PRODUCTOS DESTACADOS
=============================================*/

$titulosModulos = "LO MÁS PRESTADO";
$rutaModulos = "lo-mas-vendido";

$base = 0;
$tope = 6;

$ordenar = "prestados";
$item = "disponible";
$valor = 1;
$modo = "DESC";

$ventas = ControladorArticulos::ctrMostrarArticulos($ordenar, $item, $valor, $base, $tope, $modo);

$modulos = $ventas;

	echo '

		<div class="container-fluid productos">
	
			<div class="container">
		
				<div class="row">

					<div class="col-xs-12 tituloDestacado">

						<div class="col-sm-6 col-xs-12">
					
							<h3><small>'.$titulosModulos.' </small></h3>

						</div>

						<div class="col-sm-6 col-xs-12">
					
							<a href="'.$rutaModulos.' ">
								
								<button class="btn btn-default pull-right">
									
									VER MÁS <span class="fa fa-chevron-right"></span>

								</button>

							</a>

						</div>

					</div>

					<div class="clearfix"></div>

					<hr>

				</div>

				<ul class="grid0">';

				foreach ($ventas as $key => $value) {
					
					if($value["disponible"] != 0){
					
					//echo $value["multimedia"];

					echo '<li class="col-md-2 col-sm-6 col-xs-12">

							<figure>
								
								<a href="'.$value["ruta"].'" class="pixelProducto" >
									
									<center>
									<img src="'.$servidor.$value["portada"].'" class="img-responsive" width="100%">
									</center>

								</a>

							</figure>

							<h4>
					
								<small>
									
									<a href="'.$value["ruta"].'" class="pixelProducto">
										
										'.$value["titulo"].'<br>
										<!--
										<span style="color:rgba(0,0,0,0)">-</span>-->';

										$fecha = date('Y-m-d');
										$fechaActual = strtotime('-30 day', strtotime($fecha));
										$fechaNueva = date('Y-m-d', $fechaActual);
										/*
										if($fechaNueva < $value["fecha"]){

											echo '<span class="label label-warning fontSize">Nuevo</span> ';

										}

										if($value["oferta"] != 0 && $value["precio"] != 0){

											echo '<span class="label label-warning fontSize">'.$value["descuentoOferta"].'% off</span>';

										}
										*/
									echo '</a>	

								</small>			

							</h4>

							<div class="col-xs-6 precio">';
							/*					
							if($value["precio"] == 0){

								echo '<h2><small>GRATIS</small></h2>';

							}else{

								if($value["oferta"] != 0){

									echo '<h2>

											<small>
						
												<strong class="oferta">USD $'.$value["precio"].'</strong>

											</small>

											<small>$'.$value["precioOferta"].'</small>
										
										</h2>';

								}else{

									echo '<h2><small>USD $'.$value["precio"].'</small></h2>';

								}
								
							}
							*/				
							/*
							echo '</div>
							
							<div class="col-xs-6 enlaces">
								
								<div class="btn-group pull-right">
									
									<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos">
										
										<i class="fa fa-heart" aria-hidden="true"></i>

									</button>';

									if($value["tipo"] == "virtual" && $value["precio"] != 0){

										if($value["oferta"] != 0){

											echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["precioOferta"].'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											</button>';

										}else{

											echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value["id"].'" imagen="'.$servidor.$value["portada"].'" titulo="'.$value["titulo"].'" precio="'.$value["precio"].'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

											<i class="fa fa-shopping-cart" aria-hidden="true"></i>

											</button>';

										}

									}

									echo '<a href="'.$value["ruta"].'" class="pixelProducto">
									
										<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
											
											<i class="fa fa-eye" aria-hidden="true"></i>

										</button>	
									
									</a>

								</div>

							</div>

							*/

						echo '</li>';

					}
				}

				echo '</ul>

			</div>

		</div>';

?>

