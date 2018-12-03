<?php 
    session_start();
    require_once('../connectdb.php');
    if($_SESSION['login_status'] != "admin"){
    header("Location: logout.php");
}
    $session_login_id = $_SESSION['login_id'];
    $qry_user = "select * from tb_login where login_id='$session_login_id'";
    $qry_admin = "select * from tb_admin where s_id='1'";
    $result_admin = mysqli_query($dbcon,$qry_admin);
    $result_user = mysqli_query($dbcon,$qry_user);
    if($result_admin){
        $row_admin = mysqli_fetch_array($result_admin,MYSQLI_ASSOC);
        mysqli_free_result($result_admin);
    }
    if($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $s_login_username = $row_user['login_username'];
        $s_login_name = $row_user['login_name'];
        mysqli_free_result($result_user);
    }
    mysqli_close($dbcon);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Admin | Server Manage</title>
    <style>
        table,th,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
        table{
            margin-top: 100px;
        }
        #s_st{
            color:red;
        }
    </style>
</head>
<body>
<ul>
  <li  style="margin-top:10px;margin-left:15px;"><?php echo "ยินดีต้อนรับ"." ".$s_login_name?></li>
  <li style="float:right;"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
<form action="server_process.php" method="POST">
<center>
<h1>Server Status</h1>
<input type="radio" id="s_st" name="s_st" value="1" <?=($row_user['s_st']=='1')?"checked":""?>>on</input>
<input type="radio"  name="s_st" value="0" <?=($row_user['s_st']=='0')?"checked":""?>>off</input>
<br>
<br>
<input type="hidden" name="s_id" value="<?php echo $row_admin['s_id'];?>">
<input name="submit" style="cursor: pointer;width: 200px;height: 50px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 20px;font-family: 'Kanit', sans-serif;" type="submit" value="Submit">
</form>
<br>
<br>
<a href="mainadmin.php">กลับสู่หน้าหลัก</a></li>
</center>
</body>
</html>