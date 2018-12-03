<?php
require 'connectdb.php';
header('Content-Type: text/html; charset=utf-8');
$login_username = mysqli_real_escape_string($dbcon,$_POST['username']);
$login_password = mysqli_real_escape_string($dbcon,$_POST['password']);

$sql = "select * from tb_login where login_username=? and login_password=?";
$stmt = mysqli_prepare($dbcon,$sql);

$sql_a = "select * from tb_admin";
$stmt_a = mysqli_prepare($dbcon,$sql_a);

mysqli_stmt_bind_param($stmt,"ss",$login_username,$login_password);
mysqli_execute($stmt);
$result_user = mysqli_stmt_get_result($stmt);
if($result_user->num_rows == 1){
    session_start();
    $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
    $row_admin = mysqli_fetch_array($result_admin,MYSQLI_ASSOC);
    $_SESSION['login_id'] = $row_user['login_id'];
    $_SESSION['login_status'] = $row_user['login_status'];
    session_write_close();
    if(($row_user['login_status']== "admin") || ($row_user['login_status']== "table")){
        header("Location: admin/mainadmin.php");
    }
    else if(($row_user['login_status']== "user") && ($row_user['s_st'] == 1)){
        header("Location: main.php");
    }
    else{
        echo "<script>alert('ขณะนี้ผู้ใช้คุณถูกปิดอยู่');</script>";
        header("Refresh:0; url=logout.php");
    }
}else{
    echo "<script>alert('กรุณาตรวจสอบผู้ใช้และรหัสผ่านใหม่อีกครั้ง');</script>";
    header("Refresh:0; url=logout.php");
}
?>