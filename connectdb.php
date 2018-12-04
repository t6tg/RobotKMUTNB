<?php
    $dbcon = new mysqli('localhost','root','James15127*','rcbkmutnb');
    $dbcon->set_charset("utf8");
    if($dbcon->connect_errno){
        die("Conncetion Failed" .$dbcon->connect_error);
    }
?>
