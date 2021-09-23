<!--=====================================
MENU
======================================-->	

<ul class="sidebar-menu">

	<li class="active"><a href="inicio"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
  
  <li class="header" style="color:#fff;font-weight: bold;">INVENTARIO</li>

  <?php

    if($_SESSION["perfil"] == "administrador"){

      echo '<li><a href="articulos"><i class="fa fa-product-hunt"></i> <span>Gestor Articulos</span></a></li>';

    }

  ?>

  <li><a href="prestar"><i class="fa fa-cart-plus"></i> <span>Prestar Articulos</span></a></li>

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