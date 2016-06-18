<?php
$detail = $_GET["detail"];

include '../database/dbconnect.php';

$sql="SELECT item_avatar FROM directitem WHERE directitem_id='$detail';";
$result = mysqli_query($dbconnection, $sql);
$rows = mysqli_fetch_array($result);
 
$filename = "../".$rows['item_avatar'];

if (file_exists($filename)) {
    unlink($filename);
} 
$sql1="DELETE FROM directitem WHERE directitem_id='$detail'";
$result1 = mysqli_query($dbconnection, $sql1);
 
header('Location:directitem.php');