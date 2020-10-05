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

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <!-- <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json"> -->
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <!--  -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--  -->

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
    <link href="<?php echo base_url('assets/tampilan.css') ?>" rel="stylesheet">

    <title<?php echo $title; ?></title> </head> <body>
        <!-- navbar -->
        <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow">
            <!-- <a class="navbar-brand bg-light col-md-3 col-lg-2 mr-0 px-3" href="#"> -->
            <p style="color: black; font-weight: bold; font-size:25px; margin-left:25px;margin-top:5px; background-color:white">Lapor</p>
            <p style="color: red; margin-left:15px;margin-top:5px;font-weight:bold;font-size:25px;background-color:white">Bos</p>
            <!-- </a> -->
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-light w-100" type="text" style="font-size: large; margin-left: 80px;background-color:white;" value="<?php echo $this->session->userdata('nama_petugas') ?> | <?php echo $this->session->userdata('level') ?>" disabled aria-label="Search">
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
                                <a class="nav-link active" href="<?php echo site_url('Dashboard/admin') ?>">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span style="color: white;">Pengaduan</span>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('Dashboard/home_admin') ?>">
                                    <span data-feather="list"></span>
                                    baru
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('Dashboard/home_admin') ?>">
                                    <span data-feather="clipboard"></span>
                                    proses
                                </a>
                            </li>
                            <li class="nav-item border-bottom">
                                <a class="nav-link" href="<?php echo site_url('Dashboard/home_admin') ?>">
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
                                <a class="nav-link" href="<?php echo site_url('Dashboard/data_user') ?>">
                                    <span data-feather="file-text"></span>
                                    Data User
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('Dashboard/officer') ?>">
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
                        <h3 style="text-align: left; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Data User</h3>
                        
                        <a href="<?php echo site_url('Dashboard/cetak_pdf'); ?>"><img src="<?php echo base_url() . 'assets/img/pdf-icon.png' ?>" width="50px" style="margin-left: 910px;margin-top: -50px;"></a>
                        <a href="<?php echo site_url('Dashboard/cetak_xls'); ?>"><img src="<?php echo base_url() . 'assets/img/excel.png' ?>" width="52px" style="margin-left: 980px;margin-top: -90px;"></a>

                    </div>
                    <a href="#addModal" data-toggle="modal" class="btn btn-sm btn-success btn-sm addbtn"><i class="fas fa-plus fa-sm text-white"></i>Add Officer</a>

                    <!-- tampil data petugas -->
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" cellspacing="0" width="100%" id="dataPetugas">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Username</th>
                                    <th>level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="data_petugas">
                            </tbody>
                        </table>
                    </div>
                    </main>
                </div>
            </div>
            <!-- end kontainer -->

            <!-- Add Data Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="inputpetugas" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Petugas</label>
                                    <input type="text" name="nmptgs" id="nmptgs" class="form-control" placeholder="Masukkan Nama petugas">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="usrnm" id="usrnm" class="form-control" placeholder="Masukan Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pwptgs" id="pwptgs" class="form-control" placeholder="Masukan Password">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="custom-select drpdw" name="rlptgs" id="rlptgs">
                                        <option selected>Choose..</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="hidden" name="action" class="btn btn-success" value="Add" />
                                <input type="submit" value="Add" name="action" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end add data modal -->

            <!-- edit data modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="editpetugas" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Petugas</label>
                                    <input type="text" name="nmptgs" id="namapetugas" class="form-control" placeholder="Masukkan Nama petugas">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="usrnm" id="usernamepetugas" class="form-control" placeholder="masukan username petugas">
                                </div>
                                <div class="form-group">
                                    <label>role</label>
                                    <select class="custom-select drpdw" name="rlptgs" id="rolepetugas">
                                        <option selected>Choose...</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="hidden" name="idptgs" id="idpetugas" class="btn btn-success" value="" />
                                <input type="hidden" name="action" class="btn btn-success" value="edit" />
                                <input type="submit" value="edit" name="action" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end edit data modal -->


            <!-- Add Modal -->
            <!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="formtambah" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Petugas</label>
                                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Masukkan Nama Petugas">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="custom-select" name="level" id="level">
                                        <option selected>Choose..</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- end add modal -->

            <!-- Edit modal -->
            <!-- <form id="editOfcform" method="post">
                <div class="modal fade" id="editOfcModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Data Officer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Petugas</label>
                                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="custom-select" name="level" id="level" required>
                                        <option selected>Choose..</option>
                                        <option value="makanan">Admin</option>
                                        <option value="minuman">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id_petugas" id="id_petugas" class="form-control">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form> -->
            <!-- end edit modal -->

            <!-- Delete -->
            <!-- <form id="deleteUserForm" method="post">
                <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure to delete this record?</p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="deleteUserId" id="deleteUserId" class="form-control">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form> -->

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
                            <a href="<?php echo site_url('Dashboard/data_ofc') ?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <a href="<?php echo site_url('Dashboard/login') ?>"><button type="button" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script>
                // window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
            </script>
            <!-- <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
            <script src="<?php echo base_url('assets/tampilan.js') ?>"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
            <!-- <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script> -->
            <!-- Optional JavaScript -->

            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url('assets/vendor/vendor/jquery/jquery.js') ?>"></script>
            <script src="<?php echo base_url('assets/vendor/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url('assets/vendor/vendor/jquery-easing/jquery.easing.js') ?>"></script>

            <!-- DataTable -->
            <script src="<?php echo base_url('assets/vendor/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/vendor/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

            <!-- Swall Alert -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>

            <!-- DataTable -->
            <!-- <script src="<?php echo base_url('assets/vendor/vendor/jquery/jquery.min.js') ?>"></script> -->
            <!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->

            <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/847ba36c18.js" crossorigin="anonymous"></script>

            <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>

            </body>

            <script>
                $(document).ready(function() {
                    // ini adalah fungsi untuk memunculkan modal
                    $('.addbtn').on('click', function() {

                        $('#addModal').modal('show');

                    });
                    // ini adalah fungsi untuk memunculkan data di datatable
                    var data_petugas = $('#dataPetugas').DataTable({
                        "processing": true,
                        "ajax": "<?= base_url("Dashboard/data_petugas") ?>",
                        "data": [],
                    });

                    // ADD DATA
                    $(document).on('submit', '#inputpetugas', function(event) {
                        event.preventDefault();
                        var petugas_nama = $('#nmptgs').val();
                        var petugas_username = $('#usrnm').val();
                        var petugas_password = $('#pwptgs').val();
                        var petugas_level = $('#rlptgs').val();

                        if (petugas_nama != '' && petugas_username != '' && petugas_password != '' && petugas_level != '') {
                            $.ajax({
                                type: "POST",
                                url: "<?= base_url("Dashboard/insert_petugas") ?>",
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
                                        title: 'Tambah Data Officer',
                                        text: 'Anda Berhasil Menambah Data Office'
                                    })
                                    $('#inputpetugas')[0].reset();
                                    $('#addModal').modal('hide');
                                    data_petugas.ajax.reload(null, false);
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

                    // EDIT DATA
                    // Get id petugas
                    $(document).on('click', '.editbutton', function(event) {
                        console.log("masuk halaman edit")
                        var div = $(event.relatedTarget)
                        var id_petugas = $(this).attr("id");
                        $.ajax({
                            url: "get_petugas",
                            type: "post",
                            data: {
                                id_petugas: id_petugas
                            },
                            dataType: "JSON",
                            success: function(data) {
                                $('#editModal').modal('show');
                                $('#namapetugas').val(data.nama_petugas);
                                $('#usernamepetugas').val(data.username);
                                // $('#passwordpetugas').val(data.password);
                                // $('#telppetugas').val(data.telp);
                                $('#rolepetugas').val(data.level);
                                $('#idpetugas').val(id_petugas);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                console.log(xhr.responseText);
                            }
                        });
                    });

                    // Edit petugas
                    $(document).on('submit', '#editpetugas', function(event) {
                        event.preventDefault();
                        var petugas_nama = $('#namapetugas').val();
                        var petugas_username = $('#usernamepetugas').val();
                        // var petugas_password = $('#passwordpetugas').val();
                        // var petugas_telpon = $('#telppetugas').val();
                        var petugas_level = $('#rolepetugas').val();

                        if (petugas_nama != '' && petugas_username != '' && petugas_level != '') {
                            $.ajax({
                                type: "post",
                                url: "<?= base_url("Dashboard/edit_petugas") ?>",
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
                                        title: 'Edit Data Petugas',
                                        text: 'Anda Berhasil Mengedit Data Petugas'
                                    })
                                    $('#editpetugas')[0].reset();
                                    $('#editModal').modal('hide');
                                    data_petugas.ajax.reload(null, false);
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    console.log(xhr.responseText);
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Bother fields are required!',
                            });
                        }
                    });

                    // delete petugas
                    $(document).on('click', '.deletebtn', function() {
                        var id_petugas = $(this).attr("id");
                        swal({
                            title: 'Konfirmasi',
                            text: "Apakah anda yakin ingin menghapus ",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Hapus',
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            cancelButtonText: 'Tidak',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.value) {
                                $.ajax({
                                    url: "<?= base_url('Dashboard/hapus_petugas') ?>",
                                    type: "post",
                                    beforeSend: function() {
                                        swal({
                                            title: 'Menunggu',
                                            html: 'Memproses data',
                                            onOpen: () => {
                                                swal.showLoading()
                                            }
                                        })
                                    },
                                    data: {
                                        id_petugas: id_petugas
                                    },
                                    success: function(data) {
                                        swal(
                                            'Hapus',
                                            'Berhasil Terhapus',
                                            'success'
                                        )
                                        data_petugas.ajax.reload(null, false)
                                    }
                                });
                            } else if (result.dismiss === swal.DismissReason.cancel) {
                                swal(
                                    'Batal',
                                    'Anda membatalkan penghapusan',
                                    'error'
                                )
                            };
                        });
                    });
                });
            </script>

</html>