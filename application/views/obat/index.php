<!-- Begin Page Content -->
<div class="container-fluid";>

	<!-- Page Heading -->
	<div class="col-lg-12">
		<div class="card shadow border-0">
			<div class="card-header py-3">
				<h4 class="m-0 font-weight-bold text-secondary">Data Obat</h4>
				<a href="<?php echo site_url('obat/tambah'); ?>" class="btn btn-sm btn-primary btn-icon-split float-right">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text">Tambah</span>
				</a>
			</div>
			<div class="card-body border-0 p-4">

				<!-- Pesan Sukses -->
				<?php if ($this->session->flashdata('info')) : ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('info'); ?>
					</div>
				<?php endif; ?>

				<!-- Tabel -->
				<table class="table table-bordered" id="dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Obat</th>
							<th>Nama Obat</th>
							<th>Harga</th>
							<th>Produsen</th>
							<th>Supplier</th>
							<th>Stok</th>
							<th>Gambar</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<?php foreach($obat->result() as $data) : ?>
					<tbody>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data->kode; ?></td>
							<td><?php echo $data->nama_obat; ?></td>
							<td><?php echo $data->harga; ?></td>
							<td><?php echo $data->produsen; ?></td>
							<td><?php echo $data->supplier_id; ?></td>
							<td><?php echo $data->stok; ?></td>
							<td>
								<img src="<?php echo base_url('assets/img/') . $data->foto; ?>" width="100" class="">
							</td>

							<!-- Tombol Aksi -->
							<td>
								<a href="<?php echo site_url('obat/hapus/') . $data->kode; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
								<a href="<?php echo site_url('obat/ubah/') . $data->kode; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
							</td>
						</tr>
					</tbody>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>

