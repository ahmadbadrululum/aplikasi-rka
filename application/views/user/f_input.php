<?= form_open('user/post'); ?>
<div class="col-xs-12 col-sm-6">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Input Data Devisi</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-8">Nama Lengkap</label>
					<input required name="nama" class="form-control limited" placeholder="Masukan Nama"></input>
				</div>
				<br>
				<div>
					<label for="form-field-10">Divisi</label><br>
					<select name="divisi">
						<?php foreach ($divisi->result() as $k): ?>
							<option  class="form_control" value="<?= $k->id_divisi; ?>"><?= $k->deskripsi ?></option>
						<?php endforeach ?>
						
					</select>
				</div>
				
				<br>
				<div>
					<label for="form-field-9">Username</label>
					<input required name="username" type="text" class="form-control limited" placeholder="Username"></input>
				</div>
				
				<br>
				<div>
					<label for="form-field-9">Password</label>
					<input type="password" required name="password" class="form-control limited" placeholder="Password"></input>
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
