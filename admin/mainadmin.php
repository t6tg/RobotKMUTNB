<?php 
session_start();
require_once('../connectdb.php');
if (($_SESSION['login_status'] != "admin") && ($_SESSION['login_status'] != "table")) {
    header("Location: logout.php");
}
$session_login_id = $_SESSION['login_id'];
$qry_user = "select * from tb_login where login_id='$session_login_id'";
$result_user = mysqli_query($dbcon, $qry_user);
if ($result_user) {
    $row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);
    $s_login_username = $row_user['login_username'];
    mysqli_free_result($result_user);
}
?>
    <?php 
    $query = "select login_id,login_username,login_name,game1,game2,game3,game4 from tb_login where login_id <=8";
    $result_show = mysqli_query($dbcon, $query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <title>Admin Page</title>
    <style>
        table,th,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
        table{
            margin-top: 100px;
        }
        body{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
<ul>
  <li style="margin-top:10px;margin-left:15px;"><?php echo "ยินดีต้อนรับ" . " " . $row_user['login_name'] ?></li>
  <li style="float:right;"><a href="logout.php">ออกจากระบบ</a></li>
</ul>
<center><table style="width: 800px;">
<tr>
<th>ID</th>
<th>Username</th>
<th>School Name</th>
<th>Game 1</th>
<th>Game 2</th>
<th>Game 3</th>
<th>Game 4</th>
</tr>
<?php
while ($row = mysqli_fetch_array($result_show, MYSQLI_ASSOC)) {

    ?>
<tr>
<td><?php echo $row['login_id']; ?></td>
<td><?php echo $row['login_username']; ?></td>
<td><?php echo $row['login_name']; ?></td>
<td><a href="../txt/game1/<?= $row["game1"]; ?>" download><?= $row["game1"]; ?></a></td>
<td><a href="../txt/game2/<?= $row["game2"]; ?>" download><?= $row["game2"]; ?></a></td>
<td><a href="../txt/game3/<?= $row["game3"]; ?>" download><?= $row["game3"]; ?></td>
<td><a href="../txt/game4/<?= $row["game4"]; ?>" download><?= $row["game4"]; ?></td>
</tr>
    <?php 
} ?>
</table>
<bR>
<?php if($_SESSION['login_status'] == "admin"){
echo "<button style=\"cursor: pointer;width: 200px;height: 50px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 20px;font-family: 'Kanit', sans-serif;\" onclick=\"location.href='game_manage.php'\">Game Manage</button>";
echo "<button style=\"cursor: pointer;width: 200px;height: 50px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 20px;font-family: 'Kanit', sans-serif;\" onclick=\"location.href='server_manage.php'\">Server Manage</button>";
}else { }?>
<br>
<br><button style="cursor: pointer;width: 100px;height: 40px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 13px;font-family: 'Kanit', sans-serif;" onclick="location.href='../zip_g1.php'">Zip Game1</button>
<button style="cursor: pointer;width: 100px;height: 40px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 13px;font-family: 'Kanit', sans-serif;" onclick="location.href='../zip_g2.php'">Zip Game2</button>
<button style="cursor: pointer;width: 100px;height: 40px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 13px;font-family: 'Kanit', sans-serif;" onclick="location.href='../zip_g3.php'">Zip Game3</button>
<button style="cursor: pointer;width: 100px;height: 40px;border: solid #ffffff 3px;background-color: #801243;color: white;font-size: 13px;font-family: 'Kanit', sans-serif;" onclick="location.href='../zip_g4.php'">Zip Game4</button>
<center><footer><p>&copy; Copyright <?php echo date("Y"); ?> | <a href="https://facebook.com/mjamesthanawat" >Thanawat Gulati</a> All right reserved</p></footer></center>
</center>
</body>
</html>
