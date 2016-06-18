<?php
$detail = $_GET["detail"];

include '../database/dbconnect.php';

$sql1="UPDATE directitem SET item_accept='1' WHERE directitem_id='$detail'";
 $result1 = mysqli_query($dbconnection, $sql1);
 
 header('Location:directitem.php');