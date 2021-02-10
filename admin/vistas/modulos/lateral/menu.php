<!--=====================================
MENU
======================================-->	

<ul class="sidebar-menu">

	<li class="active"><a href="inicio"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

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
  <li><a href="prestar"><i class="fa fa-product-hunt"></i> <span>Prestar Articulos</span></a></li>


  <?php

  if($_SESSION["perfil"] == "administrador"){

    echo '<li><a href="articulos"><i class="fa fa-product-hunt"></i> <span>Gestor Articulos</span></a></li>';

  }

  ?>

  <li><a href="prestamos"><i class="fa fa-product-hunt"></i> <span>Gestor De Actividades</span></a></li>

  <li><a href="notificacionesM"><i class="fa fa-product-hunt"></i> <span>Gestor De Notificaciones</span></a></li>
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
  

  <?php

   if($_SESSION["perfil"] == "administrador"){

    echo '<li><a href="usuarios"><i class="fa fa-users"></i> <span>Gestor Usuarios</span></a></li>
          <li><a href="perfiles"><i class="fa fa-key"></i> <span>Gestor Perfiles</span></a></li>';

  }

  ?>




<li class="header">MAIN NAVIGATION</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-table"></i> <span>Tables</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
  </ul>
</li>
<li>
  <a href="#">
    <i class="fa fa-calendar"></i> <span>Calendar</span>
    <span class="pull-right-container">
      <small class="label pull-right bg-red">3</small>
      <small class="label pull-right bg-blue">17</small>
    </span>
  </a>
</li>        



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