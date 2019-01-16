<?= form_open('subkomponen/edit_detail'); ?>
<input type="hidden" name="id" value="<?= $record['id_detail']?>" >
<div class="col-xs-12 col-sm-9">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Edit Data Detail SubKomponen</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">Subkomponen</label><br>
					<select required name="subkomponen" class="form-control">
						<?php foreach ($subkomponen as $k): ?>
							<option <?php if($k->id_subkomponen==$record['id_subkomponen']){ echo "selected";} ?>  value="<?= $k->id_subkomponen; ?>"><?= '('.$k->deskripsi.') ('.$k->nama_suboutput.') ('.$k->nama_komponen.') '. $k->nama_subkomponen ?></option>
						<?php endforeach ?>

					</select>
				</div>
				
				<br>
				<div>
					<label for="form-field-8">Nama Detail</label>
					<input required name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $record['nama_detail']; ?>"></input>
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
