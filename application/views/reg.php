<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo base_url() . 'assets/css/bootsrap.min.css' ?>" rel="stylesheet">
    <title><?php echo $title ?></title>
    <style>
        body {
            background-color: #6A94FF;
        }

        .card {
            width: 800px;
            height: 400px;
            border-radius: 15px;
            background: white;
            margin: 100px auto;
            margin-top: 90px;
            padding: 30px 20px;
            /* box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65); */
        }

        #card-content {
            margin-top: 59px;
            margin-left: 75px;

        }

        .logo {
            margin-top: -475px;
            margin-left: -60px
        }

        .reg {
            margin-top: -250px;
            margin-left: 380px;
        }

        .text_login {
            margin-top: -276px;
            margin-left: 60px;
        }

        .form_login {
            border-radius: 5px;
            border-color: #e3e6e4;
            margin-left: 60px;
            width: 230px;
            color: black;
            margin-top: 10px;

        }

        .tombol_reg {
            background-color: white;
            border-color: #8195FF;
            text-decoration-color: black;
            border-radius: 5px;
            width: 93Zpx;
            font-family: sans-serif;
            font-weight: bold;
            text-shadow: #8195FF;
            margin-left: 120px;
            margin-top: 15px;
        }

        .log {
            margin-left: 66%;
            margin-top: -39px;
        }
    </style>
</head>

<body>

    <div class="card">
        <div id="card-content">
            <img src=<?php echo base_url() . 'assets/img/reg.png' ?> width="220px">
            <img src=<?php echo base_url() . 'assets/img/logoo.jpg' ?> width="200px" class="logo">
        </div>

        <form method="post" class="reg" action="<?php echo site_url('Dashboard/simpan_data') ?>">
            <div style="width: 0px; height: 280px; border: 1px #000 solid; margin-top: 10px;"></div>
            <h2 class="text_login">SIGN UP</h2>
            <input type="text" name="namas" class="form_login" placeholder="     Nama...">
            <br>
            <input type="text" name="usernames" class="form_login" placeholder="     Username...">
            <br>
            <input type="password" name="passwords" class="form_login" placeholder="     Password..">
            <br>
            <input type="password" name="password" class="form_login" placeholder="     Konfirmasi Password..">
            <input type="submit" class="tombol_reg" value="SIGN UP">
            <p style="margin-left: 59%; margin-top: -30px;">or</p>
            <div class="log">
                <a href="<?php echo site_url('Dashboard/login'); ?>">Login</a>
            </div>
        </form>
    </div>

    <div class="container">
    <table class="table table-bordered table-secondary" style="text-align: center;">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>

            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($c_masyarakat> 0)
            {
                foreach($masyarakat as $datas)
                {
            ?>
            <tr>
            <td><?php echo $datas->id_user; ?></td>
            <td><?php echo $datas->nama; ?></td>
            <td><?php echo $datas->username; ?></td>
            <td>
                <div class="col-12">
                <?php echo anchor('Dashboard/edit/'.$datas->id_user, '<button class="btn btn-success btn-sm edit_data" style="width:30%; margin:auto;">Edit</button>'); ?>
                </div>
                <div class="col-12 mt-2">
                    <?php echo anchor('Dashboard/hapus/'.$datas->id_user, '<button class="btn btn-danger btn-sm hapus_data" style="width:30%; margin:auto;">Delete</button>'); ?>
                </div>
            </td>
            </tr>
            <?php }
            }
            else{
                ?>
                <tr>
                    <td colspan="8"><center> Data Kosong! </center></td>
                </tr>
                <?php
            }
                ?>
        </tbody>
    </table>
    </div>

</body>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>

</html>