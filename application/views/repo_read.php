<!-- Main content -->
<section class='content'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='box'>
        <div class='box-header'>
          <h3 class='box-title'>Repository</h3>
          <table class="table table-bordered table-hover">
            <?php
            $date_new = date('j F Y', strtotime($date . "+0 days"));
            $prodi = $this->db->query("SELECT * FROM prodi WHERE id = '$id_prodi'")->row()->program_studi;

            if ($thumbnail == '') {
              $thumb = 'noimg.png';
            } else {
              $thumb = $thumbnail;
            }

            if ($file_repo == '') {
              $frepo = 'No File';
            } else {
              $frepo = $file_repo;
            }

            ?>

            <tr>
              <td>Tanggal</td>
              <td><?php echo $date_new; ?></td>
            </tr>
            <tr>
              <td>Pemilik</td>
              <td><?php echo $nama; ?></td>
            </tr>
            <tr>
              <td>Tipe</td>
              <td><?php echo $tipe; ?></td>
            </tr>
            <tr>
              <td>Jenis Foto</td>
              <td><?php echo $prodi; ?></td>
            </tr>
            <tr>
              <td>Judul</td>
              <td><?php echo $title; ?></td>
            </tr>
            <tr>
              <td>Foto</td>
              <td><img style="width:300px" class="img-thumbnail" src="<?= base_url() ?>uploads/<?php echo $thumb; ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td><a href="<?php echo site_url('repository') ?>" class="btn btn-default">Cancel</a></td>
            </tr>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->