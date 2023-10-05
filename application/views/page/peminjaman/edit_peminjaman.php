<div class="container-fluid">
	<h2>Peminjaman | Kode Peminjam : <?= $peminjaman['peminjaman_id'] ?></h2>
	<hr>

	<!-- <div class="row pt-3">
		<div class="col-lg-4">
			<div class="form-group">
				<label for="anggota">Pilih Anggota</label>
				<select name="anggota" id="anggota" class="form-control">
					<option value="">-- Pilih anggota --</option>
					<?php foreach ($anggota as $item): ?>
						<option value="<?= $item['anggota_id'] ?>" <?= ($item['anggota_id'] == $item['anggota_id'] ? 'selected' : '') ?>><?= $item['anggota_nm'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
	</div> -->
	<div class="row pt-3">
		<div class="col-lg-7">
			<table class="table table-bordered mt-3">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama anggota</th>
						<th>Nama buku</th>
						<th>Tanggal pinjam</th>
						<th>Tanggal kembali</th>
						<th colspan="3">AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($detail_pinjam as $row): ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $row['anggota_id'] ?></td>
							<td><?= $row['buku_id'] ?></td>
							<td><?= $row['tgl_pinjam'] ?></td>
							<td><?= $row['tgl_kembali'] ?></td>
							<td>
								<a href="<?= base_url('peminjaman/edit_view/' . $row['peminjaman_id']); ?>"
								   class="btn btn-sm btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<a href="<?= base_url('peminjaman/hapus_peminjaman/' . $row['peminjaman_id']); ?>"
								   class="btn btn-sm btn-danger">
									<i class="fas fa-trash-alt"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="col-lg-5">
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						<label for="">Invoice Peminjaman</label>
						<input type="text" name="" id=""  value="<?= $peminjaman['peminjaman_id'] ?>" readonly class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="">Nama Buku</label>
						<select name="buku_id" id="buku_id" class="form-control">
							<option value="">-- Nama buku --</option>
							<?php foreach($buku as $item): ?>
								<option value="<?= $item['buku_id'] ?>"><?= $item['buku_nm'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-lg-3">
					<div class="form-group">
						<label>Tanggal pinjam</label>
						<input type="Date" name="tgl_pinjam" id="tgl_pinjam" value="<?= date('Y-m-d') ?>" readonly class="form-control">
					</div>
				</div>
				<div class="col-lg-3">
					<div class="form-group">
						<label>Tanggal kembalikan</label>
						<input type="Date" name="tgl_kembali" id="tgl_kembali" class="form-control">
					</div>
				</div>
				<div class="col-lg-5">
					<label for="">-</label>
					<a href="javascript:void(0)" id="simpan_detail" class="btn btn-block btn-success">
						<i class="fas fa-cart-plus"></i> Tambah Data Pimjam
					</a>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-lg-6">
					<a href="<?= base_url('peminjaman/simpan_peminjaman') ?>" class="btn btn-block btn-primary">Simpan tindakan</a>
				</div>
			</div>            
		</div>
	</div>
</div>
<script>
	$('#simpan_detail').on('click', function(){
		var peminjaman_id = $('#peminjaman_id').val();
		var anggota_id = $('#anggota_id').val();
		var buku_id = $('#buku_id').val();
		var tgl_pinjam = $('#tgl_pinjam').val();
		var tgl_kembali = $('#tgl_kembali').val();
		var tgl_kembalikan = $('#tgl_kembalikan').val();
	});
</script>

	