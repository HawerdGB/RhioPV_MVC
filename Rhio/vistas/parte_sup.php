<?php 
if(!isset($_SESSION["validarIngreso"])){
echo '<script>window.location ="../index.php";</script>'; 
return;
     
}else{
     if($_SESSION["validarIngreso"] != "ok"){
    echo '<script>window.location ="../index.php";</script>';

         return;
 
     }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Administrativo Para Empresas RHIO">
    <meta name="author" content="Hawerd Gutierrez">

    <title>Rhio.net PV v1.0</title>

    <!-- Custom fonts for this template-->
    <link href="HTML/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<!-- boostrap para las tablas-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"  rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"  rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="HTML/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">-->
            <!-- <div class="sidebar-brand-icon rotate-n-15">-->
            <!-- <i class="fas fa-laugh-wink"></i>-->
            <!-- </div>-->
            <!--   <div class="sidebar-brand-text mx-3">RhioPV<sup> v2.0</sup></div>-->
            <!-- <div class="sidebar-brand-text mx-3">RhioPV<sup>v2.0</sup></div>-->
            <!--  </a>-->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0">-->

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php?pagina=Inicio">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!--<div class="sidebar-heading">
        Agenda
      </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-address-book"></i>
                    <span>Contactos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!--  <h6 class="collapse-header">Menu Agenda:</h6>-->
                        <a class="collapse-item" href="index.php?pagina=Clientes">Clientes</a>
                        <a class="collapse-item" href="index.php?pagina=Proveedores">Proveedores</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Stock
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <!-- <i class="fas fa-fw fa-folder"></i>-->
                    <i class="fas fa-dolly "></i>
                    <span>Control Stock</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Productos:</h6>
                        <a class="collapse-item" href="index.php?pagina=Productos">Productos</a>
                        <a class="collapse-item" href="index.php?pagina=Clasificaciones">Clasificaciones</a>
                        <a class="collapse-item" href="index.php?pagina=Marcas">Marcas</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Control Almacenes:</h6>
                        <a class="collapse-item" href="index.php?pagina=Almacenes">Almacenes</a>
                        <a class="collapse-item" href="index.php?pagina=EntStock">Entrada Stock</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Contabilidad
            </div>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=Bancos">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Bancos</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=CatalogoCuentas">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Catalogo de cuentas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=Graficos">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Graficos</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=Informes">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Informes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Configuracion</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="index.php?pagina=ConfGeneral">Configuracion General</a>
                        <a class="collapse-item" href="index.php?pagina=Parametros">Parametros Sistema</a>
                        <a class="collapse-item" href="index.php?pagina=Usuarios">Usuarios</a>
                    </div>
                </div>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <a class="navbar-brand" href="#"><h2>Rhionet S.R.L.</h2></a>
                           <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">-->
                          <!--  <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>-->
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) 
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                             Dropdown - Messages
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->


<!-- Informacion de la empresa -->

<!-- fin informacion de la empresa -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['nombre'];echo '<br>';echo $_SESSION['nivel']?> </span>
                                <img class="img-profile rounded-circle" src= <?php echo $_SESSION['imagen']?>>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion Cuenta
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividad Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Comienzo del contenido de la pagina principal -->

                <?php 
             
             if(isset($_GET["pagina"]))
               {
                if($_GET["pagina"] == "Clientes" ||
                $_GET["pagina"] == "Proveedores" ||
                $_GET["pagina"] == "Productos" ||
                $_GET["pagina"] == "EntStock" ||
                $_GET["pagina"] == "Graficos" ||
                $_GET["pagina"] == "Informes" ||
                $_GET["pagina"] == "Bancos" ||
                $_GET["pagina"] == "Cotizaciones" ||
                $_GET["pagina"] == "Parametros" ||
                $_GET["pagina"] == "PagoRecibo" ||
                $_GET["pagina"] == "Marcas" ||
                $_GET["pagina"] == "Conduces" ||
                $_GET["pagina"] == "Almacenes" ||
                $_GET["pagina"] == "Facturacion" ||
                $_GET["pagina"] == "CatalogoCuentas" ||
                $_GET["pagina"] == "Clasificaciones" ||
                $_GET["pagina"] == "ConfGeneral" ||
                $_GET["pagina"] == "Usuarios" ||
                $_GET["pagina"] == "Salir" ||
                $_GET["pagina"] == "IClientes" ||
                $_GET["pagina"] == "IProductos" ||
                $_GET["pagina"] == "IProveedor" ||
                $_GET["pagina"] == "Inicio" )
                {
                include 'Paginas/'.$_GET['pagina'].'.php';
                }else{
                    include 'Paginas/error404.php';
                }
                }
                
              
