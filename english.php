<?php
session_start();

$_SESSION['language'] = 'english';
//header('Location:http://localhost/LANSU.LK/index.php');

if($_SERVER['HTTP_REFERER']!='http://localhost/LANSU.LK/items_search.php')
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

else
{
	header('Location: http://localhost/LANSU.LK/index.php');
}



?>