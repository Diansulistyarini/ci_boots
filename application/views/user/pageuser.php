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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.css">
    <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

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
            overflow-y: scroll;
        }

        .card-header {
            background-color: #c9c7c7;
            margin: auto;
            width: 900px
            
        }

        #card-content {
            margin-left: 140px;
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

        /* label,
        h1 {
            text-transform: uppercase;
            font-weight: bold;
        } */

        h2 {
            text-align: center;
        }

        form-group-row {
            margin-left: 5px;
        }

        .col {
            /* background-color: #dedede; */
            margin-top: -190px;
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
                <div id="card-content">

                    <div class="container">
                        <div class="row">  
                            <div class="col">
                                <!-- tampil data pengaduan -->
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" cellspacing="0" width="100%" id="dataPengaduan">
                                        <thead class="bg-secondary text-white">
                                            <h2>Data Pengaduan</h2>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Isi Pengaduan</th>
                                                <th>Bukti Foto</th>
                                                <th>Status</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody id="data_pengaduan">
                                        </tbody>
                                    </table>
                                </div>
                            <!-- </div> -->
                        <!-- </div> -->
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
                            <a href="<?php echo site_url('Dashboard/home')?>"><button type="button" class="btn btn-primary">Yes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                  
        <!-- Place your kit's code here -->
        <script src="https://kit.fontawesome.com/847ba36c18.js" crossorigin="anonymous"></script>

        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>

        <script>
                $(document).ready(function() {
                    // ini adalah fungsi untuk memunculkan modal
                    // $('.addbtn').on('click', function() {

                    //     $('#addModal').modal('show');

                    // });
                    // ini adalah fungsi untuk memunculkan data di datatable
                    var data_petugas = $('#dataPengaduan').DataTable({
                        "processing": true,
                        "ajax": "<?= base_url("Dashboard/data_pengaduan") ?>",
                        "data": [],
                    });

                    
                });
            </script>

</body>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>">
</script>

</html>