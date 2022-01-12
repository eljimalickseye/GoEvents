<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/codeigniter_logo.png" type="image/x-icon">
  <title>Registration form</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?= base_url() ?>assets/css/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
  .stop {
    font-size: 43px;
    border: 1px black solid;
    width: 900px;
    height: 80px;
    position: relative;
    left: 290px;
    top: 300px;
    background-color: red;
  }

  .font {
    font-size: 28px;
  }

  .mb-3 {
    font-size: 22px;
  }

  .border {
    border: 1px black solid;
    width: 600px;
    position: relative;
    left: 399px;
    padding: 20px;
  }

  .form-control {
    font-size: 18px;
  }

  .btnn {
    position: fixed;
    font-size: 18px;
    width: 70px;
    height: 70px;
    border-radius: 100% 100%;
    left: 1230px;
    bottom: 300px;
  }

  .btnm {
    position: fixed;
    font-size: 18px;
    width: 70px;
    height: 70px;
    border-radius: 100% 100%;
    bottom: 300px;
    left: 100px;
    padding-top: 20px;
  }

  .img {
    position: absolute;
  }

  * {
    color: black;
  }
</style>

<body>
  <img class="img img-fluid" src="<?php echo base_url(); ?>vendor/stint/images/r7.jpg" alt="" >
  <?php if ($this->session->userdata('user_id') == $_GET['user_id']) { ?>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand font" href="#">Create Event</a>
      </div>
    </nav>

    <form method="post" action="<?= base_url('Event/savedata') ?>">
      <div class="border">
        <div class="mb-3">
          <label for="Nom_Event" class="form-label">Name</label>
          <input type="text" class="form-control" name="Nom_Event" id="Name_Event" aria-describedby="Name_Event" required>
          <div id="Nom_Event" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="Topic_Event" class="form-label">Topic</label>
          <input type="text" class="form-control" name="Topic_Event" id="Topic_Event" aria-describedby="Topic_Event" required>
          <div id="Topic_Event" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="Host_Event" class="form-label">Host</label>
          <input type="text" class="form-control" name="Host_Event" id="Host_Event" aria-describedby="Host_Event" required>
          <div id="Host_Event" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="Date_Event" class="form-label">Date</label>
          <input type="date" class="form-control" name="Date_Event" id="Date_Event" aria-describedby="Date_Event" required>
          <div id="Date_Event" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="Categorie_Event" class="form-label">Category</label>
          <input type="text" class="form-control" name="Categorie_Event" id="Host_Event" aria-describedby="Categorie_Event" required>
          <div id="Categorie_Event" class="form-text"></div>
        </div>

        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" name="Detail_Event" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Describe Event</label>
        </div>

        <div class="mb-3">
          <label for="Adresse_Event" class="form-label">Address</label>
          <input type="text" class="form-control" name="Adresse_Event" id="Adresse_Event" aria-describedby="Adresse_Event" required>
          <div id="Adresse_Event" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="NombrePlace" class="form-label">Number_Of_Places</label>
          <input type="number" class="form-control" name="NombrePlace" id="NombrePlace" aria-describedby="NombrePlace">
          <div id="NombrePlace" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="fk_user_id" class="form-label"></label>
          <input type="hidden" class="form-control" name="fk_user_id" id="fk_user_id" value="<?php echo $_GET['user_id']; ?>" aria-describedby="fk_user_id">
          <div id="fk_user_id" class="form-text"></div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary btnn" name="save" value="Upload">GO</button>
      <?php echo "<a class='btn btn-dark btnm' href='" . base_url('') . "'>BACK</a>"; ?>
    </form>

  <?php
  } else {
    echo "<center class='stop'>you are not allowed to access this session.</center>";
  }

  ?>

  <!-- jQuery -->
  <script src="<?= base_url() ?>../assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?= base_url() ?>../assets/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?= base_url() ?>../assets/js/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?= base_url() ?>../assets/js/sb-admin-2.js"></script>


</body>

</html>