<?= form_open('user/edit'); ?>
<input type="hidden" name="id" value="<?= $record['id_user']?>" >
<div class="col-xs-12 col-sm-5">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Edit Data Devisi</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">Nama Lengkap</label>
					<input required name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $record['nama_lengkap']; ?>"></input>
				</div>

				<br>
				<div>
					<label for="form-field-9">Divisi</label><br>
					<select name="divisi">
						<?php foreach ($divisi as $k): ?>
							<option class="form-control" value="<?= $k->id_divisi; ?>"><?= $k->deskripsi ?></option>
						<?php endforeach ?>
						
					</select>
				</div>
				
				<br>
				<div>
					<label for="form-field-9">Username</label>
					<input required name="username" class="form-control limited" placeholder="Username" value="<?= $record['username']; ?>"></input>
				</div>
				
				<div>
					<label for="form-field-9">Password</label>
					<input required name="password" class="form-control limited" placeholder="Password baru"></input>
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
