<!--=====================================
BANNER
======================================-->

<?php

$servidor = Ruta::ctrRutaServidor();

$ruta = "sin-categoria";

/*=============================================
PRODUCTOS DESTACADOS
=============================================*/

$titulosModulos = "ARTICULOS DESTACADOS";
$rutaModulos = "mas-destacados";

$base = 0;
$tope = 6;

$ordenar = "prestados";
$item = null;
$valor = null;
$modo = "DESC";

/*
$ordenar = "prestados";
$item = "disponible";
$valor = 1;
$modo = "DESC";
*/

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
					
					//if($value["disponible"] != 0){

					echo '<li class="col-md-2 col-sm-6 col-xs-12">
							<div class="sombra paddingproducto">
							<figure>
								<a href="'.$value["ruta"].'" class="pixelProducto" >
									
									<center>
									<a class="popper" href="'.$value["ruta"].'">
									<img src="'.$servidor.$value["portada"].'" class="img-responsive" width="100%">
									</a></br>
									</center>

								</a>

							</figure>

							<h4 style="padding-bottom:5px;">
					
								<small>
									
									<a href="'.$value["ruta"].'" class="pixelProducto">
										
										'.$value["titulo"].'<br>
										<!--
										<span style="color:rgba(0,0,0,0)">-</span>-->';
										/*
										$fecha = date('Y-m-d');
										$fechaActual = strtotime('-30 day', strtotime($fecha));
										$fechaNueva = date('Y-m-d', $fechaActual);
										
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
							</div>
							';

						echo '</li>';

					//}
				}

				echo '</ul>

			</div>

		</div>';

?>

