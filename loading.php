<?php
 session_start();
 require_once('connectdb.php');
 if(($_SESSION['login_status'] != "user")&&($_SESSION['login_status'] != "admin")){
 header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading</title>
</head>
<style>
</style>
<body>
<div class="contain">
   <center> <img src="img/jload.gif" style="width: 500px;"/></center>
   <?php header("Refresh:1.5; url=main.php");?>
</div>
</body>
</html>