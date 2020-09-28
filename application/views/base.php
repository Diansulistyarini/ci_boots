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
            background-color: #6A94FF;
        }

        .wrapper {
            width: 900px;
            margin-left: 233px;
            padding: 15px;
            background-color: #6A94FF;
        }

        .tombol_login {
            background-color: white;
            border-color: #8195FF;
            text-decoration-color: black;
            border-radius: 5px;
            width: 90px;
            font-family: sans-serif;
            font-weight: bold;
            text-shadow: #8195FF;
            margin-left: 120px;
            margin-bottom: 6px;
        }

        #card-content {
            margin-left: 248px;
            margin-top: -15px;
        }

        .klik {
            background-color: #8195FF;
            border-color: #8195FF;
            text-decoration-color: black;
            border-radius: 5px;
            width: 120px;
            font-family: sans-serif;
            font-weight: bold;
            text-shadow: #8195FF;

            margin-bottom: 6px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="margin-top:-13px;">
            <a class="navbar-brand" href="#" style="font-weight: bold; font-size:25px">Lapor</a>
            <a class="navbar-brand" href="#" style="color: red; margin-left:-8px; font-weight:bold; font-size:25px">Bos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="margin-left: 468px; color:black; font-size:18px">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Dashboard/login'); ?>" style="margin-left: 8px; color:black; font-size:18px;">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: black; font-size:18px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign Up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo site_url('Dashboard/register'); ?>">Masyarakat</a>
                    <a class="dropdown-item" href="<?php echo site_url('Dashboard/regmin'); ?>">Admin/Petugas</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="card-content">
        <img src=<?php echo base_url() . 'assets/img/ban.jpg' ?> width="870px" height="560px">
    </div>

</body>

<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>">
</script>

</html>