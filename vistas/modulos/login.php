<div id="back"></div>

<div class="login-box">
  
  <div class="login-logo">

    <a href="plantilla2.php">
      <img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive" style="padding:30px 100px 0px 100px">
    </a>


  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback" style="background: linear-gradient(rgb(45, 109, 248), rgb(40, 61, 250)); color: white;"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback" style="background: linear-gradient(rgb(45, 109, 248), rgb(40, 61, 250)); color: white;"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-5">

          <button type="submit" class="btn btn-primary btn-block btn-flat"style="background: linear-gradient(rgb(45, 109, 248), rgb(40, 61, 250));">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</div>
