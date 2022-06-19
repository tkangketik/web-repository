<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>ENKRIPSI LIST <br><br> <?php echo anchor('enkripsi/create/', 'Tambah Data', array('class' => 'btn btn-danger btn-sm')); ?>&nbsp;<?php echo anchor('caesar/', 'Enkripsi Pesan', array('class' => 'btn btn-danger btn-sm')); ?>&nbsp;<?php echo anchor('caesar/decrypt', 'Dekripsi Pesan', array('class' => 'btn btn-danger btn-sm')); ?>
                    </h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Tanggal</th>
                                <?php if ($_SESSION['level'] == 'master') { ?>
                                    <th>Username</th>
                                <?php } ?>
                                <th>Hasil</th>
                                <th>Kunci</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($enkripsi_data as $enkripsi) {
                            ?>
                                <tr>
                                    <?php
                                    $date_new = date('j F Y', strtotime($enkripsi->tgl . "+0 days"));
                                    ?>
                                    <td><?php echo ++$start ?></td>
                                    <td><?php echo $date_new ?></td>
                                    <?php if ($_SESSION['level'] == 'master') { ?>
                                        <td><?php echo $enkripsi->username ?></td>
                                    <?php } ?>
                                    <td><?php echo $enkripsi->hasil ?></td>
                                    <td><?php echo $enkripsi->kunci ?></td>
                                    <td style="text-align:center" width="140px">
                                        <?php
                                        echo anchor(site_url('caesar/decrypt/?msg=' . $enkripsi->hasil . '&&key=' . $enkripsi->kunci), '<i class="fa fa-unlock"></i>', array('title' => 'detail', 'class' => 'btn btn-danger btn-sm'));
                                        echo '  ';
                                        echo anchor(site_url('enkripsi/read/' . $enkripsi->id), '<i class="fa fa-eye"></i>', array('title' => 'detail', 'class' => 'btn btn-danger btn-sm'));
                                        echo '  ';
                                        echo anchor(site_url('enkripsi/delete/' . $enkripsi->id), '<i class="fa fa-trash-o"></i>', 'title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#mytable").dataTable();
                        });
                    </script>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->