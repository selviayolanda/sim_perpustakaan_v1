<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_kategori"><i
			class="fas fa-fw fa-plus"></i> Tambah kategori</button>

	<table class="table table-hovered mt-3">
		<tr>
			<th>No</th>
			<th>Nama Buku</th>
			<th>Kategori</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php $no=1; ?>
        <?php foreach($buku as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row['buku_nm'] ?></td>
			<td><?= $row['kategori_nm'] ?></td>
			<td><?= $row['penulis'] ?></td>
			<td><?= $row['penerbit'] ?></td>
			<td><?= $row['created_at'] ?></td>
			<td><?= $row['updated_at'] ?></td>
			<td>
				<a href="<?= base_url('buku/edit_view/'.$row['buku_id']); ?>" class="btn btn-sm btn-success">
					<i class="fas fa-edit"></i>
				</a>
				<a href="<?= base_url('buku/hapus_buku/'.$row['buku_id']); ?>" class="btn btn-sm btn-danger">
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
				<form action="<?= base_url('buku/simpan_buku')?>" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Buku</label>
						<input type="text" name="buku_nm" id="buku_nm" class="form-control">
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<!-- <input type="text" name="kategori_nm" id="kategori_nm" class="form-control"> -->
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="">-- pilih --</option>
                            <?php foreach($kategori as $item): ?>
                            <option value="<?= $item['kategori_id'] ?>"><?= $item['kategori_nm'] ?></option>
                            <?php endforeach; ?>                            
                        </select>
					</div>
                    <div class="form-group">
						<label>Penulis</label>
						<input type="text" name="penulis" id="penulis" class="form-control">
					</div>
                    <div class="form-group">
						<label>Penerbit</label>
						<input type="text" name="penerbit" id="penerbit" class="form-control">
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
