
<div class="content-wrapper">
    
  <section class="content-header">
      
    <h2 class="modal-title">
      GESTOR DE USUARIOS
    </h2>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">GESTOR DE USUARIOS</li>
      
    </ol>

  </section>

  <section class="content">

    <div class="box">  

      <div class="box-header with-border">

        <button class="ov-btn-slide-topBut" data-toggle="modal" data-target="#modalAgregarUserDocente">
      
          AGREGAR NUEVO USUARIO

        </button>
        <a href="vistas/modulos/reportes.php?reporte=usuarios">

          <button class="btn btn-success">X<i class="glyphicon glyphicon glyphicon-th-list"></i></button>

        </a>

      </div>

      <div class="box-body">


         
        <table class="table table-bordered table-striped dt-responsive tablaUsuarios" width="100%">

          <thead>
            
            <tr>
              
              <th style="width:10px">#</th>
              <th>Tipo Doc</th>
              <th>Codigo</th>
              <th>Usuario</th>
              <th>Nombres y Apellidos</th>
              <th>E-mail</th>
              <th>Estado</th>
              <th>Fecha</th>

            </tr>

          </thead>

        </table> 

      </div>
        
    </div>

  </section>

</div>















<!--=====================================
MODAL AGREGAR PERFIL
======================================-->

<div id="modalAgregarUserDocente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" onsubmit="return registroUsuario()">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">AGREGAR USUARIO</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <div class="form-group">
                
                  <div class="form-group">

                    <div class="input-group">

                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                      <input  type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8"  class="form-control input-lg" id="regCodigo" name="regCodigo" placeholder="DNI" required>
                      
                    </div>

                  </div>


                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                      <input type="text" class="form-control text-uppercase input-lg" id="regUsuario" name="regUsuario" placeholder="Nombres y Apellidos" required>

                    </div>

                  </div>


                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                      <input type="text" class="form-control input-lg" id="regUser" name="regUser" placeholder="USUARIO" required>

                    </div>

                  </div>


                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                      <input type="password" class="form-control input-lg" id="regPassword" name="regPassword" placeholder="CONTRASEÑA" required>

                    </div>

                  </div>

                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                      <input type="email" class="form-control input-lg" id="regEmail" name="regEmail" placeholder="CORREO ELECTRONICO" required>

                    </div>

                  </div>

            </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <button type="submit" class="btn btn-primary" style="width:100%;">Guardar Usuario Docente</button>


        <?php

            $registro = new ControladorUsuarios();
            $registro -> ctrCrearPerfilDocente();

        ?>

      </form>

    </div>

  </div>

</div>