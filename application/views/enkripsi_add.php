<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>Tambah Data Enkripsi</h3>
                    <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <table class='table table-bordered'>
                                <tr>
                                    <td>Tanggal </td>
                                    <td><input type="date" class="form-control" name="tgl" value="<?php echo date('Y-m-d'); ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hasil Enkripsi</td>
                                    <td>
                                        <input type="text" name="hasil" class="form-control" placeholder="Hasil" value="<?= $_GET['hasil'];?>"required>
                                        <input type="hidden" name="username" class="form-control" value="<?= $_SESSION['username']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kunci </td>
                                    <td>
                                        <input type="text" name="kunci" class="form-control" placeholder="Kunci" value="<?= $_GET['kunci'];?>"required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='2'><button type="submit" class="btn btn-primary">Simpan</button>
                                        <?php if ($_SESSION['level'] == 'master') { ?>
                                            <a href="<?php echo site_url('enkripsi') ?>" class="btn btn-default">Cancel</a>
                                        <?php } else { ?>
                                            <a href="<?php echo site_url('enkripsi/list') ?>" class="btn btn-default">Cancel</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>