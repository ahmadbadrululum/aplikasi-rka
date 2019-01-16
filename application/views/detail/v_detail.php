<?= form_open('subkomponen/detail'); ?>

<div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">Input Detail Subkomponen</h4>
	</div>

	<div class="widget-body">
		<div class="widget-main">
			<br>
			<div>
				<label for="form-field-9">Subkomponen</label>
				<select name="subkomponen" class="form-control">
					<?php foreach ($subkomponen as $k): ?>
						<option  value="<?= $k->id_subkomponen; ?>"><?= '('.$k->deskripsi.') ('.$k->nama_suboutput.') ('.$k->nama_komponen.') '. $k->nama_subkomponen ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<br>
			<div>
				<label for="form-field-8">Detail Subkomponen</label>
				<input name="detail" class="form-control" placeholder="Detail"></input>
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

<div>
	<br>
	<div class="center table-header">
		Table Detail Subkomponen		
	</div>
	<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">

		<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
			<thead>
				<tr role="row">
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
						No
					</th>

					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update : activate to sort column descending" aria-sort="ascending">
						<i class="ace-icon bigger-110 hidden-480"></i>Nama Komponen
					</th>


					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update : activate to sort column descending" aria-sort="ascending">
						<i class="ace-icon bigger-110 hidden-480"></i>Nama Subkomponen
					</th>

					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update : activate to sort column descending" aria-sort="ascending">
						<i class="ace-icon bigger-110 hidden-480"></i>Detail
					</th>

					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">Opration</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($detail as $d): ?>

				<tr role="row" class="odd">

					<td class="center">
						<?= $no; ?>
					</td>

					<td>
						<?= $d->nama_komponen; ?>
					</td>

					<td>
						<?= $d->nama_subkomponen; ?>
					</td>

					<td>
						<?= $d->nama_detail; ?>
					</td>
					<td class="center">
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="green" data-rel="tooltip" title="edit" data-original-title="View" href="<?= base_url('index.php/subkomponen/edit_detail/'.$d->id_detail); ?> ">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a onclick="return confirm('apakah anda yakin menghapus data ini ?')" class="red" data-rel="tooltip" title="delete" data-original-title="View" href="<?= base_url('index.php/subkomponen/delete_detail/'.$d->id_detail); ?> ">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>

					</td>
				</tr>
				<?php 
				$no++;
				endforeach ?>					
			</tbody>
		</table>
	</div>
</div> 