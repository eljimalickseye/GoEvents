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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/codeigniter_logo.png" type="image/x-icon">
    <script src="<?php echo base_url(); ?>js/generate.js"></script>
    <style>
        .border {
            position: absolute;
            border: 1px black solid;
            margin: 25vh 35vh;
            width: 500px;
            height: 300px;

            background-color: black;

        }

        .border1 {
            position: absolute;
            border: 1px black solid;
            margin: 75vh 35vh;
            width: 500px;
            height: 300px;

            background-color: black;

        }

        .p {
            position: absolute;
            border: 1px black solid;
            margin: 125vh 35vh;
            width: 500px;
            height: 300px;
            background-color: black;
        }

        h4 {
            margin: 0vh 5vh;
        }

        .btnm {
            position: fixed;
            font-size: 18px;
            width: 70px;
            height: 70px;
            border-radius: 100% 100%;
            bottom: 450px;
            left: 1230px;
            padding-top: 20px;
        }

        .bord {
            background-color: grey;

        }

        .bord1 {
            background-color: white;

        }

        .bord2 {
            background-color: green;

        }

        .btnn {
            position: fixed;
            font-size: 10px;
            font: optional;
            width: 70px;
            height: 70px;
            border-radius: 100% 100%;
            left: 1230px;
            bottom: 300px;
        }

        .font {
            font-size: 28px;
        }

        .bt {
            position: absolute;
            left: 250px;
            top: 350px;
            font-size: 25px;


        }

        .bor11 {
            box-shadow: 3px -3px 3px 3px blue;
        }





        .bt1 {
            position: absolute;
            left: 250px;
            top: 730px;
            font-size: 25px;
        }

        .bt2 {
            position: absolute;
            left: 250px;
            top: 1110px;
            font-size: 25px;
        }

        .pp{
            position: absolute;
            border: 1px black solid;
            margin: 185vh 0vh;
            width: 100%;
            height: 200px;
            background-color: grey;
        }

        img{
            position: absolute;
        }

    </style>

</head>

<body>
<img src="<?php echo base_url() ;?>vendor/stint/images/R.jpg" alt="" width="100%" height="1450px">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand font" href="#">Choose Design Card</a>
        </div>
    </nav>
    <div>
        <?php
        foreach ($data as $row) {
            if ($row->id_Event == $_GET['id_Event']) {
                // echo "<tr>";

                // echo "<td>" . $row->Nom_Event . "</td>";
                // echo "<td>" . $row->Topic_Event . "</td>";
                // echo "<td>" . $row->Date_Event . "</td>";
                // echo "<td>" . $row->Categorie_Event . "</td>";
                // echo "<td>" . $row->Host_Event . "</td>";
                // echo "<td>" . $row->Adresse_Event . "</td>";
                // echo "<td>" . $row->Detail_Event . "</td>";
                // echo "<td>" . $row->NombrePlace . "</td>";
                // echo "</tr>";
        ?>
                <div class="form-check " id="invoice">
                    <input class="form-check-input bt"  type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <div class="border">
                            <div class="card mb-3 bord">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h1 class="card-title">Event : <?php echo  $row->Nom_Event   ?></h1>
                                    <h4 class="card-text"> Address :<?php echo  $row->Adresse_Event   ?></h4>
                                    <h4 class="card-text">Date: <?php echo  $row->Date_Event  ?></h4>
                                    <h4 class="card-text">hosted by: <?php echo  $row->Host_Event ?></h4>
                                    <h4 class="card-text">Categorie: <?php echo  $row->Categorie_Event ?></h4>
                                    <h4 class="card-text"> Describe :<?php echo  $row->Detail_Event   ?></h4>
                                    <h4 class="card-text"><?php echo  $this->session->userdata('email') ?></h4>

                                </div>
                                <center>
                                    <h4 class="card-text"> created by <?php echo  $this->session->userdata('name') ?></h4>
                                </center>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bt1" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <div class="border1">
                            <div class="card mb-3 bord1">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h1 class="card-title">Event : <?php echo  $row->Nom_Event   ?></h1>
                                    <h4 class="card-text"> Address :<?php echo  $row->Adresse_Event   ?></h4>
                                    <h4 class="card-text">Date: <?php echo  $row->Date_Event  ?></h4>
                                    <h4 class="card-text">hosted by: <?php echo  $row->Host_Event ?></h4>
                                    <h4 class="card-text">Categorie: <?php echo  $row->Categorie_Event ?></h4>
                                    <h4 class="card-text"> Describe :<?php echo  $row->Detail_Event   ?></h4>
                                    <h4 class="card-text"><?php echo  $this->session->userdata('email') ?></h4>

                                </div>
                                <center>
                                    <h4 class="card-text"> created by <?php echo  $this->session->userdata('name') ?></h4>
                                </center>
                            </div>
                        </div>
                    </label>
                </div>
          
                <div class="form-check">
                    <input class="form-check-input bt2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <div class="p">
                            <div class="card mb-3 bord2">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h1 class="card-title">Event : <?php echo  $row->Nom_Event   ?></h1>
                                    <h4 class="card-text"> Address :<?php echo  $row->Adresse_Event   ?></h4>
                                    <h4 class="card-text">Date: <?php echo  $row->Date_Event  ?></h4>
                                    <h4 class="card-text">hosted by: <?php echo  $row->Host_Event ?></h4>
                                    <h4 class="card-text">Categorie: <?php echo  $row->Categorie_Event ?></h4>
                                    <h4 class="card-text"> Describe :<?php echo  $row->Detail_Event   ?></h4>
                                    <h4 class="card-text"><?php echo  $this->session->userdata('email') ?></h4>

                                </div>
                                <center>
                                    <h4 class="card-text"> created by <?php echo  $this->session->userdata('name') ?></h4>
                                </center>
                            </div>
                        </div>
                    </label>
                </div>



        <?php

            }
        }


        ?>

        <div class="pp">

        </div>

       
        <button onclick='generatePDF()' class="btn btn-success btnn">DOWNLOAD</button>
        <a class='btn btn-dark btnm' href="<?= base_url('Event/displaydata?user_id=' . $this->session->userdata('user_id') . '') ?>">BACK</a>
        <!-- <a href = 'javascript:generatePDF()'>Click Here</a> to execute the javascript function. -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>../assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>../assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>../assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>../assets/js/sb-admin-2.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $("body").addClass("img");

            $(".p").addClass("bor11");

            $(".bt").on('click', function() {
                $(".border").addClass("bor11");
                $(".border1").removeClass("bor11");
                $(".p").removeClass("bor11");
            });

            $(".bt1").on('click', function() {
                $(".border1").addClass("bor11");
                $(".border").removeClass("bor11");
                $(".p").removeClass("bor11");
            });

            $(".bt2 ").on('click', function() {
                $(".p").addClass("bor11");
                $(".border").removeClass("bor11");
                $(".border1").removeClass("bor11");
            });
        </script>


    </div>
</body>

</html>