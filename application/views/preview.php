<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <title>Document</title>
</head>

<style>
    body {
        /* background-image:url(assets/gambarDesain/439.jpg); */
        overflow-x: hidden;
        margin-bottom: -50px;
        height: 890px;
        background-size: cover;
    }

    .contain form input {
        margin-top: 20px;
        width: 40%;
        margin: 2% auto;
        border-radius: 20px;
    }

    .contain {
        margin-top: 10%;
    }

    h5 {
        color: black;
    }

    .tulis {
        text-align: center;
    }

    input {
        text-align: center;
    }

    .row {
        margin-top: 6px;
    }

    img {
        margin-left: 50px;
        width: 10%;
    }

    h2 {
        margin-left: 28%;
    }
</style>

<body>

    <div class="card-header">
        <h3>Pelaporan Pengaduan Masyarakat</h3>
    </div>
    <h1 style="text-align: center;">Data User</h1>
    <?php echo "Tanggal : " . date('d-m-Y'); ?>

    <hr>

    <div class="container">
        <table class="table" style="text-align:center;">
            <thead class="">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($c_masyarakat > 0) {
                    foreach ($masyarakat as $datas) {
                ?>
                        <tr>
                            <td><?php echo $datas->id_user; ?></td>
                            <td><?php echo $datas->nama; ?></td>
                            <td><?php echo $datas->username; ?></td>
                        </tr>
                    <?php   }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">
                            <center> Data Kosong </center>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>