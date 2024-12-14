<div class="account">
    <div class="account-form">
        <div class="offset md-2">
            <form method="post">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_customer" class="form-control" value="<?php echo set_value("nama_customer",$this->session->userdata("nama_customer"));?>">
                    <div class="text-danger">
                        <?php echo form_error("nama_customer") ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Email Anda</label> 
                    <input type="text" name="email_customer" class="form-control" value="<?php echo set_value("email_customer",$this->session->userdata("email_customer"));?>">
                <div class="text-danger">
                    <?php echo form_error("email_customer") ?>
                </div>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                    <p class="text-muted">Kosongkan Jika Password tidak diubah</p>
                </div>
                <div class="mb-3">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo set_value("alamat",$this->session->userdata("alamat"));?>">
                    <div class="text-danger">
                        <?php echo form_error("alamat") ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" value="<?php echo set_value("no_telepon",$this->session->userdata("no_telepon"));?>">
                    <div class="text-danger">
                        <?php echo form_error("no_telepon") ?>
                    </div>
                </div>
                <button class="btn orange text-white">Ubah Akun</button>
            </form>

        </div>
    </div>
</div>
