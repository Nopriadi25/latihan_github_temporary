<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="formLogin.php" method="POST">
<label for="user">Username</label>
<input type="text" name="username" placeholder="input username" required>

<label for="pass">Password</label>
<input type="password" name="password" placeholder="input password" required>

<button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])){
    if (login($_POST['username'],$_POST['password'])){
        $_SESSION['username'] = $username;
        header('location: formPenjualan.php');
    }else{
        echo '<p> salah </p>';
    }
}

?>
</body>
</html>
