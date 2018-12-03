<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CS - KUTNB</title>
    <link rel="icon" href="img/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style3.css"/>
</head>
<body>
    <center><div class="container"><br>
        <img src="img/banner.png" alt="banner" style="width: 500px;margin-bottom: 30px;margin-top: 20px;"/>
        <form action="login.php" method="POST">
        Username : <input type="text" class="frm" style="margin-bottom:30px" name="username" oninvalid="setCustomValidity('กรุณากรอกชื่อผู้ใช้')"  oninput="setCustomValidity('')"   required/>
        Password : <input type="password" class="frm" style="margin-bottom:30px" name="password"  oninvalid="setCustomValidity('กรุณากรอกรหัสผ่าน')"  oninput="setCustomValidity('')"  required/><br>
            <button class="bt1" name="submit" type="submit" >เข้าสู่ระบบ</button>
        </form>
    <p style="font-size: 11px;">&copy; สงวนลิขสิทธิ์ 2561 โดย นาย ธนวัฒน์ กุลาตี นักศึกษาภาควิชาวิทยาการคอมพิวเตอร์และสารสนเทศ <br> คณะวิทยาศาสตร์ประยุกต์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</p>
    <br>
    </div></center>
</body>
</html>