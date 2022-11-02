
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style = "background-color: #828282;">
    <div class="container">
        <h1 style = "background-color: white;">Your Profile</h1> <br>
        <p>Profil berhasil dibuat</p> <br>

        <?php
        // echo ' <span style =" font-weight: bold;>Username </span> ';
        echo( "Username :");
        echo $_POST['regisUsername'];
        echo "<br />";
        echo( "Password :");
        echo $_POST['regisPassword'];
        echo "<br />";
        echo( "Konfir Password :");
        echo $_POST['konfirPass'];
        echo "<br />";
        echo( "Email :");
        echo $_POST['email'];
        echo "<br />";
        echo( "NoTelpon :");
        echo $_POST['noTelp'];
        echo "<br />";
        echo( "Tanggal Lahir :");
        echo $_POST['birthday'];
        echo "<br />";
        echo( "Gender :");
        echo $_POST['gender'];
        ?>

    </div>
</body>
</html>



<!-- <?php

?> -->