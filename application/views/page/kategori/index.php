<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_kategori"><i
			class="fas fa-fw fa-plus"></i> Tambah kategori</button>

	<table class="table table-hovered mt-3">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php $no=1; ?>
        <?php foreach($kategori as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row['kategori_nm'] ?></td>
			<td><?= $row['created_at'] ?></td>
			<td><?= $row['updated_at'] ?></td>
			<td>
				<a href="<?= base_url('anggota/hapus_kategori/'.$row['kategori_id']); ?>" class="btn btn-sm btn-danger">
					<i class="fas fa-trash-alt"></i>
				</a>
			</td>
		</tr>
        <?php endforeach; ?>


	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('kategori/simpan_kategori')?>" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label>Kode kategori</label>
						<input type="text" name="kode_buku" id="kode_buku" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama kategori</label>
						<input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</xform>
		</div>
	</div>
</div>
