<?php 
$ci =&get_instance();
$ci->load->model('Model_divisi');
$datadivisi = $ci->Model_divisi->tampilkan_data(); 
?>
<ul class="nav nav-tabs">
    <?php $awal = 0; foreach ($datadivisi as $key) { ?>
    <li <?php if ($awal==0) {
        echo 'class = "active"'; $awal = 1;
    }  ?>><a data-toggle="tab" href="#<?= $key->id_divisi;?>"><?= $key->nama;?></a></li>
    <?php  } ?>
</ul>

<div class="tab-content">
    <?php $awal1 = 0; foreach ($datadivisi as $key) { ?>
    <div id="<?= $key->id_divisi;?>" class="tab-pane fade <?php if ($awal1==0) {
        echo "in active"; $awal1 = 1;
    }  ?>">
    <h3><?= $key->deskripsi; ?><button type="submit" style="margin-top: -25px;" class="pull-right btn btn-success">Simpan</button></h3>


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
                            <?php foreach ($komponen as $key3) {  ?>
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
                                <td>
                                    <?= '<span style="padding-right:50px;"></span>'.$key4->nama_subkomponen; ?>
                                </td>
                                <td><input type="date" class="form-control"></td>
                                <td><input type="number" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="number" class="form-control"></td>
                                <td><input type="number" class="form-control"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <?php foreach ($detail as $key5) {  ?>
                            <?php  if ($key4->id_subkomponen == $key5->id_subkomponen) { ?>
                            <tr>
                                <td>
                                    <?= '<span style="padding-right:100px;"></span>'.$key5->nama_detail; ?> 
                                </td>
                                <td></td>
                                <td><input type="number" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="number" class="form-control"></td>
                                <td><input type="number" class="form-control"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                            <?php } ?>

                            <?php } ?>
                            <?php } ?>

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

