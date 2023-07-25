<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toscana</title>

    <!-- Custom fonts for this template-->
    <link href="Vistas\vendor\fontawesome-free\css\all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Vistas\css\sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    
    <?php
		include 'Modulos/menu.php';
	?>

<div class="ms-content-wrapper">
		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
 </div> 
 

    <!-- Footer -->
<!--     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer> -->
 </div>
 </div>
 </div>
 

    <!-- Bootstrap core JavaScript-->
    <script src="Vistas\vendor\jquery\jquery.js"></script>
    <script src="Vistas\vendor\bootstrap\js\bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Vistas\vendor\jquery-easing\jquery.easing.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Vistas\js\sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="Vistas\vendor\chart.js\Chart.js"></script>

    <!-- Page level custom scripts -->
    <script src="Vistas\js\demo\chart-area-demo.js"></script>
    <script src="Vistas\js\demo\chart-pie-demo.js"></script>

        <!-- Page level custom scripts -->
        <script src="Vistas\vendor\datatables\jquery.dataTables.js"></script>
        <script src="Vistas\vendor\datatables\dataTables.bootstrap4.js"></script>
        <script src="Vistas\js\demo\datatables-demon.js"></script>
        

</body>

</html>