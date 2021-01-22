<div class="content-wrapper">

  <section class="content-header">

   <h1>
      Gestor Notficaciones
    </h1>

    <!-- BARRA DE NAV-->
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Notficaciones</li>

    </ol>
    
  </section>


  <section class="content">

    <div class="box">

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaNotificaciones" width="100%">
        
          <thead>
         
            <tr>
             
               <th style="width:10px">#</th>
               <th>Tipo de Documento</th>
               <th>Numero de Documento</th>
               <th>Nombres y Apellidos</th>
               <th>Articulo</th>
               <th>Cantidad</th>
               <th>Dias</th>
               <th>Detalle</th>
               <th>Fecha</th>
               <th>visto</th>
               <th style="width:10px">Acciones</th>

            </tr> 

          </thead>   
     
        </table>
          
      </div>

    </div>

  </section>

</div>



<?php
  
  $eliminarNotificaciones = new ControladorNotificacionesM();
  $eliminarNotificaciones -> ctrEliminarNotificacion();
  
?>