    <ul class="nav nav-tabs">
        <?php $awal = 0; foreach ($divisi as $key) { ?>
        <li <?php if ($awal==0) {
            echo 'class = "active"'; $awal = 1;
        }  ?>><a data-toggle="tab" href="#<?= $key->id_divisi;?>"><?= $key->nama;?></a></li>
        <?php  } ?>
    </ul>
    <div class="tab-content">
        <?php $awal = 0; foreach ($divisi as $key) { ?>
        <div id="<?= $key->id_divisi;?>" class="tab-pane fade <?php if ($awal==0) {
            echo 'in active'; $awal = 1;
        }  ?>">
        <h3><?= $key->deskripsi ?></h3>
        <center>
            <div class="table-responsive">
                <table class="table table-striped table-bordered " style="width: 60%">
                    <thead>
                        <th>SubOutput</th>
                        <th>Anggaran</th>
                    </thead>
                    <tbody>
                        <?php foreach ($suboutput as $key2) { ?>
                        <?php  if ($key->id_divisi == $key2->id_divisi)  { ?>
                        <tr>
                            <td><?= $key2->nama_suboutput; ?></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </center>
    </div>
    <?php } ?>
</div>
</div>