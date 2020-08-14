<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootsrap.min.css') ?>">
    <style>
        body {
            background-color: #6A94FF;
        }

        .wrapper {
            width: 900px;
            height: 625px;
            margin: auto;
            padding: 15px;
            background-color: #ededed;
        }

        #card-content {
            margin-left: 219px;
            margin-top: 10px;
            /* width: 650px; */
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:900px; margin-left:-15px; margin-top: -15px">
            <a class="navbar-brand" href="#" style="font-weight: bold; font-size:25px">Lapor</a>
            <a class="navbar-brand" href="#" style="color: red; margin-left:-8px; font-weight:bold; font-size:25px">Bos</a>
            <a href="<?php echo site_url('Dashboard/home'); ?>"><img src="<?php echo base_url() . 'assets/img/logoutt.jpg' ?>" width="30px" style="margin-left: 690px;"></a>
        </nav>

        <div id="card-content">
            <center>
                <h3>Edit Data</h3>
            </center>
            <?php foreach ($masyarakat as $u) { ?>
                <form action="<?php echo base_url() . 'Dashboard/update'; ?>" method="post">
                    <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                    <table style="margin:20px auto;">
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama" value="<?php echo $u->nama ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Simpan"></td>
                        </tr>
                    </table>
                </form>
            <?php } ?>
        </div>
    </div>
</body>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>">
</script>

</html>