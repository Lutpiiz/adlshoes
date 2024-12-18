<!-- main content -->
<div class="container" data-aos="zoom-in-up">
  <h1 class="text-center">Our Service</h1>
  <p class="fs-6 text-center">ADL Shoes menghadirkan layanan cuci sepatu premium dengan teknologi modern dan bahan pembersih ramah lingkungan yang aman untuk semua jenis sepatu. Kami menawarkan kebersihan maksimal tanpa merusak material, menjadikan sepatu Anda tampak seperti baru kembali. Dengan tenaga ahli berpengalaman, layanan cepat, dan perhatian pada detail, ADL Shoes memberikan pengalaman terbaik bagi pelanggan yang menginginkan sepatu bersih, wangi, dan nyaman dipakai setiap hari. Kepercayaan Anda adalah prioritas kami, dan kepuasan Anda adalah tujuan kami!</p>

  <div class="row equal-height">
    <?php foreach ($layanan as $key => $value) :  ?>
      <div class="col-xl-3 col-lg-4 col-md-6 py-3" data-aos="zoom-in-up" data-aos-delay="<?php echo ($key % 4) * 100; ?>">
        <div class="card h-100 shadow-lg">

          <img src="<?php echo base_url('assets/layanan/' . $value['foto_layanan']) ?>" class="card-img-top fit-image" alt="...">
          <div class="card-body d-flex flex-column">

            <h5 class="card-title"><?php echo $value['nama_layanan'] ?></h5>
            <p>Estimasi : <?php echo $value['estimasi_layanan'] ?> hari</p>
            <p class="card-text"><?php echo $value['deskripsi_layanan'] ?></p>
            <h4 class="mt-auto text-center fw-semibold">Rp. <?php echo number_format($value['harga_layanan'], 0, ',', '.') ?></h4>

            <div class="d-flex justify-content-center">
              <a href="<?php echo base_url('service/pesan/' . $value['id_layanan']) ?>" class="btn orange text-white">Pesan Sekarang!</a>
            </div>

          </div>

        </div>
      </div>
    <?php endforeach ?>
  </div>

</div>