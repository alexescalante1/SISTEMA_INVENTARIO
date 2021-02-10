<?php

$ventas = ControladorVentas::ctrMostrarTotalVentas();

$visitas = ControladorVisitas::ctrMostrarTotalVisitas();

$usuarios = ControladorUsuarios::ctrMostrarTotalUsuarios("id");
$totalUsuarios = count($usuarios);

$productos = ControladorProductos::ctrMostrarTotalProductos("id");
$totalProductos = count($productos);

?>

<!--=====================================
CAJAS SUPERIORES
======================================-->










<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Messages</span>
      <span class="info-box-number">1,410</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Bookmarks</span>
      <span class="info-box-number">410</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Uploads</span>
      <span class="info-box-number">13,648</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Likes</span>
      <span class="info-box-number">93,139</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->



































<!-- col -->
<div class="col-lg-3 col-xs-6">

  <!-- small box -->
  <div class="small-box bg-aqua">
    
    <!-- inner -->
    <div class="inner">
      
      <h3>$<?php echo number_format($ventas["total"]); ?></h3>

      <p>Ventas</p>
    
    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">
    
      <i class="ion ion-bag"></i>
    
    </div>
    <!-- icon -->
    
    <a href="ventas" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small-box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-green">

    <!-- inner -->
    <div class="inner">
      
      <h3><?php echo number_format($visitas["total"]); ?></h3>

      <p>Visitas</p>
    
    </div>
    <!-- inner -->
    
    <!-- icon -->
    <div class="icon">
      
      <i class="ion ion-stats-bars"></i>
    
    </div>
    <!-- icon -->

    <a href="visitas" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-yellow">
    
    <!-- inner -->
    <div class="inner">
    
      <h3><?php echo number_format($totalUsuarios); ?></h3>

      <p>Usuarios</p>
    
    </div>
    <!-- inner -->

    <!-- icon -->
    <div class="icon">
      
      <i class="ion ion-person-add"></i>
    
    </div>
    <!-- icon -->

    <a href="usuarios" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small box -->

</div>
<!-- col -->

<!--===========================================================================-->

<!-- col -->
<div class="col-lg-3 col-xs-6">
  
  <!-- small box -->
  <div class="small-box bg-red">
  
    <!-- inner -->
    <div class="inner">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p>

    </div>
    <!-- inner -->
    
    <!-- icon -->
    <div class="icon">
      
      <i class="ion ion-pie-graph"></i>
    
    </div>
    <!-- icon -->
    
    <a href="productos" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
  
  </div>
  <!-- small box -->

</div>
<!-- col -->
