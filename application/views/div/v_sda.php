<!-- <?= form_open('r_bulan/simpan'); ?> -->

<div class="col-xs-12">	
	<div class="table-responsive">
		<div class="center table-header">
			Input Laporan 
		</div>
		<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
			<tr role="row">

				<td>
					<input type="text" name="kode" class="form-control" placeholder=" Kode" aria-controls="dynamic-table">
				</td>

				<td>
					<input list="suboutput" name="suboutput" placeholder=" suboutput"  class="form-control"></input>
				</td>
				<datalist id="suboutput">
					<?php foreach ($suboutput->result() as $sk): ?>
						<?= "<option value='$sk->nama_suboutput'>" ?>	
					<?php endforeach ?>
				</datalist>
				
				<td>
					<input list="komponen" name="komponen" placeholder=" komponen"  class="form-control"></input>
				</td>
				<datalist id="komponen">
					<?php foreach ($komponen->result() as $sk): ?>
						<?= "<option value='$sk->nama_komponen'>" ?>	
					<?php endforeach ?>
				</datalist>
				
				<td>
					<input list="subkomponen" name="subkomponen" placeholder=" Subkomponen"  class="form-control"></input>
				</td>
				<datalist id="subkomponen">
					<?php foreach ($subkomponen->result() as $sk): ?>
						<?= "<option value='$sk->nama_subkomponen'>" ?>	
					<?php endforeach ?>
				</datalist>

				<td>
					<input type="date" name="tgl_realisasi" class="form-control " placeholder="" aria-controls="dynamic-table">
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="qty" class="form-control " placeholder="qty" aria-controls="dynamic-table">

				</td>

				<td>
					<input  type="text" name="satuan" class="form-control " placeholder="  Satuan" aria-controls="dynamic-table">
				</td>

				<td>
					<input type="text" name="frq" class="form-control " placeholder=" Frequensi" aria-controls="dynamic-table">
				</td>

				<td>
					<input type="text" name="anggaran" class="form-control " placeholder="Anggaran" aria-controls="dynamic-table">
				</td>

				<td class="center">
					<div class="hidden-sm hidden-xs action-buttons">
						<button class="btn btn-success" name="submit" type="submit">Simpan</button>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<br>
	<hr> 
	
	<div>
		<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">	
			
			<div class="center table-header">
				Tabel Laporan
			</div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
				<thead>

					<tr role="row">
						<th class="center sorting_disabled" rowspan="2" colspan="1" aria-label="">
							No			
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">Kode
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">Divisi
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">SubOutput
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">Komponen
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">SubKomponen
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">Detail
						</th>
						<th class=""  aria-controls="dynamic-table" rowspan="2" colspan="1" aria-label="Price: activate to sort column ascending">Tanggal Realisasi
						</th>
							<th class="center sorting_disabled "  aria-controls="dynamic-table" rowspan="1" colspan="4" aria-label="Clicks: activate to sort column ascending">Rincian
							</th>
						<th class="center"  aria-controls="dynamic-table" rowspan="2" colspan="1" aria-label="Update : activate to sort column ascending">
							<i class="ace-icon bigger-110 hidden-480"></i>
							Jumlah
						</th>
						<th class=" center sorting_disabled" rowspan="2" colspan="1" aria-label="">
							Operation
						</th>
					</tr>
					<tr>
						<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">
							QTY
						</th>

						<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">
							Satuan
						</th>

						<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">
							Frequensi
						</th>

						<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">
							Anggaran
						</th>
					</tr>
				</thead>

				<tbody>
					<?php 
					$no=1;
					$total=0;
					foreach($bulan_total->result() as $b): ?>
					<tr>
						<td colspan="10" class="text-center"><?= date('F',strtotime($b->tgl_realisasi)); ?></td>
					</tr>
					<?php 
					foreach ($record->result() as $k):
						if('0'.$b->bulan_total == date('m',strtotime($k->tgl_realisasi))) { ?>
					<tr role="row" class="odd">
						<td class="center">
							<?= $no; ?>
						</td>

						<td>
							<?= $k->kode; ?>
						</td>

						<td>
							<?= $k->deskripsi; ?>
						</td>
						<td>
							<?= $k->nama_suboutput; ?>
						</td>
						<td>
							<?= $k->nama_komponen; ?>
						</td>	
						<td>
							<?= $k->nama_subkomponen; ?>
						</td>
						<td class="center">
							<a href="<?= base_url('index.php/subkomponen/detail'); ?>"><button class="btn btn-warning" >Detail</button></a>
						</td>	

						<td>
							<?= $k->tgl_realisasi; ?>
						</td>

						<td>
							<?= $k->qty; ?>
						</td>

						<td>
							<?= $k->satuan; ?>
						</td>


						<td>
							<?= $k->frq; ?>
						</td>

						<td>
							<?= $k->anggaran; ?>
						</td>

						<td>
							<?= $k->qty * $k->frq * $k->anggaran; ?>
						</td>
						<td class="center">
							<div class="hidden-sm hidden-xs action-buttons">

								<a  onclick="return confirm('apakah anda yakin menghapus data ini ?')" class="red" href="<?= base_url('index.php/r_bulan/delete/'.$k->id_bulanan); ?>">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>

							</div>
						</td>
					</tr>
					<?php 
					$no++; 
					$total = $total+($k->qty * $k->frq * $k->anggaran); }
					endforeach; ?>

					<tr>
						<td  bgcolor="eaeaea" colspan="12" class="text-right"><b>Total Perbulan</b></td>
						<td  bgcolor="eaeaea">
							<?php 
							echo $total;

							$total = 0;

							?></td>
						</tr>
					<?php endforeach; ?>
					<tr role="row" class="odd">
						<td   bgcolor="aqua" colspan="12" align="right">
							<b>Total Seluruhnya </b>	
						</td>	
						<td bgcolor="aqua" >
							<?php 
							$tot = $total+($k->qty * $k->frq * $k->anggaran);
							echo $tot; ?>
						</td>
					</tr>		
				</tbody>
			</table>
			<br>
</div>
</div>
</div>
