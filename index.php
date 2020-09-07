<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body>
    

<form action="" method="POST">

<input type="text" name="username" placeholder="Kullanıcı ad" required>
<input type="password" name="password" placeholder="**********" required><br>
<br>
<input type="submit" name="submit" value="Giriş Yap">
</form>


// Sorgulama Yapmak

<?php 
error_reporting();
if(@$_POST["submit"]){
    if(@$_POST["username"]== "erentasci" && @$_POST["password"]=="123456"){
        $_SESSION["kadi"] = $_POST["username"];
        header("Location: uye.php");
    }else{
        echo "Kullanıcı adı veya şifre yanlış";
    }
}


?>


</body>
</html>