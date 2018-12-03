<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        username : <input type="txt" name="username"/>
        password : <input type="txt" name="password"/>  
        <button name="submit" >Save</button>
    </form>
</body>
</html>
<?php
    require 'connectdb.php';
    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    $salt = 'ncneowkcw-wckopwcm21ie1i01302';
    $hash_login_password = hash_hmac('sha256',$login_password,$salt);

    $query = "insert into tb_login (login_username,login_password) values('$login_username','$hash_login_password')";

    $result = mysqli_query($dbcon,$query);
    if($result){
        header("Location: register.php");
    }
    else{
        echo "Error";
    }
    mysql_close();
?>