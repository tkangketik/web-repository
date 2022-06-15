<h4><?= $data->title; ?></h4>
<hr>

<?php
// $author = $this->db->query("SELECT * FROM authors WHERE id = '$data->id_author'")->row()->author;
// $type = $this->db->query("SELECT * FROM types WHERE id = '$data->id_type'")->row()->type;
$prodi1 = $this->db->query("SELECT * FROM prodi WHERE id = '$data->id_prodi'")->row()->program_studi;
$date_new = date('j F Y', strtotime($data->date . "+0 days"));

if ($data->thumbnail == '') {
  $thumb = 'noimg.png';
} else {
  $thumb = $data->thumbnail;
}

if ($data->file_repo == '') {
  $frepo = 'no_data.jpg';
} else {
  $frepo = $data->file_repo;
}

?>

<div class="row">
  <div class="col-md-4">
    <center><img class="img-thumbnail" src="<?= base_url() ?>uploads/<?= $thumb ?>"></center>
    <br>
  </div>
  <div class="col-md-8">
    <p><b>Description: </b><br><?= $data->description ?></p>
    <p><b>URL: </b><br> <a target="_blank" href="<?= base_url() ?>uploads/<?= $thumb ?>"><?= base_url() ?>uploads/<?= $thumb ?> </a></p>
    <p><b>Type: </b><br> <?= $data->tipe ?> </p>
    <p><b>Document: </b><br> <?= $prodi1 ?> </p>
    <p><b>Date: </b><br> <?= $date_new ?> </p>
    <p><b>Author: </b><br> <?= $data->nama ?> </p>
    <p><b>Download: </b><br> <a target="_blank" href="<?= base_url() ?>uploads/<?= $thumb ?>" download>Click here </a></p>
  </div>
</div>