<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo base_url().'assets/css/bootsrap.min.css' ?>" rel="stylesheet">
    <title><?php echo $title?></title>
    <style>
        body{
            background-color: #6A94FF;
        }

        .card{
            width: 800px;
            height: 400px;
            border-radius: 15px;
	        background: white;
	        margin: 100px auto;
            margin-top: 110px;
	        padding: 30px 20px;
            /* box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65); */
        }

        #card-content{
            margin-top: 59px;
            margin-left: 75px;
            
        }

        .logo{
            margin-top: -475px;
            margin-left: -60px
        }

        .login{
            margin-top: -220px;
            margin-left: 380px;
        }

        .text_login{
            margin-top: -250px;
            margin-left: 60px;
        }

        .form_login{
            border-radius: 5px;
            border-color: #e3e6e4;
            margin-left: 60px;
            width: 260px;
            color: black;
        }

        .tombol_login{
            background-color: white;
            border-color: #8195FF;
            text-decoration-color: black;
            border-radius: 5px;
            width: 90px;
            font-family:sans-serif;
            font-weight: bold;
            text-shadow: #8195FF;
            margin-left: 120px;
            margin-bottom: 6px;
        }

        #t1{
            margin-left: 60px;
        }

        .sign{
            margin-left: 60%;
            margin-top: -40px
            
        }
    </style>
</head>
<body>
    
    <div class="card">
        <div id="card-content">
            <img src=<?php echo base_url().'assets/img/lock.png'?> width="220px">    
            <a href="<?php echo site_url('Dashboard/home'); ?>"><img src=<?php echo base_url().'assets/img/logoo.jpg'?> width="200px" class="logo"></a>
        </div>

       
        
		<form method="post" action="<?php echo site_url('Dashboard/action_login') ?>" class="login" >
            <div style="width: 0px; height: 250px; border: 1px #000 solid;"></div>
            <h2 class="text_login">Login</h2>
            <br>
			<input type="text" name="user" class="form_login" placeholder="     Email or Username...">
            <br>
            <br>
			<input type="password" name="pass" class="form_login" placeholder="     Password...">
            <br>
            <p style="text-align: right; margin-right: 57px;margin-top: 5px;">Forgot Password?</p>
            <input type="submit" class="tombol_login" value="LOGIN">
                
            <p id="t1">Don't have an account?</p>
            <div class="sign">
                <a href="<?php echo site_url('Dashboard/register'); ?>">Sign Up</a>
            </div>
            
			</form>
		
	</div>

</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</html>