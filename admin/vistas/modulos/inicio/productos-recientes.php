 <?php

$productos = ControladorArticulos::ctrMostrarUltimosArticulos("fecha",5);

 ?>

<!--=====================================
PRODUCTOS RECIENTES
======================================-->

<!-- PRODUCT LIST -->
<div class="box box-primary">

	<!-- box-header -->
  	<div class="box-header with-border">
    
    	<h3 class="box-title">Articulos agregados recientemente</h3>

    	<div class="box-tools pull-right">
      
      	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      	</button>
    
    	</div>

  </div>
   <!-- box-header -->

   	<!-- box-body -->
  	<div class="box-body">

	    <!-- products-list -->
	    <ul class="products-list product-list-in-box">

	    <?php

			foreach ($productos as $clave => $valor) {

	    		echo '<li class="item" >
				        <div class="product-img">
							<a href="'.$productos[$clave]["ruta"].'">
							<img src="'.$productos[$clave]["portada"].'" alt="Product Image" style="height:80px;width:80px;border-radius: 5px;filter: drop-shadow(1px 1px 5px rgb(151, 151, 151));">
							</a> 
				        </div>
				        <div class="product-info" style="margin-top:30px;margin-left:100px;">
				          <a href="'.$productos[$clave]["ruta"].'" class="product-title" style="font-weight: bold;text-transform: uppercase;color:#909090;">'.$productos[$clave]["titulo"].'<span class="label label-success pull-right" style="font-size:16px">'.$productos[$clave]["fecha"].'</span></a>
						</div>
				      </li>';

	    	}

	    ?> 

	    </ul>
	    <!-- products-list -->

  	</div>
  	<!-- box-body -->

  	<!-- box-footer -->
  	<div class="box-footer text-center">
    
    	<a href="prestar" class="uppercase">Ver todos los articulos</a>
  
  	</div>
  	<!-- box-footer -->

</div>
<!-- PRODUCT LIST -->