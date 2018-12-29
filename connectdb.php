<?php
    $dbcon = new mysqli('localhost','root','[You db Pass]','[you db table]');
    $dbcon->set_charset("utf8");
    if($dbcon->connect_errno){
        die("Conncetion Failed" .$dbcon->connect_error);
    }
?>
