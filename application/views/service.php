<!-- main content -->
<div class="container">
  <p class="fs-1 text-center" style="font-weight: 500;">Our Service</p>
  <p class="fs-6 text-center">ADL Shoes menghadirkan layanan cuci sepatu premium dengan teknologi modern dan bahan pembersih ramah lingkungan yang aman untuk semua jenis sepatu. Kami menawarkan kebersihan maksimal tanpa merusak material, menjadikan sepatu Anda tampak seperti baru kembali. Dengan tenaga ahli berpengalaman, layanan cepat, dan perhatian pada detail, ADL Shoes memberikan pengalaman terbaik bagi pelanggan yang menginginkan sepatu bersih, wangi, dan nyaman dipakai setiap hari. Kepercayaan Anda adalah prioritas kami, dan kepuasan Anda adalah tujuan kami!</p>
  <div class="row">
    <?php foreach ($layanan as $key => $value) :  ?>
      <div class="col-xl-3 col-lg-4 col-md-6 py-3">
        <div class="card">
          <img src="<?php echo base_url('assets/layanan/'.$value['foto_layanan']) ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $value['nama_layanan'] ?></h5>
            <p class="">Estimasi : <?php echo $value['estimasi_layanan'] ?> hari</p>
            <p class="card-text"><?php echo $value['deskripsi_layanan'] ?></p>
            <p class="fs-5 text-center"><strong>Rp. <?php echo number_format($value['harga_layanan'], 0, ',', '.') ?></strong></p>
            <div class="d-flex justify-content-center"><a href="<?php echo base_url('service/pesan/'.$value['id_layanan']) ?>" class="btn orange text-white">Pesan Sekarang!</a></div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>