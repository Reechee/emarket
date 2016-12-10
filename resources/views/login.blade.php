<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>
    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" >
    <!-- NProgress -->
    <link rel="stylesheet" href="assets/nprogress/nprogress.css" >
    <!-- Animate.css -->
    <link rel="stylesheet" href="assets/animate.css/animate.min.css" >

    <!-- Custom Theme Style -->
    <link href="assets/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contrase&ntilde;a" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Conectarse</a>
                <a class="reset_pass" href="#">Olvid&oacute; contrase&ntilde;a?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  
                <p class="change_link">Nuevo aqui?
                  <a href="#signup" class="to_register"> Crea una cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />
                
                <div>
                  <h1><i class="fa fa-paw"></i> Markqet</h1>
                  <!--<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>-->
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Crear cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Correo" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contrase&ntilde;a" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Crear</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya es usuario ?
                  <a href="#signin" class="to_register"> Conectarse</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Markqet</h1>
                  <!--<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>-->
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
