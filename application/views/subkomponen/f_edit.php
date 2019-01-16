<?= form_open('subkomponen/edit'); ?>
<input type="hidden" name="id" value="<?= $record['id_subkomponen']?>" >
<div class="col-xs-12 col-sm-4">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Edit Data Subkomponen</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">Komponen</label>
					<select  required name="komponen" class="form-control">
						<?php foreach ($komponen as $k): ?>
							<option <?php if($k->id_komponen==$record['id_komponen']){ echo "selected";} ?> value="<?= $k->id_komponen; ?>"><?= $k->nama_komponen ?></option>
						<?php endforeach ?>

					</select>
				</div>
				<br>
				<div>
					<label for="form-field-8">Nama Subkomponen</label>
					<input  required name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $record['nama_subkomponen']; ?>"></input>
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
