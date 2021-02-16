<!--=====================================
MENU
======================================-->	

<ul class="sidebar-menu">

	<li class="active"><a href="inicio"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

  
  <li class="header" style="color:#fff;font-weight: bold;">INVENTARIO</li>

  <?php


/*
  if($_SESSION["perfil"] == "administrador"){

	echo '<li><a href="comercio"><i class="fa fa-files-o"></i> <span>Gestor Comercio</span></a></li>';

  }
*/
  ?>

	<!--<li><a href="slide"><i class="fa fa-edit"></i> <span>Gestor Slide</span></a></li>

	<li class="treeview">
      
      <a href="#">
        <i class="fa fa-th"></i>
        <span>Gestor Categorías</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>

      <ul class="treeview-menu">
        
        <li><a href="categorias"><i class="fa fa-circle-o"></i> Categorías</a></li>
        <li><a href="subcategorias"><i class="fa fa-circle-o"></i> Subcategorías</a></li>
      
      </ul>

  </li>
-->
  <li><a href="prestar"><i class="fa fa-cart-plus"></i> <span>Prestar Articulos</span></a></li>

  <?php

  if($_SESSION["perfil"] == "administrador"){

    echo '<li><a href="articulos"><i class="fa fa-product-hunt"></i> <span>Gestor Articulos</span></a></li>';

  }

  ?>

  <!--<li><a href="prestamos"><i class="fa fa-tachometer"></i> <span>Gestor De Prestamos</span></a></li>-->
  <li class="treeview">
    <a href="###">
      <i class="fa fa-tachometer"></i> <span>Gestor De Prestamos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="prestamos"><i class="fa fa-circle-o"></i> Devoluciones</a></li>
      <li><a href="registrodeprestamos"><i class="fa fa-circle-o"></i> Registros</a></li>
    </ul>
  </li>

  
  <li><a href="notificacionesM"><i class="fa fa-bell"></i> <span>Gestor De Notificaciones</span>
    <span class="pull-right-container">
    <?php
    
      $nuevasNotificaciones = ControladorNotificacionesM::ctrContarNotificaciones("notificacion","visto", 0);

      if($nuevasNotificaciones[0]!=0){
        echo '<small class="label pull-right bg-yellow">'.$nuevasNotificaciones[0].'</small>';
      }

    ?>
    </span></a>
  </li>
  
      
    
  <!--
    <li><a href="productos"><i class="fa fa-product-hunt"></i> <span>Gestor Productos</span></a></li>
  -->
<!--
  <li><a href="banner"><i class="fa fa-map-o"></i> <span>Gestor Banner</span></a></li>
-->

  <?php

  if($_SESSION["perfil"] == "administrador"){

    

    /*echo '<li><a href="ventas"><i class="fa fa-shopping-cart"></i> <span>Gestor Ventas</span></a></li>';
*/
  }

  ?>

  <!--
    <li><a href="visitas"><i class="fa fa-map-marker"></i> <span>Gestor Visitas</span></a></li>
  -->
  
  <li class="header" style="color:#fff;font-weight: bold;">MANUALES</li>


  <li>
    <a href="##">
      <i class="fa fa-book"></i> <span>Manuales del Sistema</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">55</small>
      </span>
    </a>
  </li> 


  <li class="header" style="color:#fff;font-weight: bold;">COBRANZA</li>


  <li>
    <a href="#">
      <i class="fa fa-bank"></i> <span>Gestion de Caja</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">55</small>
      </span>
    </a>
  </li> 




  <li class="header" style="color:#fff;font-weight: bold;">ACTIVIDADES DEL SISTEMA</li>

  <li class="treeview">
  <a href="#">
    <i class="fa fa-shield"></i> <span>Gestor de Actividades</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Articulos Argregados</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Articulos Modificados</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Articulos En Baja</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Articulos En Mantenimiento</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Articulos Eliminados</a></li>
  </ul>
</li>


  




<li class="header" style="color:#fff;font-weight: bold;">ANALISIS DE DATOS</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-line-chart"></i> <span>Inversión</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Anual</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Mensual</a></li>
  </ul>
</li>

<li>
  <a href="#">
    <i class="fa fa-pie-chart"></i> <span>Demanda</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-red">3</small>
      <small class="label pull-right bg-blue">17</small>
    </span>
  </a>
</li>    

<li>
  <a href="#">
    <i class="fa fa-reddit"></i> <span>Predicciones</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-green">55</small>
    </span>
  </a>
</li>    



<li class="header" style="color:#fff;font-weight: bold;">SOPORTE TECNICO</li>


<li>
  <a href="#">
    <i class="fa fa-skyatlas"></i> <span>Sugerencias</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-yellow">55</small>
    </span>
  </a>
</li> 


<li class="header" style="color:#fff;font-weight: bold;">GESTIÓN DE CUENTAS</li>

  <?php

   if($_SESSION["perfil"] == "administrador"){

    echo '<li><a href="usuarios"><i class="fa fa-users"></i> <span>Gestor Usuarios</span></a></li>
          <li><a href="perfiles"><i class="fa fa-key"></i> <span>Gestor Perfiles</span></a></li>';

  }

  ?>









</ul>	


<!-- Sidebar user panel --
<div class="user-panel">
  <div class="pull-left image">
    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  </div>
  <div class="pull-left info">
    <p>Alexander Pierce</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>


<form action="#" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
  </div>
</form>
<!-- /.search form -->