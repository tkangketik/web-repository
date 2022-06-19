<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>Enkripsi</h3>
                    <table class="table table-bordered table-hover">
                        <?php
                        $date_new = date('j F Y', strtotime($tgl . "+0 days"));
                        ?>

                        <tr>
                            <td>Tanggal</td>
                            <td><?php echo $date_new; ?></td>
                        </tr>
                        <?php if ($_SESSION['level'] == 'master') { ?>
                            <tr>
                                <td>Username</td>
                                <td><?php echo $username; ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>Hasil</td>
                            <td><?php echo $hasil; ?></td>
                        </tr>
                        <tr>
                            <td>Kunci</td>
                            <td><?php echo $kunci; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <?php if ($_SESSION['level'] == 'master') { ?>
                            <td><a href="<?php echo site_url('enkripsi') ?>" class="btn btn-default">Cancel</a>&nbsp;<?php echo anchor(site_url('caesar/decrypt/?msg=' . $hasil . '&&key=' . $kunci), 'Dekripsi', array('title' => 'detail', 'class' => 'btn btn-danger')); ?></td>
                            <?php } else { ?>
                                <td><a href="<?php echo site_url('enkripsi/list') ?>" class="btn btn-default">Cancel</a>&nbsp;<?php echo anchor(site_url('caesar/decrypt/?msg=' . $hasil . '&&key=' . $kunci), 'Dekripsi', array('title' => 'detail', 'class' => 'btn btn-danger')); ?></td>
                                <?php } ?>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->