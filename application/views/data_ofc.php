<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tampilan.css') ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootsrap.min.css') ?>"> -->
        <!--  -->

        

        <!-- font awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!--  -->

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/tampilan.css')?>" rel="stylesheet">

        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow">
            <!-- <a class="navbar-brand bg-light col-md-3 col-lg-2 mr-0 px-3" href="#"> -->
            <p style="color: black; font-weight: bold; font-size:25px; margin-left:25px;margin-top:5px; background-color:white">Lapor</p>
            <p style="color: red; margin-left:15px;margin-top:5px;font-weight:bold;font-size:25px;background-color:white">Bos</p>
            <!-- </a> -->
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-light w-100" type="text" style="font-size: large; margin-left: 80px;background-color:white;" value="<?php echo $this->session->userdata('nama_petugas')?> | <?php echo $this->session->userdata('level')?>" disabled aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModal">Logout</button></a>
                </li>
            </ul>
        </nav>
        <!--  -->

        <div class="container-fluid">
            <!-- sidebar -->
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item border-bottom">
                            <a class="nav-link active" href="<?php echo site_url('Dashboard/admin')?>">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span style="color: white;">Pengaduan</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/home_admin')?>">
                            <span data-feather="list"></span>
                            baru
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/home_admin')?>">
                            <span data-feather="clipboard"></span>
                            proses
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a class="nav-link" href="<?php echo site_url('Dashboard/home_admin')?>">
                            <span data-feather="check"></span>
                            selesai
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved Data</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Dashboard/data_user')?>">
                        <span data-feather="file-text"></span>
                        Data User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Dashboard/data_ofc')?>">
                        <span data-feather="file-text"></span>
                        Data Officer
                        </a>
                    </li>

                    </ul>
                </div>
                </nav>
                <!--  -->


        <!-- tampil data user -->
        <div class="container" style="margin-left:230px;margin-top:0px">
        <div class="card-header" style="background-color: white;">
        <h3 style="text-align: left; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Data Officer</h3>
        <!-- <h4 style="font-size: 10px; margin-left: 850px;">Cetak Data</h4> -->
        <a href="<?php echo site_url('Dashboard/cetak_pdf'); ?>"><img src="<?php echo base_url() . 'assets/img/pdf-icon.png' ?>" width="50px" style="margin-left: 910px;margin-top: -50px;"></a>
        <a href="<?php echo site_url('Dashboard/cetak_xls'); ?>"><img src="<?php echo base_url() . 'assets/img/excel.png' ?>" width="52px" style="margin-left: 980px;margin-top: -90px;"></a>
        
        </div>  
        <div class="form-group text-left" style="margin-top:10px">
            <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary">Add Office</a>
        </div>
        <?=$this->session->flashdata('notif')?>
        <table class="table table-bordered table-secondary" style="text-align: center;" id="dataOfc">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tbody>
            <?php
                foreach($petugas as $datas)
                {
            ?>
            <tr>
            <td><?php echo $datas->id_petugas; ?></td>
            <td><?php echo $datas->nama_petugas; ?></td>
            <td><?php echo $datas->username; ?></td>
            <td><?php echo $datas->level; ?></td>

            <td>
                <div class="col-12">
                <?php echo anchor('Dashboard/edit_ofc/'.$datas->id_petugas, '<button class="btn btn-success btn-sm edit_dataofc" style="width:35%; margin:auto;">Edit</button>'); ?>
                </div>
                <div class="col-12 mt-2">
                    <?php echo anchor('Dashboard/hapus_ofc/'.$datas->id_petugas, '<button class="btn btn-danger btn-sm hapus_dataofc" style="width:35%; margin:auto;">Delete</button>'); ?>
                </div>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
     <!-- Modal Tambah -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
             </div>
             <form class="form-horizontal" action="<?php echo base_url('Dashboard/add_ofc')?>" method="post" enctype="multipart/form-data" role="form" id="formtambah">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="nama" id="name" placeholder="Nama">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Username</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Password</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label" id="level">Level</label>
                          <div class="col-lg-10">
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Admin</option>
                                <option>Petugas</option>
                            </select>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-info" type="submit"> Save&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Cancel</button>
                  </div>
                 </form>
             </div>
         </div>
     </div>
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
            <a href="<?php echo site_url('Dashboard/data_ofc')?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <a href="<?php echo site_url('Dashboard/login')?>"><button type="button" class="btn btn-primary">Yes</button>
        </div>
        </div>
    </div>
    </div>
 
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
        <!-- <script src="<?php echo base_url('assets/tampilan.js')?>"></script> -->
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
        <!-- Swall Alert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>
        <!-- DataTable -->
        <script src="<?php echo base_url('assets/vendor/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

        <!-- DataTable -->
        <script src="<?php echo base_url('assets/vendor/vendor/jquery/jquery.min.js') ?>"></script>

        <!-- <script>
        $(document).ready(function() {
            // add btn modal

            // ini adalah fungsi untuk memunculkan data di datatable
            var dataOfc = $('#dataOfc').DataTable({
            "processing": true,
            "ajax": "<?= base_url("Dashboarad/data_ofc") ?>",
            "order": [],
            });

            // add function
            // Tambah barang
            $(document).on('submit', '#formtambah', function(event) {
            event.preventDefault();
            var nama = $('.name').val();
            var user = $('.username').val();
            var pw = $('.password').val();
            
            if (nama != '' && user != '' && pw != '') {
                $.ajax({
                type: "post",
                url: "<?= base_url("Dashboarad/add_ofc") ?>",
                beforeSend: function() {
                    swal({
                    type: 'loading',
                    title: 'Menunggu',
                    html: 'Memproses data',
                    onOpen: () => {
                        swal.showLoading()
                    }
                    })
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function() {
                    swal({
                    type: 'success',
                    title: 'Tambah Barang',
                    text: 'Anda Berhasil Menambah Barang'
                    })
                    $('#formtambah')[0].reset();
                    $('#addModal').modal('hide');
                    datamakanan.ajax.reload(null, false);
                },
                });
            } else {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
                });
            }
            });
        });
        </script> -->
    </body>
</html>