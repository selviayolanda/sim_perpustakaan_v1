<div class="container-fluid">
	<h2>Peminjaman | Kode Peminjam : <?= $peminjaman['peminjaman_id'] ?></h2>
	<hr>

	<div class="row pt-3">
		<div class="col-lg-7">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Buku Yang di Pinjam</h5>
				</div>
				<div class="card-body">
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
							<?php $no=1; ?>
							<?php foreach($detail_pinjam as $row): ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $row['anggota_nm'] ?></td>
									<td><?= (($row['buku_nm'] != '')? $row['buku_nm'] : '-') ?></td>
									<td><?= $row['tgl_pinjam'] ?></td>
									<td><?= $row['tgl_kembali'] ?></td>
									<td>
										<a href="" class="btn btn-sm btn-warning">
											<i class="fas fa-trash"></i>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="card card-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<label for="">Kode Peminjaman</label>
							<input type="text" name="peminjaman_id" id="peminjaman_id" value="<?= $peminjaman['peminjaman_id'] ?>" readonly class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="">Nama Buku</label>
							<select class="form-control" name="buku_id" id="buku_id">
								<option value="">-- Nama buku --</option>
								<?php foreach($buku as $item): ?>
									<option value="<?= $item['buku_id'] ?>" ><?= $item['buku_id'] ?> - <?= $item['buku_nm'] ?></option>
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
					<div class="col-lg-4">
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
        
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
    var peminjaman_id = $('#peminjaman_id').val();
    var anggota_id = '<?= $peminjaman['anggota_id'] ?>';
    var tgl_pinjam = $('#tgl_pinjam').val();
	$('#simpan_detail').click(function(){
		$.ajax({
			url: "<?= base_url('peminjaman/simpan_keranjang') ?>",
			type : "POST",
			data: {
				'peminjaman_id' : peminjaman_id,
				'anggota_id' : anggota_id,
				'buku_id' : $('#buku_id').val(),
				'tgl_pinjam' : tgl_pinjam,
				'tgl_kembali' : $('#tgl_kembali').val(),
			},
			success: function(data){
				alert('Success, data berhasil disimpan');
				location.reload();
			}
		});
	});
});

</script>

	