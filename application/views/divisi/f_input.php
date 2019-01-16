<?= form_open('divisi/post'); ?>
<div class="col-xs-12 col-sm-4">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Tambah Data Divisi</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-8">Kode Divisi</label>
					<input required name="nama" class="form-control" placeholder="Divisi"></input>
				</div>

				<br>
				<div>
					<label for="form-field-9">Nama Divisi</label>
					<input required name="deskripsi" class="form-control limited" placeholder="Nama Disvisi"></input>
				</div>
				<hr>
				<div>
					<button class="btn btn-success" type="submit" name="submit">
					Simpan
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
