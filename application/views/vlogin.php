<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FIT</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin-2.css" rel="stylesheet">

</head>
<!-- da el color de fondo -->
<body class="bg-gradient-warning">

  <div class="container">

    <!-- se centro la platilla con la imagen -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- la direcion de imagen  -->
            <div class="row">
            <div class="photo-box">
             
              <img class="contenedor" 
           <div class="texto-encima"src="https://image.freepik.com/foto-gratis/entrenador-fitness-femenino-gimnasio_1303-13570.jpg" alt="Responsive image"></div>
            </div>
                    <div class="col-lg-12">
                <div class="p-7">
                  <!--centar la palbara Bienvenidos a fit   -->
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-25">Bienvenidos  </h1>
                  </div>
                  <div class="text-thumbnail">
                  <form action="<?php echo base_url();?>clogin/ingresar" method="POST" class="user">
                  <div class="form-group">
                  </div>
                  <div class="text-center">
                      <input type="text" class="form-control form-control-user" name="txtUsuario" aria-describedby="emailHelp" placeholder="Ingrese su Usuario ">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="txtClave" id="exampleInputPassword" placeholder="Ingrese su contraseña">
                    </div>
                    <input type="submit" value="Ingresar"class="btn btn-primary btn-user btn-block">
                    <br>  
                    <?php echo $mensaje; ?>
                  </form>
                  <hr> 
                  <br>
    <div class="row justify-content-center">

                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Olvidó su contraseña?</a> </div>
                  </div>
                  <div class="text-center">
                    <a class="small" href="">Registrarse</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="w3-flat-turquoise">
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>