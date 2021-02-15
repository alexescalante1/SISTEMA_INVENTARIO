<div id="particles-js"></div>

<div class="login-box" style="box-shadow: 0px 0px 15px #00FF63;">

  <div class="login-box-body" style="border-radius:3px;">
    
    <div class="login-logo">
      <img src="vistas/img/plantilla/logo.png" class="img-responsive" style="padding:10px 50px;">
    </div>

    <form  method="post">

      <div class="form-group form has-feedback">
        <input type="text" class="form-control" name="ingEmail" required>
        <label class="lbl-nombre">
          <span class="text-nomb">E-mail</span>
          <span class="glyphicon glyphicon-envelope form-control-feedback spanIcon "></span>
        </label>
      </div>

      <div class="form-group form has-feedback">
        <input type="password" class="form-control" name="ingPassword" required>
        <label class="lbl-nombre">
          <span class="text-nomb">Password</span>
          <span class="glyphicon glyphicon-lock form-control-feedback spanIcon"></span>
        </label>
      </div>

      <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>-->

      <button type="submit" class="ov-btn-slide-top">Ingresar</button>
      

      <?php

        $login = new ControladorAdministradores();
        $login -> ctrIngresoAdministrador();

      ?>

    </form>

  <!--
      <form class="form">

        <input type="text" required>
        <label class="lbl-nombre">
          <span class="text-nomb">Nombre</span>
        </label>

      </form>
-->










  </div>
  <!-- /.login-box-body -->

</div>
<!-- /.login-box -->




<script src="vistas/js/particles.min.js"></script>
<script src="vistas/js/particula.js"></script>