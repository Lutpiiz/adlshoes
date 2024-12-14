<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADL SHOES</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/image/logo_adlshoes.png">
</head>

<body>
    <!-- main content -->
    <div class="login-card">
        <div class="row">
            <div class="col-md-4 login-img">
                <img src="./assets/image/logo_adlshoes.png" class="img-fluid" alt="logo_adlshoes.png">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="mb-3">Log in to ADL SHOES</h2>
                    <div>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email atau Nama :</label>
                                <input type="text" name="identitas" class="form-control" value="<?php echo set_value("identitas") ?>" placeholder="Enter your email or name">
                                <div class="text-danger small">
                                    <?php echo form_error("identitas") ?>
                                </div>
                            </div>
                            <div>
                                <label for="password" class="form-label">Password :</label>
                                <input type="password" name="password" class="form-control" value="<?php echo set_value("password") ?>" placeholder="Enter your password">
                                <div class="text-danger small">
                                    <?php echo form_error("password") ?>
                                </div>
                            </div>
                            <div class="login-button">
                                <button type="submit" class="btn text-white button-submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <!-- <footer class="text-center text-lg-start text-white">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="mb-4 font-weight-bold">ADL SHOES</h6>
                        <p>"Step into a brighter day with perfectly cleaned shoes. ADL Shoes – where every step starts
                            fresh and clean!"</p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="mb-4 font-weight-bold">POWERED BY</h6>
                        <p>
                            <a href="https://codeigniter.com/" target="_blank"
                                class="text-white text-decoration-none">CodeIgniter v3.1.13</a>
                        </p>
                        <p>
                            <a href="https://getbootstrap.com/" target="_blank"
                                class="text-white text-decoration-none">Bootstrap v5.3</a>
                        </p>
                        <p>
                            <a href="https://fontawesome.com/" target="_blank"
                                class="text-white text-decoration-none">Font Awesome</a>
                        </p>
                        <p>
                            <a href="https://www.vecteezy.com/free-vector/abstract" target="_blank"
                                class="text-white text-decoration-none">Vecteezy</a>
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="mb-4 font-weight-bold">CONTACT</h6>
                        <p><i class="fas fa-home mr-3"></i> Jl. Ring Road Utara, Ngringin, Condongcatur, Depok, Sleman,
                            Daerah Istimewa Yogyakarta 55281</p>
                        <p><i class="fas fa-envelope mr-3"></i> adlshoesyk@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 858 0270 5913</p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-3">
                        <h6 class="mb-4 font-weight-bold">FOLLOW US</h6>
                        <div class="row col-md-10">
                            <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                                <i class="fa-brands fa-whatsapp text-white fa-2x"></i>
                            </a>
                            <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                                <i class="fa-brands fa-instagram text-white fa-2x"></i>
                            </a>
                            <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                                <i class="fa-brands fa-facebook text-white fa-2x"></i>
                            </a>
                            <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                                <i class="fa-brands fa-tiktok text-white fa-2x"></i>
                            </a>
                            <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                                <i class="fa-brands fa-youtube text-white fa-2x"></i>
                            </a>
                            <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                                <i class="fa-brands fa-github text-white fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright: ADL SHOES
        </div>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_sukses')): ?>
        <script>
            swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
        </script>
    <?php endif ?>
    <?php if ($this->session->flashdata('pesan_gagal')): ?>
        <script>
            swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
        </script>
    <?php endif ?>
</body>

</html>