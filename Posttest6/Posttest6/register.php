<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="container">
        <h1>SIGN UP to GAMARA</h1>
        <p>Sign up secara gratis untuk mulai mendengarkan :)</p>
        <form action="profile.php" method="post">
            <label for="email"><strong>Email </strong> </label> <br>
            <input type="email" name="email" id="email" placeholder="Masukkan Email"> <br>
            <label for="noTelp"><strong>Nomor Telepon </strong> </label> <br>
            <input type="tel" name="noTelp" id="noTelp" placeholder="Masukkan no telp" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}"> <br>
            <label for="username"><strong>Username</strong> </label> <br>
            <input type="text" name="regisUsername" id="username" placeholder="Masukkan username"> <br>
            <label for="password"><strong>Password</strong></label> <br>
            <input type="password" name="regisPassword" id="password" placeholder="Masukkan Password"> <br>
            <label for="password"><strong>Konfirmasi Password</strong></label> <br>
            <input type="password" name="konfirPass" id="konfirPass" placeholder="Masukkan Konfir Password"> <br><br>
            <label for="birthday"><strong>Tanggal Lahir</strong></label>
            <input type="date" id="birthday" name="birthday"><br><br>
            <p><strong>Gender :</strong> </p><br>
            <label for="gender">Laki-laki</label>
            <input type="radio" name="gender" id="gender" value="Laki-laki"/><br>
            <label for="gender">Perempuan</label>
            <input type="radio" name="gender" id="gender" value="Perempuan"/> <br><br>
            <input type="submit" name="regisSubmit" value="submit">
        </form>
    </div>
</body>
</html>