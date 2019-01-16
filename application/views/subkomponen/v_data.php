<div>
	<br>
	<div class="hidden-sm hidden-xs action-buttons">
		<a href="<?= base_url('index.php/subkomponen/post'); ?>"><button class="btn btn-success" >Tambah Subkomponen</button></a>
		<a href="<?= base_url('index.php/subkomponen/detail'); ?>"><button class="btn btn-info" >Tambah Detail Subkomponen</button></a>
	</div>
	<hr> 

	<div class="center table-header">
		Table Program
	</div>
	<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
		
		<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
			<thead>
				<tr role="row">
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
						No
					</th>
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">Nama divisi </th>
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">SubOutput	</th>
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">Komponen	</th>
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">Subkomponen	</th>
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">Opration	</th>

				</tr>
			</thead>

			<tbody>
				<?php 
				$no=1;
				foreach ($record->result() as $sk): ?>

				<tr role="row" class="odd">

					<td class="center">
						<?= $no; ?>
					</td>
					<td>
						<?= $sk->deskripsi?>
					</td>
					<td>
						<?= $sk->nama_suboutput; ?>
					</td>	
					<td> 
						<?= $sk->nama_komponen; ?>
					</td>
					<td>
						<?= $sk->nama_subkomponen; ?>
					</td>
					<td class="center">
						<div class="hidden-sm hidden-xs action-buttons">
							
							<a class="green" href="<?= base_url('index.php/subkomponen/edit/'.$sk->id_subkomponen); ?>" data-rel="tooltip" title="edit" data-original-title="View">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a onclick="return confirm('apakah anda yakin menghapus data ini ?')" class="red" data-rel="tooltip" title="delete" data-original-title="View" href="<?= base_url('index.php/subkomponen/delete/'.$sk->id_subkomponen); ?> ">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>

					</td>
				</tr>
			</tbody>
			<?php 
			$no++;
			endforeach ?>							
		</table>
	</div>
</div>