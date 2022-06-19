<h4>Search Result</h4>
<hr>

<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th width="65px">Date</th>
      <th>Content</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($data->result() as $row) : 
      $desc = substr($row->description, 0, 250);
      $date_new = date('d-m-Y', strtotime($row->date . "+0 days"));
      ?>
      <tr>
        <td> <?= $date_new ?> </td>
        <td>
          <div class="card-index">
            <a href="<?= base_url() ?>home/single/<?= $row->id ?>" class="font-weight-bold" style="margin-bottom: 1px"><?= $row->title ?></a>
            <p class="font-weight-light" style="margin-bottom: 1px; font-size: 14px"><?= $row->nama ?> (<?= $row->year ?>)</p>
            <p class="font-weight-normal"><?= $desc ?> </p>
          </div>
        <?php endforeach; ?>
  </tbody>
</table>