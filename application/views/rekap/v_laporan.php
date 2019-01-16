<form action="<?php base_url('index.php/r_bulan/rekap') ?>" method="post" >
    <ul class="nav nav-tabs">
        <?php $awal = 0; foreach ($divisi as $key) { ?>
        <li <?php if ($awal==0) {
            echo 'class = "active"'; $awal = 1;
        }  ?>><a data-toggle="tab" href="#<?= $key->id_divisi;?>"><?= $key->nama;?></a></li>
        <?php  } ?>
    </ul>
    <div class="tab-content">
        <?php $awal1 = 0; foreach ($divisi as $key) { ?>
        <div id="<?= $key->id_divisi;?>" class="tab-pane fade <?php if ($awal1==0) {
            echo "in active"; $awal1 = 1;
        }  ?>">
        <h3><?= $key->deskripsi; ?><button type="submit" name="submit" style="margin-top: -25px;" class="pull-right btn btn-success">Simpan</button></h3>
        <div class="panel-group" id="accordion">
            <?php foreach ($suboutput as $key2) { ?>
            <?php  if ($key->id_divisi == $key2->id_divisi) { ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#<?= $key->id_divisi.$key2->id_suboutput ?>">
                            <?= $key2->nama_suboutput; ?></a>
                        </h4>
                    </div>
                    <div id="<?= $key->id_divisi.$key2->id_suboutput ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                           <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info" width="100%">
                            <thead>
                                <tr role="row">

                                    <th style="width: 500px;" class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">Program
                                    </th>
                                    <th  class=""  aria-controls="dynamic-table" rowspan="2" colspan="1">Tanggal Realisasi
                                    </th>


                                    <th class="center sorting_disabled "  aria-controls="dynamic-table" rowspan="1" colspan="4" aria-label="Clicks: activate to sort column ascending">Rincian
                                    </th>
                                    <th class="center"  aria-controls="dynamic-table" rowspan="2" colspan="1" aria-label="Update : activate to sort column ascending">
                                        <i class="ace-icon bigger-110 hidden-480"></i>
                                        Jumlah (Rp)
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
                                        Anggaran (Rp)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>                            
                                <?php foreach ($komponen as $key3) { $subtotal_komponen = 0; ?>
                                <?php  if ($key2->id_suboutput == $key3->id_suboutput) { ?>
                                <tr>
                                    <td>
                                        <b><?= $key3->nama_komponen; ?></b>
                                    </td>
                                    <td colspan="7"></td>
                                </tr>

                                <?php foreach ($subkomponen as $key4) {  ?>
                                <?php  if ($key3->id_komponen == $key4->id_komponen) { ?>    
                                <tr>
                                    <?php $ci =&get_instance();
                                    $ci->load->model('Model_detail');
                                    $cekdetail = $ci->Model_detail->cekdetail($key4->id_subkomponen);
                                    $total = 0;
                                    if ($cekdetail == 0) {
                                        ?>
                                        <td>
                                            <?= '<span style="padding-right:50px;"></span>'.$key4->nama_subkomponen; ?>
                                        </td>
                                        <td><input name="date-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen ?>" type="text" class="form-control datepicker" value="<?php if($key4->tgl_realisasi != ''){echo date("d/m/Y", strtotime($key4->tgl_realisasi)); } ?>"></td>
                                        <td><input name="qty-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen ?>" type="number" class="form-control" value="<?= $key4->qty;  ?>"></td>
                                        <td><input name="satuan-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen ?>" type="text" class="form-control" value="<?= $key4->satuan;  ?>"></td>
                                        <td><input name="frq-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen ?>" type="number" class="form-control" value="<?= $key4->frq;  ?>"></td>
                                        <td><input name="anggaran-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen ?>" type="number" class="form-control" value="<?= $key4->anggaran;  ?>"></td>
                                        <td style="text-align: right"><?php if($key4->qty != '' && $key4->frq != '' && $key4->anggaran != ''){echo number_format($key4->qty * $key4->frq * $key4->anggaran); $subtotal_komponen += $key4->qty * $key4->frq * $key4->anggaran; }  ?></td>
                                        <td></td>
                                        <?php } else { ?>
                                        <td>
                                            <?= '<span style="padding-right:50px;"></span>'.$key4->nama_subkomponen; ?>
                                        </td>
                                        <td><input name="date-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen ?>" type="text" class="form-control datepicker"  value="<?php if($key4->tgl_realisasi != ''){echo date("d/m/Y", strtotime($key4->tgl_realisasi)); }  ?>"></td>
                                        <td colspan="4"></td>
                                        <td></td>
                                        <td></td>
                                        <?php } ?>
                                    </tr>

                                    <?php foreach ($detail as $key5) {  ?>
                                    <?php  if ($key4->id_subkomponen == $key5->id_subkomponen) { ?>
                                    <tr>
                                        <td>
                                            <?= '<span style="padding-right:100px;"></span>'.$key5->nama_detail; ?> 
                                        </td>
                                        <td></td>
                                        <td><input name="qty-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail; ?>" type="number" class="form-control" value="<?= $key5->detail_qty;  ?>"></td>
                                        <td><input name="satuan-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail; ?>" type="text" class="form-control" value="<?= $key5->detail_satuan;  ?>"></td>
                                        <td><input name="frq-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail; ?>" type="number" class="form-control" value="<?= $key5->detail_frq;  ?>"></td>
                                        <td><input name="anggaran-<?= $key->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail; ?>" type="number" class="form-control" value="<?= $key5->detail_anggaran;  ?>"></td>
                                        <td style="text-align: right"><?php if($key5->detail_qty != '' && $key5->detail_frq != '' && $key5->detail_anggaran != ''){echo number_format($key5->detail_qty * $key5->detail_frq * $key5->detail_anggaran); $subtotal_komponen += $key5->detail_qty * $key5->detail_frq * $key5->detail_anggaran;}  ?></td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>

                                    <?php } ?>
                                    <?php } ?>

                                    <?php } ?>
                                    <?php if($subtotal_komponen!= 0){ ?>
                                    <tr>
                                        <td colspan="6" style="text-align: right;"><b>Sub Total</b></td>
                                        <td><b><?= number_format($subtotal_komponen); ?></b></td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>


            </div>
        </div>
        <?php  } ?>
    </div>
</form>