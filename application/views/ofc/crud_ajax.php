<script>
    $(document).ready(function() {
        // add btn modal
        $('.addbtn').on('click', function() {
            $('#addModal').modal('show');
        });

        // ini adalah fungsi untuk memunculkan data di datatable
        listOfc();
        $('#dataPetugas').dataTable({
            "bPaginate": false,
            "bInfo": false,
            "bFilter": false,
            "bLengthChange": false,
            "pageLength": 5
        });

        function listOfc() {
            $.ajax({
                type: 'ajax',
                url: 'tampilkanData',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr id_petugas="' + data[i].id_petugas + '">' +
                            '<td>' + no++ + '</td>' +
                            '<td>' + data[i].nama_petugas + '</td>' +
                            '<td>' + data[i].username + '</td>' +
                            '<td>' + data[i].level + '</td>' +
                            '<td>' +
                            '<a href="javascript:void(0);" class="btn btn-primary btn-icon-split editbtn" data-target="#editOfcModal" data-id_petugas="' + data[i].id_petugas + '" <span class="icon text-white"><i class="fas fa-edit"></i></span></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-icon-split deleteRecord" data-id_petugas="' + data[i].id_petugas + '" ><span class="icon text-white"><i class="fas fa-trash-alt"></i></span></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#data_petugas').html(html);
                }
            });
        }
        // var data_petugas = $('#dataPetugas').DataTable({
        //     "processing": true,
        //     "ajax": "<?= base_url("Dashboard/data_ofc") ?>",
        //     "order": [],
        // });

        // Tambah Data
        // save new user record
        $('#formtambah').submit('click', function() {
            var nama_petugas = $('#nama_petugas').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var level = $('#level').val();
            $.ajax({
                type: "POST",
                url: "simpanData",
                dataType: "JSON",
                data: {
                    nama_petugas: nama_petugas,
                    username: username,
                    password: password,
                    level: level
                },
                success: function(data) {
                    $('#nama_petugas').val("");
                    $('#username').val("");
                    $('#password').val("");
                    $('#level').val("");
                    $('#addModal').modal('hide');
                    listOfc();

                    if (nama_petugas != '' && username != '' && password != '' && level != '') {
                        $.ajax({
                            type: "POST",
                            url: "simpanData",
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
                            dataType: "JSON",
                            data: {
                                nama_petugas: nama_petugas,
                                username: username,
                                password: password,
                                level: level
                            },
                            success: function() {
                                swal({
                                    type: 'success',
                                    title: 'Tambah Data',
                                    text: 'Anda Berhasil Menambah data petugas'
                                })
                                $('#formtambah')[0].reset();
                                $('#addModal').modal('hide');
                                data_petugas.ajax.reload(null, false);
                            },
                        });
                        return false;
                    }
                }
            });
        });
        //show edit modal form with user data
        $('#listOfc').on('click', '.editbtn', function() {
            $('#editOfcModal').modal('show');
            $("#id_petugas").val($(this).data('id_petugas'));
            $("#nama_petugas").val($(this).data('nama_petugas'));
            $("#username").val($(this).data('username'));
            $("#password").val($(this).data('password'));
            $("#level").val($(this).data('level'));
        });

        // save edit record
        $('#editOfcform').on('submit', function() {
            var id_petugas = $('#id_petugas').val();
            var nama_petugas = $('#nama_petugas').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var level = $('#level').val();

            $.ajax({
                type: "POST",
                url: "user/update",
                dataType: "JSON",
                data: {
                    id_petugas: id_petugas,
                    nama_petugas: nama_petugas,
                    username: username,
                    password: password,
                    level: level
                },
                success: function(data) {
                    $("#id_petugas").val("");
                    $('#nama_petugas').val("");
                    $('#username').val("");
                    $('#password').val("");
                    $('#level').val("");
                    listOfc();
                }
            });
            return false;
        });

         // show delete modal
    $('#listUser').on('click', '.deleteRecord', function () {
        var id_petugas = $(this).data('id_petugas');
        $('#deleteUserModal').modal('show');
        $('#deleteUserId').val(id_petugas);
    });

    // delete user record
    $('#deleteUserForm').on('submit', function () {
        var id_petugas = $('#deleteUserId').val();
        $.ajax({
        type: "POST",
        url: "hapusUser",
        dataType: "JSON",
        data: { id_petugas: id_petugas },
        
        success: function (data) {
            swal({
                    type: 'error',
                    title: 'Delete Petugas',
                    text: 'Anda Telah Menghapus 1 Petugas'
                })
            $("#" + id_petugas).remove();
            $('#deleteUserId').val("");
            $('#deleteUserModal').modal('hide');
            listUsers();
        }
    });
    return false;
    });


        // $('#listOfc').on('click', '.delbtn', function() {
        //     var UserId = $(this).data('id');
        //     $('#deleteUserModal').modal('show');
        //     $('#deleteUserId').val(UserId);
        // });
        
        // delete user record
        
        // $('#deleteUserForm').on('submit', function() {
        //     var UserId = $('#deleteUserId').val();
        //     $.ajax({
        //         type: "POST",
        //         url: "user/hapus",
        //         dataType: "JSON",
        //         data: {
        //             id: UserId
        //         },
        //         success: function(data) {
        //             $("#" + UserId).remove();
        //             $('#deleteUserId').val("");
        //             $('#deleteUserModal').modal('hide');
        //             listOfc();
        //         }
        //     });
        //     return false;
        // });
    });
</script>