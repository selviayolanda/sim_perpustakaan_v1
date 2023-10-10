<div class="container-fluid">
	<h2>Pengembalian</h2>
	<hr>
	<form action="<?= base_url('peminjaman/cari_peminjaman')?>" method="post">
	<div class="row pt-3">
			<div class="col-lg-4">
				<div class="form-group">
					<select name="peminjaman_id" id="peminjaman_id" class="form-control">
						<option value="">-- pilih --</option>
						<?php foreach($peminjaman as $item): ?>
						<option value="<?= $item['peminjaman_id'] ?>"><?= $item['peminjaman_id'] ?> - <?= $item['anggota_nm'] ?></option>
						<?php endforeach; ?>                            
					</select>
				</div>
			</div>
		<div class="col-lg-3">
			<div class="form-group">
				<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_peminjaman"><i
				class="fas fa-fw fa-search"></i> search</button>
			</div>
		</div>
	</form>
</div>

