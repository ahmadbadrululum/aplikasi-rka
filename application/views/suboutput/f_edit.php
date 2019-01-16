<?= form_open('suboutput/edit'); ?>
<input type="hidden" name="id" value="<?= $record['id_suboutput']?>" >
<div class="col-xs-12 col-sm-4">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Edit Data SubOutput</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">Divisi</label><br>
					<select required name="divisi" class="form-control">
						<?php foreach ($divisi->result() as $k): ?>
							<option <?php if($k->id_divisi==$record['id_divisi']){ echo "selected";} ?> value="<?= $k->id_divisi; ?>"><?= $k->deskripsi ?></option>
						<?php endforeach ?>
					</select>
				</div>
				
				<br>
				<div>
					<label for="form-field-8">Nama SubOutput</label>
					<input required name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $record['nama_suboutput']; ?>"></input>
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
