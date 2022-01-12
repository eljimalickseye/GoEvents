<!DOCTYPE html>
<html>

<head>
  <title>Update Data</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/codeigniter_logo.png" type="image/x-icon">


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
  <img class="img img-fluid"  src="<?php echo base_url(); ?>vendor/stint/images/r7.jpg" alt="" >
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand font" href="#">Update Event</a>
    </div>
  </nav>
  <?php
  $i = 1;
  foreach ($data as $row) {
  ?>
    <form method="Post" action="">
      <?php
      if ($row->fk_user_id == $this->session->userdata('user_id')) {

        if ($row->id_Event == $_GET['id_Event']) {


      ?>

          <div class="border">
            <div class="mb-3">
              <label for="Nom_Event" class="form-label">Name</label>
              <input type="text" class="form-control" name="Nom_Event" id="Name_Event" aria-describedby="Name_Event" value="<?php echo $row->Nom_Event; ?>" required>
              <div id="Nom_Event" class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="Topic_Event" class="form-label">Topic</label>
              <input type="text" class="form-control" name="Topic_Event" id="Topic_Event" aria-describedby="Topic_Event" value="<?php echo $row->Topic_Event; ?>" required>
              <div id="Topic_Event" class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="Host_Event" class="form-label">Host</label>
              <input type="text" class="form-control" name="Host_Event" id="Host_Event" aria-describedby="Host_Event" value="<?php echo $row->Host_Event; ?>" required>
              <div id="Host_Event" class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="Date_Event" class="form-label">Date</label>
              <input type="date" class="form-control" name="Date_Event" id="Date_Event" aria-describedby="Date_Event" value="<?php echo $row->Date_Event; ?>" required>
              <div id="Date_Event" class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="Categorie_Event" class="form-label">Category</label>
              <input type="text" class="form-control" name="Categorie_Event" id="Host_Event" aria-describedby="Categorie_Event" value="<?php echo $row->Categorie_Event; ?>" required>
              <div id="Categorie_Event" class="form-text"></div>
            </div>

            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" name="Detail_Event" id="Detail_Event" style="height: 100px" value="<?php echo $row->Detail_Event; ?>"></textarea>
              <label for="Detail_Event">Describe Event</label>
            </div>

            <div class="mb-3">
              <label for="Adresse_Event" class="form-label">Address</label>
              <input type="text" class="form-control" name="Adresse_Event" id="Adresse_Event" aria-describedby="Adresse_Event" value="<?php echo $row->Adresse_Event; ?>" required>
              <div id="Adresse_Event" class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="NombrePlace" class="form-label">Number_Of_Places</label>
              <input type="number" class="form-control" name="NombrePlace" id="NombrePlace" aria-describedby="NombrePlace" value="<?php echo $row->NombrePlace; ?>">
              <div id="NombrePlace" class="form-text"></div>
            </div>



            <button type="submit" class="btn btn-primary btnn" name="update" value="Update_Records">Update</button>
            <?php
            ?>
            <a class='btn btn-dark btnm' href="<?= base_url('Event/displaydata?user_id=' . $this->session->userdata('user_id') . '') ?>">BACK</a>
            <?php
            ?>
          </div>
    </form>
<?php
        }
      } else {
        echo "<center class='stop'>you are not allowed to access this session.</center>";
      }
    }
?>
</body>

</html>