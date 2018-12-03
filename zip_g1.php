<?php
    session_start();
    require_once('connectdb.php');
        if(($_SESSION['login_status']== "user")){
        header("Location: logout.php");
    }
$pathdir = "txt/game1/";
$nameArchive = "txt/game1.zip";

$zip = new ZipArchive;

if($zip -> open($nameArchive, ZipArchive::CREATE) === TRUE){
    $dir = opendir($pathdir);
    while($file = readdir($dir)){
        if(is_file($pathdir.$file)){
                $zip -> addfile($pathdir.$file, $file);
        }
    }
    $zip -> close();
}
else{
    echo "Error";
}
$filename = "game1.zip";
$filepath = "txt/";
 
// http headers for zip downloads
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-type: application/octet-stream");
//can also be
//header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=\"".$filename."\""); 
//note: filename is the name that will be downloaded
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize($filepath.$filename)); 
ob_end_flush(); 
@readfile($filepath.$filename); 
header("Location: admin/mainadmin.php");
exit();
?>
