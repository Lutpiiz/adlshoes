<!-- main content -->
<div class="form-order">
  <p class="fs-1 text-center" style="font-weight: 500;">Form Order</p>

  <!-- Detail Layanan -->
  <div class="row">
    <div class="col-6">
      <h5 class="card-title"><?php echo $detail_layanan['nama_layanan']; ?></h5>
      <p>Estimasi: <?php echo $detail_layanan['estimasi_layanan']; ?> hari</p>
      <p>Harga: <strong>Rp. <?php echo number_format($detail_layanan['harga_layanan'], 0, ',', '.'); ?></strong></p>
      <p><?php echo $detail_layanan['deskripsi_layanan']; ?></p>
    </div>
    <div class="col-6">
      <img src="<?php echo base_url('assets/layanan/'.$detail_layanan['foto_layanan']) ?>" alt="" class="img-fluid">
    </div>
  </div>

  <!-- Form Pemesanan -->
  <form action="<?php echo base_url('service/proses_pesan'); ?>" method="post">
    <input type="hidden" name="id_layanan" value="<?php echo $detail_layanan['id_layanan']; ?>">

    <div class="mb-3">
      <label for="nama" class="form-label">Nama Pemesan</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama', $this->session->userdata('nama_customer')) ?>" required>
    </div>

    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah Pesanan</label>
      <input type="number" class="form-control" id="jumlah" name="jumlah" required>
    </div>

    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat Pengiriman</label>
      <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo set_value('alamat', $this->session->userdata('alamat')) ?></textarea>
    </div>

    <div class="mb-3">
      <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
      <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
        <option value="cashless">Cashless</option>
        <option value="cod">Cash on Delivery (COD)</option>
      </select>
    </div>

    <button type="submit" class="btn orange text-white">Kirim Pesanan</button>
  </form>
</div>
