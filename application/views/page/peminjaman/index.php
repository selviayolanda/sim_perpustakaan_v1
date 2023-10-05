<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_peminjaman"><i
			class="fas fa-fw fa-plus"></i> Tambah peminjaman</button>

	<table class="table table-hovered mt-3">
		<tr>
			<th>No</th>
			<th>Id anggota</th>
			<th>Nama Anggota</th>
			<th>Keterangan</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php $no=1; ?>
        <?php foreach($peminjaman as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row['peminjaman_id'] ?></td>
			<td><?= $row['anggota_nm'] ?></td>
			<td><?= $row['keterangan'] ?></td>
			<td><?= $row['created_at'] ?></td>
			<td><?= $row['updated_at'] ?></td>
			<td>
				<a href="<?= base_url('peminjaman/edit_view/'.$row['peminjaman_id']); ?>" class="btn btn-sm btn-success">
					<i class="fas fa-edit"></i>
				</a>
				<a href="<?= base_url('peminjaman/hapus_peminjaman/'.$row['peminjaman_id']); ?>" class="btn btn-sm btn-danger">
					<i class="fas fa-trash-alt"></i>
				</a>
			</td>
		</tr>
        <?php endforeach; ?>


	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_peminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form peminjaman</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('peminjaman/simpan_peminjaman')?>" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama anggota</label>
						<!-- <input type="text" name="kategori_nm" id="kategori_nm" class="form-control"> -->
                        <input type="hidden" name="peminjaman_id" id="peminjaman_id" readonly value="<?= $peminjaman_kode ?>">
                        <select name="anggota_id" id="anggota_id" class="form-control">
                            <option value="">-- pilih --</option>
                            <?php foreach($anggota as $item): ?>
                            <option value="<?= $item['anggota_id'] ?>"><?= $item['anggota_nm'] ?></option>
                            <?php endforeach; ?>                            
                        </select>
					</div>
                    <div class="form-group">
						<label>keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control">
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
