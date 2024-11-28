<?php 
include "koneksi.php";
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Kasir SembakoMart</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/png" sizes="96x96" href="smlogo2.png">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
        .nav-link:hover {
            background-color: #a8cdf5;
            border-radius: 50px;
        }
        </style>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">
        <img src="smlogo2.png" alt="Logo SembakoMart" style="width: 50px; height: 50px; margin-right: 10px;">
        Aplikasi Kasir SembakoMart
    </a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="margin-left: 100px; margin-top: 5px;"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw" style="margin-left: 1120px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu bg-primary">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" style="color: whitesmoke;">Navigasi</div>
                            <a class="nav-link" href="index.php" style="color: whitesmoke;">
                                <div class="sb-nav-link-icon" style="color: whitesmoke;"><i class="fas fa-tachometer-alt" style="color: whitesmoke;"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="?page=pelanggan"style="color: whitesmoke;">
                                <div class="sb-nav-link-icon"><i class="fas fa-users" style="color: whitesmoke;"></i></div>
                                Pelanggan
                            </a>
                            <a class="nav-link" style="margin-left: 4px; color: whitesmoke;" href="?page=produk">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag" style="color: whitesmoke;"></i></div>
                                Produk/Barang
                            </a>
                            <a class="nav-link" href="?page=pembelian" style="color: whitesmoke;">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart" style="color: whitesmoke;"></i></div>
                                Pembelian
                            </a>
                            <a class="nav-link" href="logout.php" style="color: whitesmoke;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket" style="color: whitesmoke;"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['user']['nama']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                 
                <?php 
                    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                    include $page . '.php';
                ?>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-primary">Copyright &copy; Aplikasi Kasir SembakoMart Feroz Akram 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
