<?= form_open('komponen/post'); ?>
<div class="col-xs-12 col-sm-6">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Tambah Data Komponen</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">SubOutput</label><br>
					<select name="suboutput" class="form-control">
						<?php foreach ($suboutput as $k): ?>
							<option value="<?= $k->id_suboutput; ?>"><?= '('.$k->deskripsi.') '.$k->nama_suboutput ?></option>
						<?php endforeach ?>

					</select>
				</div>
				<br>
				
				<div>
					<label for="form-field-8">Nama Komponen</label>
					<input required name="nama" class="form-control" placeholder="Komponen"></input>
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
