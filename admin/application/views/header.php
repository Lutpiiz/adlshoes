<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin ADL Shoes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
        <div class="container">
            <a href="" class="navbar-brand">Admin</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="naff">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url("home") ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url("administrasi") ?>" class="nav-link">Administrasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("transaksi") ?>" class="nav-link">Transaksi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("layanan") ?>" class="nav-link">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url("laporan") ?>" class="nav-link">Laporan</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url("akun") ?>" class="nav-link">
                            Admin <?php echo $this->session->userdata("nama_admin") ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url("logout") ?>" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>