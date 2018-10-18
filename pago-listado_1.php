<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listado de pagos</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="util/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="util/lte/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="util/lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- DATA TABLES -->
    <link href="util/lte/plugins/datatables/dataTables.bootstrap.css" type="text/css" rel="stylesheet"/>
    
    <!-- Extilos extras-->
    <link href="util/lte/css/extras.css" rel="stylesheet" type="text/css" />
    
    <!-- Ionicons -->
    <link href="util/lte/css/ionicons.css" rel="stylesheet" type="text/css" />
    
    <!-- Theme style -->
    <link href="util/lte/skins/_all-skins.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <?php
        include 'cabecera.php';
      ?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php
            include 'menu.php';
        ?>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

    <!-- INICIO: Contenido de la página -->
        <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Año', 'Mineral', '% Obtenido', 'Proyeccion a obtener'],
          ['2013', 1000, 400, 200],
          ['2014', 1170, 460, 250],
          ['2015', 760, 520, 300],
          ['2016', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Reporte proyección de mineral',
            subtitle: 'Año: 2013-2016',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 1000px; height: 500px;"></div>
  </body>
</html>

      </div><!-- /.content-wrapper -->
    <!-- FIN: Contenido de la página -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">INFOMINE</a>.</strong> Todos los derechos reservados.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="util/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="util/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    
    <!-- DATA TABLE -->
    <script src="util/lte/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="util/lte/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <!-- SlimScroll -->
    <script src="util/lte/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='util/lte/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="util/lte/js/app.js" type="text/javascript"></script>
    <!-- Temas -->
    <!--<script src="../util/lte/js/demo.js" type="text/javascript"></script>-->
    
    <!--<script src="js/pago-listar.js"></script>-->
    
  </body>
</html>