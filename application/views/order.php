<!-- main content -->
<div class="container">
  <p class="fs-1 text-center" style="font-weight: 500;">My Order</p>
  <div class="table-responsive riwayat">
    <table class="table table-borderless table-striped table-light">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal Pesan</th>
          <th scope="col">Total Pesanan</th>
          <th scope="col">Metode Pembayaran</th>
          <th scope="col">Status Pesanan</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($transaksi as $key => $value) :  ?>
        <tr>
          <th scope="row"><?php echo $key+1?></th>
          <td><?php echo $value['tanggal_pesan'] ?></td>
          <td>Rp. <?php echo  number_format($value['total_transaksi'], 0, ',', '.') ?></td>
          <td><?php echo $value['metode_pembayaran'] ?></td>
          <td><?php echo $value['status_transaksi'] ?></td>
          <td><a href="#!" class="btn orange text-white">Detail</a></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>