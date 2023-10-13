<?php
ob_start();
require 'backand/core.php';
$template = 'frontend/template/dashboard';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= $template ?>/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .nav-link.active,
        .nav-link.active .sb-nav-link-icon,
        .nav-link:hover,
        .nav-link:hover .sb-nav-link-icon {
            color: var(--bs-success) !important;
        }

        button,
        input,
        select,
        textarea,
        a {
            box-shadow: none !important;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="?page=index"><?= $app_name ?></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" onclick="logout()">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Utama</div>
                        <a class="nav-link <?= active_menu(['index']) ?>" href="?page=index">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link <?= active_menu(['mahasiswa/index', 'mahasiswa/create', 'mahasiswa/edit']) ?>" href="?page=mahasiswa/index">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Mahasiswa
                        </a>
                        <a class="nav-link <?= active_menu(['kegiatan/index', 'kegiatan/create', 'kegiatan/edit']) ?>" href="?page=kegiatan/index">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Kegiatan
                        </a>
                        <a class="nav-link <?= active_menu(['desa/index', 'desa/create', 'desa/edit']) ?>" href="?page=desa/index">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Desa
                        </a>
                        <a class="nav-link <?= active_menu(['kelompok/index', 'kelompok/create', 'kelompok/edit']) ?>" href="?page=kelompok/index">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Kelompok
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Masuk Sebagai:</div>
                    Mitsuki
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?php
                    try {
                        if (!isset($_GET['page'])) {
                            return redirect('?page=index');
                        } elseif (!empty($_GET['page'])) {
                            $page = shield($_GET['page']);
                            include 'frontend/dashboard/' . $page . '.php';
                        } else {
                            return redirect('404.php');
                        }
                    } catch (\Throwable $th) {
                        return redirect('505.php');
                    }
                    ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; <?= $app_name ?> 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= $template ?>/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= $template ?>/assets/demo/chart-area-demo.js"></script>
    <script src="<?= $template ?>/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?= $template ?>/js/datatables-simple-demo.js"></script>
    <script>
        function hapusData(endpoint) {
            if (confirm('Yakin menghapus data ini ?')) {
                window.location.href = endpoint
            }
        }

        function logout() {
            if (confirm('Yakin ingin keluar ?')) {
                window.location.href = '?page=index&logout=true'
            }
        }
    </script>
</body>

</html>


<?php
ob_end_flush();
