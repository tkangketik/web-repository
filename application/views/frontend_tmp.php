<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Repository</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>



  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

  <style>
    body {
      background-color: grey;
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .containers {
      width: 100%;
      max-width: 1431px;
      margin: 0 auto;
      position: relative;
    }

    .content {
      width: 100%;
      max-width: 1431px;
      margin: 0 auto;
      position: relative;
    }

    @media screen and (max-width: 1500px) {
      .containers {
        width: 100%;
        max-width: 1070px;
        margin: 0 auto;
        position: relative;
      }

      .content {
        width: 100%;
        max-width: 1070px;
        margin: 0 auto;
        position: relative;
      }
    }

    @media screen and (max-width: 1700px) {
      .containers {
        width: 100%;
        max-width: 1270px;
        margin: 0 auto;
        position: relative;
      }

      .content {
        width: 100%;
        max-width: 1270px;
        margin: 0 auto;
        position: relative;
      }
    }
  </style>
  <title>Repository</title>
</head>

<body>

  <div class="containers">

    <div class="header" style="background:#007BFF">
      <br>
      <center> <img class="img-responsive" src="">
        <h2>TEKNIK STEGANOGRAFI UNTUK PENYEMBUNYIAN PESAN TEKS MENGGUNAKAN CAESAR CIPHER PADA APLIKASI REPOSITORY FOTO <h2>
      </center>
    </div>

    <div class="row" style="margin: 0px">
      <div class="col-md-9" style="background-color: white">
        <br>
        <h2 style='font-family:"Arial Black", Gadget, sans-serif'>Repository</h2>
        <hr style="height:1px;border:none;color:#333;background-color:#333;" />
        <br>
        <?php echo "$contents"; ?>

      </div>
      <div class="col-md-3" style="background-color: white">
        <br>
        <?php echo form_open('home/search_rdr'); ?>
        <div class="input-group mb-3">

          <input type="text" name="keyword" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button type="submit"> <i class="fas fa-search"></i> </button>
          </div>
          </form>
        </div>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            <b> Navigation </b>
          </a>
          <a href="<?= base_url() ?>" class="list-group-item list-group-item-action">Home</a>
          </a>
          <a href="<?= base_url() ?>caesar" class="list-group-item list-group-item-action">Dekripsi</a>

        </div>

        <br>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            Browse
          </a>
          <!-- <a href="<?= base_url() ?>home/browse_title" class="list-group-item list-group-item-action">Titles</a>
            <a href="<?= base_url() ?>home/browse_author" class="list-group-item list-group-item-action">Authors</a> -->
          <a href="<?= base_url() ?>home/browse_prodis" class="list-group-item list-group-item-action">File</a>
          <!-- <a href="<?= base_url() ?>home/browse_type" class="list-group-item list-group-item-action">Tipe</a> -->
        </div>

        <br>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            Documents
          </a>

          <?php foreach ($prodi->result() as $row1) : ?>
            <a href="<?= base_url() ?>home/single_prodis/<?= $row1->id ?>" class="list-group-item list-group-item-action"><?php echo $row1->program_studi; ?></a>
          <?php endforeach; ?>


        </div>

        <br>

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            My Account
          </a>
          <a href="<?= base_url() ?>auth/login" class="list-group-item list-group-item-action">Login</a>
          <a href="<?= base_url() ?>register" class="list-group-item list-group-item-action">Register</a>
        </div>
        <br>

      </div>

    </div>

    <div class="footer" style="background:black; margin:0px">
      <br><br>
    </div>

  </div>




</body>

</html>