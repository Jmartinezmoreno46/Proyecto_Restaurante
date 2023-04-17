<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurante | Shangri la</title>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/recursos/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/recursos/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/recursos/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/recursos/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="vistas/recursos/dist/css/skins/_all-skins.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    
</head>

<body class="hold-transition skin-red sidebar-mini">

    <div class="wrapper">

     

        <!-- =========== ================================= -->
        <?php include "modulos/header.php"; ?>

        <?php include "modulos/menu.php"; ?>
        <!-- =============================================== -->

        <?php 
        
        if(isset($_GET["pagina"])){

            if(
               $_GET["pagina"]== "platos"    ||
               $_GET["pagina"]== "reservas"  ||
               $_GET["pagina"]== "mesas"){
                include "paginas/".$_GET["pagina"].".php";
            }
        }else{
            include "paginas/platos.php";
        }
        ?>


<div class="content-wrapper">






</div>
        <!-- Control Sidebar -->
      
        <?php include "modulos/footer.php"; ?>
    </div>
    <!-- ./wrapper -->
    

    <!-- jQuery 3 -->
    <script src="vistas/recursos/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/recursos/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="vistas/recursos/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/recursos/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/recursos/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="vistas/recursos/dist/js/demo.js"></script>
    <script>
    $(document).ready(function() {
        $('.sidebar-menu').tree()
    })
    </script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="vistas/plato.js"></script>
    <script src="vistas/reservas.js"></script>
    <script src="vistas/mesas.js"></script>

    
</body>

</html>

