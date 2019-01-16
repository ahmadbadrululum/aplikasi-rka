<?= form_open('divisi/edit'); ?>
<input type="hidden" name="id" value="<?= $record['id_divisi']?>" >
<div class="col-xs-12 col-sm-4">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Edit Data Devisi</h4>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-8">Kode Devisi</label>
					<input name="nama" class="form-control" required placeholder="Kode Divisi" value="<?= $record['nama']; ?>"></input>
				</div>

				<br>
				<div>
					<label for="form-field-9">Nama Divisi</label>
					<input name="deskripsi" class="form-control limited" required placeholder="Nama Divisi" value="<?= $record['deskripsi']; ?>"></input>
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
