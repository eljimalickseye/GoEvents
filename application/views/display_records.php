<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/codeigniter_logo.png" type="image/x-icon">
  <title>Display records</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?= base_url() ?>assets/css/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/codeigniter_logo.png" type="image/x-icon">
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px;
    }

    /* th{
  padding-left: 18px;
  padding-right: 18px;
} */

    table {
      position: absolute;


    }


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

    .pso {
      position: fixed;
      left: 1377px;
      top: 620px;
      width: 50px;
      height: 50px;
      border-radius: 100% 100%;
      font-size: 25px;
    }

    .h1 {
      font-size: 28px;
    }

    .pp {
      padding-right: 200px;
    }

    .btn1 {
      font-size: 16px;
    }

    .img {
      position: absolute;
    }


   
  </style>
</head>

<body>
  <img class="img img-fluid" src="<?php echo base_url(); ?>vendor/stint/images/r7.jpg" alt="" >
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">LIST Of EVENT </span>
    </div>
  </nav>
  <?php if ($this->session->userdata('user_id') == $_GET['user_id']) { ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Sr_No</th>
          <th scope="col">Name</th>
          <th scope="col">Topic</th>
          <th scope="col">Date</th>
          <th scope="col">Category</th>
          <th scope="col">Host</th>
          <th scope="col">Address</th>
          <th scope="col">Description</th>
          <th scope="col">Places</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($data as $row) {
          if ($row->fk_user_id == $_GET['user_id']) {
            echo "<tr>";
            echo "<th scope='row'>" . $i . "</th>";
            echo "<td>" . $row->Nom_Event . "</td>";
            echo "<td>" . $row->Topic_Event . "</td>";
            echo "<td>" . $row->Date_Event . "</td>";
            echo "<td>" . $row->Categorie_Event . "</td>";
            echo "<td>" . $row->Host_Event . "</td>";
            echo "<td>" . $row->Adresse_Event . "</td>";
            echo "<td>" . $row->Detail_Event . "</td>";
            echo "<td>" . $row->NombrePlace . "</td>";
            echo "<td><a class='btn btn-primary btn1' role='button' href='updatedata?id_Event=" . $row->id_Event . "'>EDIT</a>";
            echo "  <a class='btn btn-danger btn1' role='button' href='deletedata?id_Event=" . $row->id_Event . "'>DELETE</a>";
            echo "  <a class='btn btn-secondary btn1' role='button' href='generate?id_Event=" . $row->id_Event . "'>GENERATE</a></td>";
            echo "</tr>";
        ?>
            <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;">
              <a href='savedata?user_id=<?= $_GET['user_id'] ?>'> <img class="add_user" src="<?= base_url() ?>assets/images/add.png" data-toggle="modal" data-target="#addUser" /></a>
            </div>

        <?php
            $i++;
          }
        }


        ?>
      </tbody>
    </table>
    <br>
    <div class="col-lg-12">
      <a class='btn btn btn-danger pso' role='button' href="<?= base_url() ?>">X</a>
    </div>
  <?php } else {
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