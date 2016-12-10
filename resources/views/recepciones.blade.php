<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentellela</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <?php echo view('menu'); ?>
         
          </div>
        </div>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    <h2>Recepcion de productos</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Ingrese los siguientes datos de solicitud.
                    </p>
                    {!!Form::open(['route'=>'recepciones.store','method'=>'POST'])!!}

                    <div class="form-group">
                      {!!Form::label('Numero de solicitud:')!!}
                      {!!Form::text('numero',null,['class'=>'form-control','placeholder'=>'Ingrese el numero de la solicitud'])!!}
                    </div>

                    <div class="form-group">
                      {!!Form::label('Cantidad real (productos en buen estado):')!!}
                      {!!Form::text('cantidad',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad'])!!}
                    </div>

                    <div class="form-group">
                      {!!Form::label('Comentarios:')!!}
                      {!!Form::text('comentario',null,['class'=>'form-control','placeholder'=>'Ingrese comentarios'])!!}
                    </div>

                    {!!Form::submit('Confirmar Recepcion',['class'=>'btn btn-primary'])!!}
                  {!!Form::close()!!}
                  
                  </div>
                </div>
              </div>



              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de ordenes de compra</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      La siguiente tabla muestra las ordenes de compra aceptadas que estan listas para ser recepcionadas.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Numero Solicitud</th>
                          <th>Producto</th>
                          <th>Cantidad</th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>


                      <tbody>

                       @for($i=0; $i < count($listaid) ; $i++)

                       <tr>
                          <td>{{$listaid[$i]}}</td>
                          <td>{{$listanombre[$i]}}</td>
                          <td>{{$listacantidad[$i]}}</td>

                          <td></td>                          
                          <td></td>
                          <td></td>

                       </tr>
                       @endfor

                        
                      </tbody>
                    </table>
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
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="assets/jszip/dist/jszip.min.js"></script>
    <script src="assets/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>