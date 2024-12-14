<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADL SHOES</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/image/logo_adlshoes.png') ?>">
</head>

<body>
    <!-- navbar -->
    <div class="box">
        <nav class="navbar navbar-expand-lg px-3 shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/image/adl.png') ?>" alt="" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('service') ?>">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('order') ?>">My Order</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fa-regular fa-circle-user"></i>
                                <span><?php echo $this->session->userdata('nama_customer') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('account') ?>">Akun</a></li>
                                <li><a class="dropdown-item text-danger" href="<?php echo base_url('logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>