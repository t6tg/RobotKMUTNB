<?php 
session_start();
require_once('../connectdb.php');
if ($_SESSION['login_status'] != "admin") {
    header("Location: logout.php");
}
header('Content-Type: text/html; charset=utf-8');
$session_login_id = $_SESSION['login_id'];
$qry_user = "select * from tb_login where login_id='$session_login_id'";
$qry_admin = "select * from tb_admin where s_id=1";
$result_admin = mysqli_query($dbcon, $qry_admin);
$result_user = mysqli_query($dbcon, $qry_user);
if ($result_admin) {
    $row_admin = mysqli_fetch_array($result_admin, MYSQLI_ASSOC);
    mysqli_free_result($result_admin);
}
if ($result_user) {
    $row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);
    $s_login_username = $row_user['login_username'];
    $s_login_name = $row_user['login_name'];
    mysqli_free_result($result_user);
}
$query = "select login_id,login_username,game1,game2,game3,game4 from tb_login";
$result_show = mysqli_query($dbcon, $query);
$g1 = $_POST['g1_st'];
$g2 = $_POST['g2_st'];
$g3 = $_POST['g3_st'];
$g4 = $_POST['g4_st'];
$q = "UPDATE `tb_admin` SET `g1_st` = '$g1' , `g2_st` = '$g2' , `g3_st` = '$g3' , `g4_st` = '$g4' WHERE `tb_admin`.`s_id` = 1 ";
$result = mysqli_query($dbcon, $q);
if ($result) {
    echo "<script>alert('อัพเดตเรียบร้อย')</script>";
    header("Refresh:0 ; url=game_manage.php");
} else {
    echo "<script>alert('อัพเดตไม่สำเร็จ')</script>";
    header("Refresh:0 ; url=game_manage.php");
}
?>