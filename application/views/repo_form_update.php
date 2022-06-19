<?php
$prodi1    = "SELECT * FROM prodi WHERE id = '$id_prodi'";
$prodi2    = $this->db->query($prodi1)->row();
$prodi3    = $prodi2->program_studi;
?>
<!-- Main content -->
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box'>
                <div class='box-header'>

                    <h3 class='box-title'>REPOSITORY</h3>
                    <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <table class='table table-bordered'>
                                <tr>
                                    <td>Date (mm-dd-yyyy)</td>
                                    <td><input type="date" class="form-control" name="date" value="<?= $date ?>" />
                                    </td>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                <tr>
                                    <td>Nama Pemilik </td>
                                    <td>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $nama; ?>" required>
                                    </td>
                                <tr>
                                    <td>Type </td>
                                    <td>
                                        <input type="text" class="form-control" name="tipe" placeholder="Tipe" value="<?= $tipe; ?>" required>
                                    </td>
                                <tr>
                                    <td>Program Studi </td>
                                    <td>
                                        <select class="form-control" name="id_prodi">
                                            <option value="<?= $id_prodi ?>"> <?= $prodi3 ?> </option>
                                            <?php foreach ($prodi->result() as $row3) : ?>
                                                <option value="<?php echo $row3->id; ?>"><?php echo $row3->program_studi; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                <tr>
                                    <td>Title </td>
                                    <td><input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= $title ?>" required>
                                    </td>
                                <tr>
                                    <td>Description </td>
                                    <td><textarea class="form-control" rows="8" name="description" id="description" placeholder="Description"><?= $description ?></textarea>
                                    </td>
                                </tr>
                                <input type="file" class="form-control" name="file" />
                                <p>* Lewati ini bila tidak ingin mengubah file sebelumnya</p> -->
                                </td>
                                <tr>
                                    <td>Thumbnail ( .jpg/.png ) </td>
                                    <td>
                                        <input type="file" class="form-control" name="thumbnail" />
                                        <p>* Lewati ini bila tidak ingin mengubah thumbnail sebelumnya</p>
                                    </td>
                                <tr>
                                    <td colspan='2'><button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo site_url('repository') ?>" class="btn btn-default">Cancel</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</section><!-- /.content -->