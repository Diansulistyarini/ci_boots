<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <title>Document</title>
</head>



<body>

    <div class="card-header">
        <h3>Pelaporan Pengaduan Masyarakat</h3>
    </div>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:900px; margin: auto;">
        <a class="navbar-brand" href="#" style="font-weight: bold; font-size:25px">Lapor</a>
        <a class="navbar-brand" href="#" style="color: red; margin-left:-8px; font-weight:bold; font-size:25px">Bos</a>
    </nav> -->
    <h1 style="text-align: center;">Data Officer</h1>
    <?php echo "Tanggal : ".date('d-m-Y'); ?>

    <hr>

<div class="container">
    <table class="table" style="text-align:center;">
        <thead class="">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Level</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($petugas as $datas){
        ?>  
            <tr>
                <td><?php echo $datas->id_petugas; ?></td>
                <td><?php echo $datas->nama_petugas; ?></td>
                <td><?php echo $datas->username; ?></td> 
                <td><?php echo $datas->level; ?></td> 
            </tr> 
        <?php   
            }       
        ?>
        
        </tbody>
        </table>
</div>
</body>
</html>