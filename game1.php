<?php
    session_start();
    require_once('connectdb.php');
        if(($_SESSION['login_status']!= "user")){
        header("Location: logout.php");
    }
    require 'connectdb.php';
    $session_login_id = $_SESSION['login_id'];
    $qry_user = "select * from tb_login where login_id='$session_login_id'";
    $result_user = mysqli_query($dbcon,$qry_user);
    if($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $s_login_username = $row_user['login_username'];
        $s_login_name = $row_user['login_name'];
        mysqli_free_result($result_user);
    }
    mysqli_close($dbcon );
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="style_game.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game 1</title>
</head>
<body>
<ul>
  <li style="margin-top:10px;margin-left:15px;"><?php echo "ยินดีต้อนรับ"." ".$s_login_name;?></li>
  <li style="float:right;"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
<center><form action="upload1.php" style="margin-bottom: 200px;" class="frm" method="post" enctype="multipart/form-data">
    Select File to upload Game 1    :
    <input type="file"  accept=".txt" name="game1" id="game1" required><br><br> 
    <input type="submit" id="submit" value="Upload File" name="submit">
</form>
<button  class="backbtn" onclick="location.href='main.php'">กลับสู่หน้าหลัก</button></center>
<center><p style="color: red;">**หมายเหตุ :  1) ไฟล์ที่จะอัพโหลดจะต้องเป็นไฟล์ .txt เท่านั้น <br> 2) ห้ามตั้งชื่อภาษาไทย <br> 3) ตัวอย่างการตั้งชื่อ script1 (หลัง script ให้ ตามด้วยเลขทีมที่ Random ได้) <br>4) อัพโหลดไฟล์ห้ามใช้ตัวพิมพ์ใหญ่<br> </p>
<center><footer><p>&copy; Copyright <?php echo date("Y");?> | <a href="https://facebook.com/mjamesthanawat" >Thanawat Gulati</a> All right reserved</p></footer></center>
</body>
</html>
