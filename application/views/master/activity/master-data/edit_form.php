<div class="card-header">
	<h3 class="card-title">Edit Data</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form id="form-masters-activity" novalidate="novalidate" url-update="<?= $data['id']; ?>">
	<div class="card-body">
		<input type="hidden" name="nama_jenis" value="<?= $data['nama_jenis']; ?>">
		<div class="form-group">
			<label>Nama Aktivitas</label>
			<input type="text" name="nama_aktivitas" class="form-control" value="<?= $data['nama_aktivitas']; ?>"></input>
		</div>
		<div class="form-group">
			<label>Target Aktivitas</label>
			<input type="text" name="target_aktivitas" class="form-control" value="<?= $data['target_aktivitas']; ?>"></input>
		</div>
		<div class="form-group">
			<label>Durasi Aktivitas</label>
			<input type="number" name="durasi_aktivitas" class="form-control" value="<?= $data['durasi_aktivitas']; ?>"></input>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Update</button>
	</div>
</form>