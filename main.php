<?php
    session_start();
    require_once('connectdb.php');
        if(($_SESSION['login_status']!= "user") && ($row_admin['s_st'] == 0)){
        header("Location: logout.php");
    }
    require 'connectdb.php';
    $session_login_id = $_SESSION['login_id'];
    $qry_user = "select * from tb_login where login_id='$session_login_id'";
    $result_user = mysqli_query($dbcon,$qry_user);
    $qry_admin = "select * from tb_admin where s_id=1";
    $result_admin = mysqli_query($dbcon,$qry_admin);
    if($result_admin){
        $row_admin = mysqli_fetch_array($result_admin,MYSQLI_ASSOC);
        mysqli_free_result($result_admin);
    }
    if($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS - KMUTNB</title>
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }
ul {
    width: 100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    color: white;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #801243;
}
#game{
    background-color: #801243;
    padding: 30px;
    width: 100%;
    color: white;
}
#submit{
    cursor: pointer;
    width: 200px;
    height: 50px;   
    color: white;
    background-color: #801243;
    border: none;
    font-size:20px; 
    font-family: 'Kanit', sans-serif;
    border-radius: 10px;
}

.box{
    width: 100%;
    background-color: #cecccc;
    box-shadow: 5px 5px 10px grey;
}
.btnsent{
    cursor: pointer;
    width: 200px;
    height: 40px;
    margin-left: 8px;
    border: none;
    background-color: #801243;
    color: white;
    font-size: 14px;
    font-family: 'Kanit', sans-serif;
}
h3{}
.dot {
 color: green;  
 font-size: 16px;
}
.dot2 {
    color: red;  
 font-size: 16px;
}
</style>
</head>
<body>
<ul>
  <li style="margin-top:10px;margin-left:15px;"><?php echo "ยินดีต้อนรับ"." ".$s_login_name;?></li>
  <li style="float:right;"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
<div class="box">
<h3>  &nbsp;Game 1 : <?php if($row_admin['g1_st'] == 1){echo "<span class='dot'>Active</span>";}else{echo "<span class='dot2'>Close</span>";}?></h3>
<?php if($row_admin['g1_st'] == 1){echo "<button  onclick=\"location.href='game1.php'\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}else{echo "<button  onclick=\"myFunction()\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}?>
<p><?php if(empty($row_user['game1'])){
    echo  "&nbsp;ยังไม่ได้อัพโหลดไฟล์";
}else{
    echo "&nbsp;อัพโหลดไฟล์แล้ว";
}?></p>
</div>
<div class="box">
<h3>  &nbsp;Game 2 : <?php if($row_admin['g2_st'] == 1){echo "<span class='dot'>Active</span>";}else{echo "<span class='dot2'>Close</span>";}?></h3>
<?php if($row_admin['g2_st'] == 1){echo "<button  onclick=\"location.href='game2.php'\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}else{echo "<button  onclick=\"myFunction2()\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}?>
  <p><?php if(empty($row_user['game2'])){
    echo  "&nbsp;ยังไม่ได้อัพโหลดไฟล์";
}else{
    echo "&nbsp;อัพโหลดไฟล์แล้ว";
}?></p>
</div >
<div class="box">
<h3>  &nbsp;Game 3 : <?php if($row_admin['g3_st'] == 1){echo "<span class='dot'>Active</span>";}else{echo "<span class='dot2'>Close</span>";}?></h3>
<?php if($row_admin['g3_st'] == 1){echo "<button  onclick=\"location.href='game3.php'\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}else{echo "<button  onclick=\"myFunction3()\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}?>
<p><?php if(empty($row_user['game3'])){
    echo  "&nbsp;ยังไม่ได้อัพโหลดไฟล์";
}else{
    echo "&nbsp;อัพโหลดไฟล์แล้ว";
}?></p>
</div>
<div class="box">
<h3>  &nbsp;Game สำรอง : <?php if($row_admin['g4_st'] == 1){echo "<span class='dot'>Active</span>";}else{echo "<span class='dot2'>Close</span>";}?></h3>
<?php if($row_admin['g4_st'] == 1){echo "<button  onclick=\"location.href='game4.php'\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}else{echo "<button  onclick=\"myFunction4()\" class='btnsent'>คลิกเพื่อส่งไฟล์</button>";}?>
<p><?php if(empty($row_user['game4'])){
    echo  "&nbsp;ยังไม่ได้อัพโหลดไฟล์";
}else{
    echo "&nbsp;อัพโหลดไฟล์แล้ว";
}?></p>
</div>
  <br>
  <br>
  <BR>
  <center><span class='dot'>Active : </span>ระบบเปิดให้อัพโหลดได้  <span class='dot2'>Close : </span>ระบบถูกปิดไม่ให้อัพโหลด<p style="color: red;">**หมายเหตุ :  1) ไฟล์ที่จะอัพโหลดจะต้องเป็นไฟล์ .txt เท่านั้น <br> 2) ห้ามตั้งชื่อภาษาไทย <br> 3) ตัวอย่างการตั้งชื่อ script1 (หลัง script ให้ ตามด้วยเลขทีมที่ Random ได้) <br>4) อัพโหลดไฟล์ห้ามใช้ตัวพิมพ์ใหญ่<br> </p>
<center><footer><p>&copy; Copyright <?php echo date("Y");?> | <a href="https://facebook.com/mjamesthanawat" >Thanawat Gulati</a> All right reserved</p></footer></center>
<script>
function myFunction() {
    alert("ขณะนี้ระบบ Game : 1 ถูกปิดไม่ให้อัพโหลดไฟล์");
}
function myFunction2() {
    alert("ขณะนี้ระบบ Game : 2 ถูกปิดไม่ให้อัพโหลดไฟล์");
}
function myFunction3() {
    alert("ขณะนี้ระบบ Game : 3 ถูกปิดไม่ให้อัพโหลดไฟล์");
}
function myFunction4() {
    alert("ขณะนี้ระบบ Game : สำรอง ถูกปิดไม่ให้อัพโหลดไฟล์");
}
</script>
</body>
</html>
