<?= form_open('subkomponen/post'); ?>

<div class="col-xs-12 col-sm-4">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Input Subkomponen</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<!-- <div>
					<label for="form-field-8">Divisi</label>
					<select name="divisi">
							<?php foreach ($divisi as $d): ?>
								<option value="<?= $d->id_divisi; ?>"><?= $d->nama ?></option>
							<?php endforeach ?>
						</select>
				</div> -->
				<br>
				<div>
					<label for="form-field-9">Komponen</label>
						<select name="komponen" class="form-control">
							<?php foreach ($komponen as $k): ?>
								<option value="<?= $k->id_komponen; ?>"><?= $k->nama_komponen ?></option>
							<?php endforeach ?>
	
						</select>
				</div>
				<br>
				<div>
					<label for="form-field-8">Nama subkomponen</label>
					<input required name="nama" class="form-control" placeholder="Masukan Subkomponen"; ?></input>
				</div>
				<hr>
				<div>
					<button class="btn btn-info" type="submit" name="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>Submit
					</button>

				</div>
			</div>
		</div>
	</div>
</div>
									