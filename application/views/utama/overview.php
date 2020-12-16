<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <?php $this->load->view("utama/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('utama') ?>">Data Pegawai</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link" href="<?php echo site_url('utama') ?>">
                                Data Diri Pegawai</a
                            >
                            <a class="nav-link" href="<?php echo site_url('pendidikan') ?>"
                                > Data Pendidikan</a>
                            <a class="nav-link" href="<?php echo site_url('pegawai') ?>"
                                >
                                Data Pegawai</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Diri Pegawai</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Internship UNNES Azura Labs</li>
                        </ol>
                        <div class="row">
                        <table class="table table-striped">
                            <tbody>
                                <?php
                                    foreach($login as $lg){
                                        echo "<tr>
                                            <td> $lg -> id</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>";
                                    }
                                ?>
                                <tr>
                                <th scope="row">ID</th>
                                <td colspan="2">5</td>
                                </tr>
                                <tr>
                                <th scope="row">NIP</th>
                                <td colspan="2">0011</td>
                                </tr>
                                <tr>
                                <th scope="row">NIK</th>
                                <td colspan="2">10021</td>
                                </tr>
                                <tr>
                                <th scope="row">Nama</th>
                                <td colspan="2">Ainun Cahya Safaruni</td>
                                </tr>
                                <tr>
                                <th scope="row">Tempat Lahir</th>
                                <td colspan="2">Kota Yogyakarta</td>
                                </tr>
                                <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td colspan="2">1996-02-02</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Data Pegawai</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('js/scripts.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/demo/chart-area-demo.js') ?>"></script>
        <script src="<?php echo base_url('assets/demo/chart-bar-demo.js') ?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/demo/datatables-demo.js') ?>"></script>
    </body>
</html>

</head>

</html>
