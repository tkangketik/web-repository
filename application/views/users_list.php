<!-- Main content -->
<section class='content'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='box'>
        <div class='box-header'>
          <h3 class='box-title'>USERS LIST <br><br><?php echo anchor('users/create/', 'Create', array('class' => 'btn btn-danger btn-sm')); ?>
          </h3>
        </div><!-- /.box-header -->
        <div class='box-body'>
          <table class="table table-bordered table-striped" id="mytable">
            <thead>
              <tr>
                <th width="80px">No</th>

                <th>Nama Lengkap</th>
                <th>Username</th>
                <!-- <th>Password</th> -->
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $start = 0;
              foreach ($users_data as $users) {
              ?>
                <tr>
                  <td><?php echo ++$start ?></td>
                  <td><?php echo $users->nama ?></td>
                  <td><?php echo $users->username ?></td>
                  <!-- <td><?php echo $users->password ?></td> -->
                  <td><?php echo $users->email ?></td>
                  <td><?php echo $users->level ?></td>
                  <td style="text-align:center" width="140px">
                    <?php
                    echo '  ';
                    echo anchor(site_url('users/update/' . $users->id), '<i class="fa fa-pencil-square-o"></i>', array('title' => 'edit', 'class' => 'btn btn-danger btn-sm'));
                    echo '  ';
                    echo anchor(site_url('users/delete/' . $users->id), '<i class="fa fa-trash-o"></i>', 'title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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