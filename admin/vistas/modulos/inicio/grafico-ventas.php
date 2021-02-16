<?php
/*
error_reporting(0);
$ventas = ControladorVentas::ctrMostrarVentas();
$totalVentas = ControladorVentas::ctrMostrarTotalVentas();

$arrayFechas = array();
$arrayFechaPago = array();
$totalPaypal = 0;

foreach ($ventas as $key => $value) {

	
  	if($value["metodo"] == "paypal"){

  		 $totalPaypal += $value["pago"];

  		 $porcentajePaypal = $totalPaypal * 100 / $totalVentas["total"];
  	}

  	
  	if($value["metodo"] == "payu"){

  		 $totalPayu += $value["pago"];

  		 $porcentajePayu = $totalPayu * 100 / $totalVentas["total"];
  	}

	
	if($value["metodo"] != "gratis"){

		#Capturamos sólo el año y el mes
		$fecha = substr($value["fecha"],0,7);

		#Capturamos las fechas en un array
		array_push($arrayFechas, $fecha);

		#Capturamos las fechas y los pagos en un mismo array
		$arrayFechaPago = array($fecha => $value["pago"]);

		#Sumamos los pagos que ocurrieron el mismo mes
		foreach ($arrayFechaPago as $key => $value) {
			
			$sumaPagosMes[$key] += $value;
		}

	}

}

$noRepetirFechas = array_unique($arrayFechas);
*/
?>

        

<!--=====================================
GRÁFICO DE VENTAS
======================================-->
<!-- solid sales graph -->
<div class="box box-solid bg-teal-gradient">

	<!-- box-header -->
	<div class="box-header">

		<i class="fa fa-th"></i>

	    <h3 class="box-title">Gráfico de Ventas</h3>

	    <div class="box-tools pull-right">
	      
	      <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
	      </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

	    </div>

	</div>
	<!-- box-header -->

	<!-- box-body -->
	<div class="box-body border-radius-none">

		<div class="chart" id="line-chartVENTAS" style="height: 250px;"></div>

	</div>
	<!-- box-body -->

	<!-- box-footer -->
  	<div class="box-footer no-border">

	  	<!-- row -->
	    <div class="row">
	    
	      <div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
	    
	        <input type="text" class="knob" data-readonly="true" value="100" data-width="60" data-height="60" data-fgColor="#39CCCC">

	        <div class="knob-label">Paypal</div>
	      
	      </div>

	      <div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
	        
	        <input type="text" class="knob" data-readonly="true" value="33" data-width="60" data-height="60" data-fgColor="#39CCCC">

	        <div class="knob-label">Payu</div>
	      
	      </div>

	    </div>
	    <!-- row -->

  	</div>
  	<!-- box-footer -->

</div>
<!-- solid sales graph -->

<script>
	
var line = new Morris.Line({
    element          : 'line-chartVENTAS',
    resize           : true,
    data             : [

    <?php

		/*foreach ($noRepetirFechas as $value) {
		
		echo "{ y: '".$value."', ventas: ".$sumaPagosMes[$value]." },";
			
		}

      	echo "{ y: '".$value."', ventas: ".$sumaPagosMes[$value]." },";*/

	  echo "{ y: '2017-05', ventas: 800 },{ y: '2018-04', ventas: 9500 },{ y: '2019-01', ventas: 200 },{ y: '2019-09', ventas: 5100 }";

    ?>

    ],
    xkey             : 'y',
    ykeys            : ['ventas'],
    labels           : ['Ventas'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    preUnits		 : '$',
    gridTextSize     : 10
  });
	
</script>













<?php 

/*
<!-- DIRECT CHAT -->
<div class="box box-warning direct-chat direct-chat-warning">
	<div class="box-header with-border">
	<h3 class="box-title">Direct Chat</h3>

	<div class="box-tools pull-right">
		<span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		</button>
		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
		<i class="fa fa-comments"></i></button>
		<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
		</button>
	</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
	<!-- Conversations are loaded here -->
	<div class="direct-chat-messages">
		<!-- Message. Default to the left -->
		<div class="direct-chat-msg">
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-left">Alexander Pierce</span>
			<span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
		</div>
		<!-- /.direct-chat-info -->
		<img class="direct-chat-img" src="<?php echo $_SESSION["foto"]; ?>" alt="message user image"><!-- /.direct-chat-img -->
		<div class="direct-chat-text">
			Is this template really for free? That's unbelievable!
		</div>
		<!-- /.direct-chat-text -->
		</div>
		<!-- /.direct-chat-msg -->

		<!-- Message to the right -->
		<div class="direct-chat-msg right">
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-right">Sarah Bullock</span>
			<span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
		</div>
		<!-- /.direct-chat-info -->
		<img class="direct-chat-img" src="vistas/img/perfiles/default/anonymous.png" alt="message user image"><!-- /.direct-chat-img -->
		<div class="direct-chat-text">
			You better believe it!
		</div>
		<!-- /.direct-chat-text -->
		</div>
		<!-- /.direct-chat-msg -->

		<!-- Message. Default to the left -->
		<div class="direct-chat-msg">
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-left">Alexander Pierce</span>
			<span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
		</div>
		<!-- /.direct-chat-info -->
		<img class="direct-chat-img" src="<?php echo $_SESSION["foto"]; ?>" alt="message user image"><!-- /.direct-chat-img -->
		<div class="direct-chat-text">
			Working with AdminLTE on a great new app! Wanna join?
		</div>
		<!-- /.direct-chat-text -->
		</div>
		<!-- /.direct-chat-msg -->

		<!-- Message to the right -->
		<div class="direct-chat-msg right">
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-right">Sarah Bullock</span>
			<span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
		</div>
		<!-- /.direct-chat-info -->
		<img class="direct-chat-img" src="vistas/img/perfiles/default/anonymous.png" alt="message user image"><!-- /.direct-chat-img -->
		<div class="direct-chat-text">
			I would love to.
		</div>
		<!-- /.direct-chat-text -->
		</div>
		<!-- /.direct-chat-msg -->

	</div>
	<!--/.direct-chat-messages-->

	<!-- Contacts are loaded here -->
	<div class="direct-chat-contacts">
		<ul class="contacts-list">
		<li>
			<a href="#">
			<img class="contacts-list-img" src="<?php echo $_SESSION["foto"]; ?>" alt="User Image">

			<div class="contacts-list-info">
					<span class="contacts-list-name">
					Count Dracula
					<small class="contacts-list-date pull-right">2/28/2015</small>
					</span>
				<span class="contacts-list-msg">How have you been? I was...</span>
			</div>
			<!-- /.contacts-list-info -->
			</a>
		</li>
		<!-- End Contact Item -->
		<li>
			<a href="#">
			<img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

			<div class="contacts-list-info">
					<span class="contacts-list-name">
					Sarah Doe
					<small class="contacts-list-date pull-right">2/23/2015</small>
					</span>
				<span class="contacts-list-msg">I will be waiting for...</span>
			</div>
			<!-- /.contacts-list-info -->
			</a>
		</li>
		<!-- End Contact Item -->
		<li>
			<a href="#">
			<img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

			<div class="contacts-list-info">
					<span class="contacts-list-name">
					Nadia Jolie
					<small class="contacts-list-date pull-right">2/20/2015</small>
					</span>
				<span class="contacts-list-msg">I'll call you back at...</span>
			</div>
			<!-- /.contacts-list-info -->
			</a>
		</li>
		<!-- End Contact Item -->
		<li>
			<a href="#">
			<img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

			<div class="contacts-list-info">
					<span class="contacts-list-name">
					Nora S. Vans
					<small class="contacts-list-date pull-right">2/10/2015</small>
					</span>
				<span class="contacts-list-msg">Where is your new...</span>
			</div>
			<!-- /.contacts-list-info -->
			</a>
		</li>
		<!-- End Contact Item -->
		<li>
			<a href="#">
			<img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

			<div class="contacts-list-info">
					<span class="contacts-list-name">
					John K.
					<small class="contacts-list-date pull-right">1/27/2015</small>
					</span>
				<span class="contacts-list-msg">Can I take a look at...</span>
			</div>
			<!-- /.contacts-list-info -->
			</a>
		</li>
		<!-- End Contact Item -->
		<li>
			<a href="#">
			<img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Image">

			<div class="contacts-list-info">
					<span class="contacts-list-name">
					Kenneth M.
					<small class="contacts-list-date pull-right">1/4/2015</small>
					</span>
				<span class="contacts-list-msg">Never mind I found...</span>
			</div>
			<!-- /.contacts-list-info -->
			</a>
		</li>
		<!-- End Contact Item -->
		</ul>
		<!-- /.contatcts-list -->
	</div>
	<!-- /.direct-chat-pane -->
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
	<form action="#" method="post">
		<div class="input-group">
		<input type="text" name="message" placeholder="Type Message ..." class="form-control">
			<span class="input-group-btn">
				<button type="button" class="btn btn-warning btn-flat">Send</button>
			</span>
		</div>
	</form>
	</div>
	<!-- /.box-footer-->
</div>
<!--/.direct-chat -->

*/

?>
