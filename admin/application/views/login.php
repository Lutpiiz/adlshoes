<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADL Shoes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mt-5 offset-md-4 bg-white shadow p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email_admin" class="form-control" value="<?php echo set_value("email_admin") ?>">
                        <div class="text-danger small">
                            <?php echo form_error("email_admin") ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo set_value("password") ?>">
                        <div class="text-danger small">
                            <?php echo form_error("password") ?>
                        </div>
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_sukses')): ?>
    <script>swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");</script>
    <?php endif ?>
    <?php if ($this->session->flashdata('pesan_gagal')): ?>
    <script>swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");</script>
    <?php endif ?>
</body>

</html>