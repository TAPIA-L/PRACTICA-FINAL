<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    

    <!-- Bootstrap -->
    <link href="<?=base_url("assets")?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url("assets")?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url("assets")?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url("assets")?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url("assets")?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url("assets")?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url("assets")?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url("assets")?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <div class="clearfix"></div>

           
           

            

           
          </div>
        </div>

        <!-- top navigation -->
        


      
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?=base_url("principal/verificarUsuario");?>">
              <h1><i class="fa fa-bank"></i> TIENDA INFO</h1>
              <div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre" required="" />
              </div>
              <div>
                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
              <input  class="btn btn-success" type="submit"  value="INGRESAR">
              
                
                <a class="reset_pass" href="#">Olvidaste tu Contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Es nuevo en el sitio?
                  <a href="#signup" class="to_register"> Crear Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="glyphicon glyphicon-user"></i> Sistema de Tienda</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>




















        <!-- footer content -->
     
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url("assets")?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url("assets")?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url("assets")?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url("assets")?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url("assets")?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=base_url("assets")?>/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url("assets")?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url("assets")?>/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=base_url("assets")?>/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=base_url("assets")?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url("assets")?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url("assets")?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url("assets")?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url("assets")?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url("assets")?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url("assets")?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url("assets")?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url("assets")?>/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url("assets")?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=base_url("assets")?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url("assets")?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url("assets")?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url("assets")?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url("assets")?>/build/js/custom.min.js"></script>
	
  </body>
</html>

      