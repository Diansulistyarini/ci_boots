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
                            '<a href="javascript:void(0);" class="btn btn-primary btn-icon-split editbtn" data-id_petugas="'+data[i].id_petugas+'" style="padding-right: 6%;"><span class="icon text-white"><i class="fas fa-edit"></i></span></a>' + ' ' +
                            '<button type="button" class="btn btn-danger btn-icon-split delbtn" data-toogle="modal" data-id="' + data[i].id + '" style="padding-right: 6%;"><span class="icon text-white"><i class="fas fa-trash-alt"></i></span></button>' +
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
        $('#formtambah').submit('click', function () {
            var nama_petugas = $('#nama_petugas').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var level = $('#level').val();
            $.ajax({
                type: "POST",
                url: "simpanData",
                dataType: "JSON",
                data: { nama_petugas: nama_petugas, username: username, password: password, level: level },
                success: function (data) {
                $('#nama_petugas').val("");
                $('#username').val("");
                $('#password').val("");
                $('#level').val("");
                $('#addModal').modal('hide');
                listOfc();
            }
        });
        return false;
        });

        $('#listOfc').on('click', '.editbtn', function () {
        $('#editOfcModal').modal('show');
        $("#id_petugas").val($(this).data('id_petugas'));
        $("#nama_petugas").val($(this).data('nama_petugas'));
        $("#username").val($(this).data('username'));
        $("#password").val($(this).data('password'));
        $("#level").val($(this).data('level'));
    });
    // save edit record
    $('#editOfcform').on('submit', function () {
        var id_petugas = $('#id_petugas').val();
        var nama_petugas = $('#nama_petugas').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var level = $('#level').val();

        $.ajax({
        type: "POST",
        url: "user/update",
        dataType: "JSON",
        data: { id_petugas: id_petugas, nama_petugas: nama_petugas, username: username, password: password, level: levell },
        success: function (data) {
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

    $('#listOfc').on('click', '.delbtn', function () {
    var UserId = $(this).data('id');
    $('#deleteUserModal').modal('show');
    $('#deleteUserId').val(UserId);
    });
    // delete user record
    $('#deleteUserForm').on('submit', function () {
        var UserId = $('#deleteUserId').val();
        $.ajax({
        type: "POST",
        url: "user/hapus",
        dataType: "JSON",
        data: { id: UserId },
        success: function (data) {
        $("#" + UserId).remove();
        $('#deleteUserId').val("");
        $('#deleteUserModal').modal('hide');
        listOfc();
        }
    });
    return false;
    });
});

</script>