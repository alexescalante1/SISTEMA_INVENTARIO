<?php

$productos = ControladorArticulos::ctrMostrarUltimosArticulos("prestados",10);

$colores = array("#7FFF00","#32CD32","#FFD700","#00BFFF","#9932CC","#FF8C00","#A9A9A9","#9ACD32","#4169E1","#FF1493");

?>


<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<!-- box -->
<div class="box box-default">

	<!-- box-header -->
  	<div class="box-header with-border">
  
    	<h3 class="box-title">Articulos más demandados</h3>

    	<div class="box-tools pull-right">
      
      		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      		</button>

    	</div>

  	</div>
 	<!-- box-header -->

 	<!-- box-body -->
  	<div class="box-body">
    
	    <!-- row -->
	    <div class="row">
	      
	      <!-- col -->
	      <div class="col-md-8">
	        
	        <div class="chart-responsive">
	          
	          <canvas id="pieChartPRODUC" height="200"></canvas>
	        
	        </div>

	      </div>
	      <!-- col -->

	      <!-- col -->
	      <div class="col-md-4">

	        <ul class="chart-legend clearfix">

          <?php

          foreach ($productos as $i => $valor) {

              echo '<li style="font-weight: bold;text-transform: uppercase;color:'.$colores[$i].';"><i class="fa fa-circle-o" ></i>  
              <a href="'.$productos[$i]["ruta"].'" style="font-weight: bold;text-transform: uppercase;color:#909090;"> '.$productos[$i]["titulo"].'
              <span class="pull-right" style="color:'.$colores[$i].';"> '.$productos[$i]["prestados"].'</span>
              
              </a></li>';
          
          }

          ?>
	        

	        </ul>
	      
	      </div>
	      <!-- col -->

	    </div>
	    <!-- row -->

  	</div>
  	<!-- /.box-body -->

</div>
<!-- box -->

<script>
	
// -------------
  // - PIE CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $('#pieChartPRODUC').get(0).getContext('2d');
  var pieChart       = new Chart(pieChartCanvas);
  var PieData        = [

  <?php

  foreach ($productos as $i => $valor) {

    echo "{
      value    : ".$productos[$i]["prestados"].",
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
    percentageInnerCutout: 0, // This is 0 for Pie charts
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
  // -----------------
  // - END PIE CHART -
  // -----------------

	
</script>
