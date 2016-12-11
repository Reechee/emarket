<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Markqet</title>
    

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
              <h1>Restablecer password</h1>
              <div>
                {!!Form::open(['route'=>'olvido.store','method'=>'POST'])!!}
                    <div class="form-group">
                      {!!Form::text('user',null,['class'=>'form-control','placeholder'=>'Usuario'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('mail',null,['class'=>'form-control','placeholder'=>'Correo'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('pass',null,['class'=>'form-control','placeholder'=>'Nuevo password'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('passve',null,['class'=>'form-control','placeholder'=>'Repita el nuevo password'])!!}
                    </div>
                    {!!Form::submit('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actualizar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',['class'=>'btn btn-primary'])!!}

                  {!!Form::close()!!}
              </div>
              <div >

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  

                <!--CREAR CUENTA
                <p class="change_link">Nuevo aqui?
                  <a href="" class="to_register"> Crea una cuenta </a>
                </p>
                -->

                <div class="clearfix"></div>
                <br />
                
                <div>
                  <h1><i class="fa fa-paw"></i> Markqet</h1>
                  <!--<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>-->
                </div>
              </div>
            
          </section>
        </div>
      </div>



    </div>
  </body>
</html>
