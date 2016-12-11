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
              <h1>Crear usuario</h1>
              <div>
                {!!Form::open(['route'=>'nuevousuario.store','method'=>'POST'])!!}
                    <div class="form-group">
                      {!!Form::text('user',null,['class'=>'form-control','placeholder'=>'Nombre de usuario'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Completo'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('mail',null,['class'=>'form-control','placeholder'=>'Correo'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('type',null,['class'=>'form-control','placeholder'=>'Ingrese 0 para gerente o 1 para trabajador'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('pass',null,['class'=>'form-control','placeholder'=>'Nuevo password'])!!}
                    </div>
                    <div class="form-group">
                      {!!Form::text('passve',null,['class'=>'form-control','placeholder'=>'Repita el nuevo password'])!!}
                    </div>
                    {!!Form::submit('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crear Cuenta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',['class'=>'btn btn-primary'])!!}

                  {!!Form::close()!!}
              </div>
              <div >

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  

                
                <p class="change_link">Ya es usuario?
                  <a href="login" class="to_register"> Ingrese </a>
                </p>
                

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
