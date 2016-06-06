<?php

session_start();
include "database/dbconnect.php"; 	  
$useremail= $_SESSION["lansu_email"] ;
echo $useremail;
$sql="SELECT user_id FROM user WHERE user_email='$useremail';";
$result=$dbconnection->query($sql);
$rows = mysqli_fetch_assoc($result);
$userid= $rows['user_id'];

      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
	  $value = explode('.',$_FILES['image']['name']);
	  $value = end($value);
      $file_ext=strtolower($value);
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
		  $pathname= 'images/additem/bid/'.strval($userid);
		  if(file_exists($pathname))
		  {
			$image_file='images/additem/bid/'.strval($userid)."/".$file_name;
			move_uploaded_file($file_tmp,$image_file);
            echo "Success";
		  }
	  else{
		  
		 mkdir('images/additem/bid/'.strval($userid));
		 $image_file='images/additem/bid/'.strval($userid)."/".$file_name;
         move_uploaded_file($file_tmp,$image_file);
         echo "Success";
	  }
		 
      }else{
         print_r($errors);
      }




	  $category=$_POST['category'];
	  $sub_category=$_POST['subcategory'];
	  $district = $_POST['district'];
	  $area = $_POST['area'];
	  $item_avatar=  $image_file;
	  $condition = $_POST['condition'];
	  $title = $_POST['title'];
	  $description= $_POST['description'];
	  $price = $_POST['price'];
	  $phonenumber = $_POST['phonenumber'];
	  $deliver= $_POST['deliver'];
	  $addingtime = date('Y-m-d H:i:s');
	  $closingtime = $_POST['data_time'];
	
	 
 $sql="INSERT INTO biditem(user_id,category,sub_category,district,district_area,conditionOn,item_avatar,title,description,price,delivery_option,closingtime,addingtime,item_accept)VALUES('$userid','$category','$sub_category','$district','$area','$condition','$item_avatar','$title','$description','$price','$deliver','$closingtime','$addingtime','0')";	

 $result = mysqli_query($dbconnection, $sql);
 
 $sql2="UPDATE user SET phone_number='$phonenumber' WHERE user_id='$userid'";
 $result2 = mysqli_query($dbconnection, $sql2);
 
 header('Location:index.php');

 ?>
 