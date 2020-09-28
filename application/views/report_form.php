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
            /* background-color: #6A94FF; */
            background-image: url('http://localhost/ci_boots/assets/img/z_orig.png');
        }

        .wrapper {
            width: 900px;
            height: 625px;
            margin: auto;
            padding: 15px;
            /* background-color: #f2f2f2; */
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

        form-group-row {
            margin-left: 5px;
        }

        .col {
            background-color: #dedede;
            margin-top: -144px;
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
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item border-bottom">
                            <a class="nav-link active" href="#" style="color: white;">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/homeuser')?>" style="color: white;">
                            <span data-feather="list"></span>
                            Home
                            </a>
                        <a class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span style="color: white;margin-top: -25px;margin-bottom: 10px;">Pengaduan</span>
                        </a>
                    </ul>
                </div>
            </div>
                <div id="card-content">

                    <div class="container">
                            <form action="<?php echo site_url('Dashboard/save_report'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <h5>Silahkan Lapor!</h4>
                                            <hr>
                                            <div class="form-group row">
                                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input type="nama" name="nama" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $this->session->userdata('nama')?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tgl_Pengaduan</label>
                                                <div class="col-sm-5">
                                                    <input type="date" name="tgl" class="form-control form-control-sm" id="colFormLabelSm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Isi Pengaduan</label>
                                                <div class="col-sm-5">
                                                    <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea><br>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Bukti Foto/Video</label>
                                                <div class="col-sm-5">
                                                    <input type="file" name="files" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-5">
                                                    <button class="btn btn-secondary" type="submit" style="margin-left:470px ;">Submit form</button>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </form>
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