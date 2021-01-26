<!--
<form id="form1" action="ajax/tablaCodArticulos.ajax.php" method="post">
	<input style="display:none" id="IDCODPRODET" name="IDCODPRODET" <?php echo 'value="'.$rutas[0].'"'; ?> >
	<input type="submit" value="Envar">
</form>
-->

<input style="display:none" id="IDCODPRODET" name="IDCODPRODET" <?php echo 'value="'.$rutas[0].'"'; ?> >

<!--
<table id="datatable_example" class="display" width="100%" cellspacing="0">
<thead>
<tr>
<th>Empid</th>
<th>Name</th>
<th>Salary</th>
</tr>
</thead>
</table>
-->
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

				<!--
				<div class="col-xs-6">
					
					<h6>
						
						<a href="javascript:history.back()" class="text-muted">
							
							<i class="fa fa-reply"></i> Regresar al Gestor de Articulos

						</a>

					</h6>

				</div>
				-->
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
				GRAFICAS ARTICULO
				======================================-->
					<br>
					
					<div class="chart-responsive">
						
						<div class="col-md-6 col-sm-6 col-xs-6">
							<canvas id="pieDisponible" height="210"></canvas>
							<p class="text-muted text-center" style="font-size:12px"> 55% disponible</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<canvas id="pieDisponible2" height="210"></canvas>
							<p class="text-muted text-center" style="font-size:12px"> 55% en baja</p>
						</div>

	        		</div>


					<!--
					<input type="text" class="knob" value="80" data-width="200" data-height="200" data-fgcolor="blue" data-readonly="true">
					-->
					




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
										Precio: S/.<span class="vistas">'.$infoarticulo["precio"].'</span> .00

									</span>

								</h4>

								';


						?>

					</div>

				</div>
			</div>
			</div>
			
			
			<br>


			<div class="box-header with-border">
	 
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCodArticulo">
				
				Agregar Nuevo Codigo

				</button>

			</div>
			<div class="box-body ">

				<table class="table table-bordered table-striped dt-responsive tablaCodArticulos" width="100%">

					<thead>
					
						<tr>
						
						<th style="width:10px">#</th>
						<th>Operatividad</th>
						<th>Mantenimiento</th>
						<th>Codigo Natural</th>
						<th>Codigo Patrimonial</th>
						<th>Fecha de creacion</th>
						<th>Estado</th>
						<th style="width:10px">Acciones</th>

						</tr> 

					</thead>   

				</table>
				
			</div>


		</div>

		</div>

	</div>

</div>






<!--==============================================================================================================================================================================================================================
MODAL AGREGAR COD ARTICULO
===============================================================================================================================================================================================================================-->

<div id="modalAgregarCodArticulo" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
     
     <div class="modal-content">
       
       <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
         
         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Codigo Patrimonial</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL CODIGO PATRIMONIAL
            ======================================-->
			
            <div class="form-group">
              
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                  <input type="text" class="form-control input-lg validarCodPatrimonial codPatrimonial"  placeholder="Ingresar Codigo Patrimonial">
						
				  <input type="hidden" class="idArticuloRef" <?php echo 'value="'.$infoarticulo["idDetalleArticulo"].'"'; ?> >

				  <input type="hidden" class="rutaArticulo" <?php echo 'value="'.$valor.'"'; ?> >

                </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
  
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-primary guardarCodPatrimonial">Guardar Codigo</button>

        </div>

       <!-- </form> -->

     </div>

   </div>

</div>



<?php

  $eliminarCodArticulo = new ControladorArticulos();
  $eliminarCodArticulo -> ctrEliminarCodArticulo();

?>















<?php

$productos = ControladorProductos::ctrMostrarTotalProductos("ventas");

$colores = array("#5DADE2","#EAEDED","#E74C3C","#EAEDED","purple");

?>

<script>
	
// -------------
  // - PIE CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $('#pieDisponible').get(0).getContext('2d');
  var pieChartCanvas2 = $('#pieDisponible2').get(0).getContext('2d');
  var pieChart       = new Chart(pieChartCanvas);
  var pieChart2       = new Chart(pieChartCanvas2);
  var PieData        = [

  <?php

	for($i = 0; $i < 2; $i++){

		echo "{
			value    : ".$productos[$i]["ventas"].",
			color    : '".$colores[$i]."',
			highlight: '".$colores[$i]."',
			label    : '".$productos[$i]["titulo"]."'
		},";

	}

  ?>
    
  ];

  var PieData2        = [

	<?php

		for($i = 2; $i < 4; $i++){

			echo "{
				value    : ".$productos[$i]["ventas"].",
				color    : '".$colores[$i]."',
				highlight: '".$colores[$i]."',
				label    : '".$productos[$i]["titulo"]."'
			},";

		}

	?>
	
	];


  var pieOptions     = {
    // Boolean - Whether we should show a stroke on each segment
    segmentShowStroke    : true,
    // String - The colour of each segment stroke
    segmentStrokeColor   : '#fff',
    // Number - The width of each segment stroke
    segmentStrokeWidth   : 1,
    // Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    // Number - Amount of animation steps
    animationSteps       : 150,
    // String - Animation easing effect
    animationEasing      : 'easeOutBounce',
    // Boolean - Whether we animate the rotation of the Doughnut
    animateRotate        : true,
    // Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale         : false,
    // Boolean - whether to make the chart responsive to window resizing
    responsive           : true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio  : false,
    // String - A legend template
    legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
    // String - A tooltip template
    tooltipTemplate      : '<%=value %> <%=label%>'
  };
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  pieChart2.Doughnut(PieData2, pieOptions);
  // -----------------
  // - END PIE CHART -
  // -----------------

	
</script>
