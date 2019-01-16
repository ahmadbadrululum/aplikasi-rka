<?= form_open('komponen/edit'); ?>
<input type="hidden" name="id" value="<?= $record['id_komponen']?>" >
<div class="col-xs-12 col-sm-4">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Edit Data Komponen</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">SubOutput</label><br>
					<select name="suboutput" class="form-control">
						<?php foreach ($suboutput as $k): ?>
							<option <?php if($k->id_suboutput==$record['id_suboutput']){ echo "selected";} ?> value="<?= $k->id_suboutput; ?>"><?= '('.$k->deskripsi.') '.$k->nama_suboutput ?></option>
						<?php endforeach ?>

					</select>
				</div>
				<br>
				<div>
					<label for="form-field-8">Nama Komponen</label>
					<input required name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $record['nama_komponen']; ?>"></input>
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
