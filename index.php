<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ELEMEIL WATER</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/stripe.css">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <?php
    session_start();
    $accion=$_REQUEST['accion']??'';
    if($accion=='cerrar'){
        session_destroy();
        header("Refresh:0");
    }
?>
</head>

<body>
    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
<?php
include_once "Admin/db.ventas.php";
$con = mysqli_connect($host, $user, $pass, $db);

    ?>
    
    
        <div class="row">

            <div class="col-12">                
                <?php
                include_once "menu.php";
                $modulo=$_REQUEST['modulo']??'';
                if($modulo=="productos" || $modulo=="" ){
                    include_once "productos.php";
                }
                if( $modulo=="detalleproducto" ){
                    include_once "detalleProducto.php";
                }
                if( $modulo=="carrito" ){
                    include_once "carrito.php";
                }
                if( $modulo=="envio" ){
                    include_once "envio.php";
                }
                if( $modulo=="pasarela" ){
                    include_once "pasarela.php";
                }
                if( $modulo=="factura" ){
                    include_once "factura.php";
                }
                ?>
            </div>
        </div>
    
   
    <!-- jQuery UI 1.11.4 -->
    <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- daterangepicker -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="admin/dist/js/pages/dashboard.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="admin/js/stripe.js"></script>
    <script src="admin/js/ecommerce.js"></script>
    
</body>

</html>