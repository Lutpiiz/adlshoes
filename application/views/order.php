<?php
function badge($status)
{
    switch ($status) {
        case 'dipesan':
            return 'bg-secondary';
        case 'dibayar':
            return 'bg-warning';
        case 'diproses':
            return 'bg-primary';
        case 'selesai':
            return 'bg-success';
        case 'dibatalkan':
            return 'bg-danger';
        default:
            return 'bg-secondary';
    }
}
?>

<!-- Main Content -->
<div class="container" data-aos="zoom-in-up">
  <h1 class="text-center">My Order</h1>
  <div class="table-responsive riwayat">
    <table class="table table-borderless table-striped table-light text-center">
      <thead>
        <tr>
          <th scope="col">Tanggal Pesan</th>
          <th scope="col">Total Pesanan</th>
          <th scope="col">Metode Pembayaran</th>
          <th scope="col">Status Pesanan</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($transaksi as $key => $value) : ?>
          <tr>
            <td><?php echo date('d F Y H:i', strtotime($value['tanggal_pesan'])); ?></td>
            <td>Rp. <?php echo number_format($value['total_transaksi'], 0, ',', '.'); ?></td>
            <td><?php echo ucfirst($value['metode_pembayaran']); ?></td>
            <td>
              <span class="badge <?php echo badge($value['status_transaksi']); ?> fs-6">
                <?php echo ucfirst($value['status_transaksi']); ?>
              </span>
            </td>
            <td>
              <a href="<?php echo base_url('order/detail/' . $value['id_transaksi']); ?>" 
                 class="btn orange text-white">Detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
