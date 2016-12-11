<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Markqet | solicitar </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="assets/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <?php echo view('menu1'); ?>

          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <div class="bs-docs-section">
                      <h1 id="glyphicons" class="page-header">Categorias</h1>

                      <h2 id="glyphicons-glyphs">Categorias disponibles</h2>
                      <p>Elija una de las categorias para ver los productos a detalle.</p>
                      <div class="bs-glyphicons">
                        <ul class="bs-glyphicons-list">

                          @for($i = 0;$i< count($categorias);$i++)
                          <li>
                          <button type="button" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>
                            <span class="glyphicon-class">

                                <a href="{{route('index', ['nombre' => $categorias[$i]])}}">
                                  {{$categorias[$i]}}
                                </a>


                            </span>
                          </button>
                          </li>
                          @endfor

                

                        </ul>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets//fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/custom.min.js"></script>
  </body>
</html>