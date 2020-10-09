<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootsrap.min.css') ?>">
    <style>
        body {
            background-color: #6A94FF;
            /* background-image: url('http://localhost/ci_boots/assets/img/z_orig.png'); */

        }

        .wrapper {
            width: 900px;
            height: 625px;
            margin: auto;
            padding: 15px;
            background-color: #f2f2f2;
        }

        .card-header {
            background-color: #c9c7c7;
            margin: auto;
            width: 900px
        }

        #card-content {
            margin-left: 219px;
            margin-top: 10px;
            /* width: 650px; */
        }

        #sidebarMenu{
            border-radius:5px
        }

        input[type=text] {
            border: 1px solid #ddd;
            padding: 10px;
            width: 95%;
            border-radius: 2px;
            outline: none;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        label,
        h1 {
            text-transform: uppercase;
            font-weight: bold;
        }

        h5 {
            margin-top: 5px;
        }

        .col {
            background-color: #dedede;
            margin-top: -160px;
            margin-left: 150px;
            width: 700px;
            height: 530px;
        }

        .content-video{
            margin-left: -80px;
        }
    </style>
</head>

<body>

    <div class="card-header">
        <h3 style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Pelaporan Pengaduan Masyarakat</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:900px; margin: auto;">
        <a class="navbar-brand" href="#" style="font-weight: bold; font-size:25px">Lapor</a>
        <a class="navbar-brand" href="#" style="color: red; margin-left:-8px; font-weight:bold; font-size:25px">Bos</a>
        <img src="<?php echo base_url() . 'assets/img/logoutt.jpg' ?>" data-toggle="modal" data-target="#exampleModal" width="30px" style="margin-left: 690px;">
    </nav>
    <div class="wrapper">
        <div class="container-fluid">
        <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item border-bottom">
                            <a class="nav-link active" href="#>" style="color: white;">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/homeuser')?>" style="color: white;">
                            <span data-feather="list"></span>
                            Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/report_form')?>" style="color: white;">
                            <span data-feather="list"></span>
                            Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/pu')?>" style="color: white;">
                            <span data-feather="list"></span>
                            Pengaduanku
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
                <div class="col">
                    
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2" style="text-align: center;">Welcome to lapor Bos</h1>
                    </div>
                    
                    <div class="content-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pVJlNv0Zgd0" width="300" controls></iframe>
                    </div>
                    <br>
                    <p>
                        Tonton Video Menarik di atas dan Jika ingin menyampaikan suatu aspirasi silahkan pilih menu Pengaduan
                    </p>
                </div>

                <!-- Modal Logout -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to logout?
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url('Dashboard/homeuser')?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <a href="<?php echo site_url('Dashboard/login')?>"><button type="button" class="btn btn-primary">Yes</button>
                    </div>
                    </div>
                </div>
                </div>

</body>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>">
</script>

</html>