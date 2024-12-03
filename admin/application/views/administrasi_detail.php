<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h5>Detail Customer</h5>
			<table class="table table-bordered">
				<tr>
					<td>Nama Customer</td>
					<td><?php echo $customer['nama_customer']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $customer['email_customer']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?php echo $customer['alamat']; ?></td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td><?php echo $customer['no_telepon']; ?></td>
				</tr>
				<tr>
					<td>Tanggal Daftar</td>
					<td><?php echo $customer['tanggal_daftar']; ?></td>
				</tr>
			</table>
			<div>
				<a href="" class="btn btn-warning">Edit</a>
				<a href="" class="btn btn-danger">Hapus</a>
			</div>
		</div>
		<div class="col-md-8">
			<h5>Riwayat Pesanan</h5>
			<table class="table table-bordered" id="tabelku">
		        <thead>
		            <tr>
		                <th>No</th>
		                <th>Tanggal</th>
		                <th>Total</th>
		                <th>Status</th>
		                <th>Opsi</th>
		            </tr>
		        </thead>
		        <tbody>
		            <?php foreach ($pesanan as $key => $value): ?>
		            <tr>
		                <td><?php echo $key+1 ?></td>
		                <td><?php echo $value['tanggal_transaksi'] ?></td>
		                <td><?php echo $value['total_transaksi'] ?></td>
		                <td><?php echo $value['status_transaksi'] ?></td>
		                <td>
		                    <a href="<?php echo base_url("transaksi/detail/".$value["id_transaksi"]) ?>" class="btn btn-info">Detail</a>
		                </td>
		            </tr>
		            <?php endforeach ?>
		        </tbody>
    		</table>
		</div>
	</div>
</div>