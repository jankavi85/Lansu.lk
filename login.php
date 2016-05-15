<!DOCTYPE html>
<html lang="en">
<?php 
ob_start();
include "header.php" ?>
<?php
include "database/dbconnect.php"; 
$query = "SELECT user_email FROM user";
  	$result = $dbconnection->query($query);
	$found=0;
	while($row = $result->fetch_assoc()){
		$found++;
		$emailarray[]=$row['user_email'];
  	}
	if($found!=0)
	{
	$email=json_encode($emailarray);
	}
  ?> 




<script>
function validateform(emailid){  
<?php
		echo "var email = $email; \n";
 ?>
  
var emailid = document.getElementById(emailid);
var atposition=emailid.value.indexOf("@");  
var dotposition=emailid.value.lastIndexOf("."); 

for(var i = 0; i < email.length; i++){
          if(email[i]==emailid.value)
		  {
			alert("Email already exist");
			emailid.value="";
			emailid.focus();
			 return false;   
		  }
		
        }
if(emailid.value!="")
{
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=emailid.value.length){  
  alert("Please enter a valid e-mail address"); 
  emailid.value="";
  emailid.focus();
   return false;  
}
}
}
</script>
<script>
function passwordvalid(password)
{
	
	 var passwordid = document.getElementById(password);
	     
		  if(passwordid.value.length<5 && passwordid.value!="")
		  {
			alert("Give long password at least 5 characters");
			passwordid.value="";
			passwordid.focus();
			return false;   
		  }
		
        
	
}

</script>

<script>
function confirmvalid()
{
	
	 var password=document.form1.password.value; 
     var repassword=document.form1.confirmPassword.value;
	
	if(repassword!=password && repassword!="")
	{
		alert("Didn't match password"); 
		document.form1.confirmPassword.value=""; 
		document.form1.confirmPassword.focus();
		return false;
	}
	 
}

</script>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<input type="text" name='textfield' placeholder="Email" required/>
						<input type="password" name='textfield2' placeholder="Password" required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name="button" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						
                        <form id="form1" name="form1" method='post' action="<?php echo $_SERVER['PHP_SELF'];?>" >
							
                            <input type="text" name= 'username' placeholder="Name" required/>
							<input type="email" name='email' id="email" onBlur="return validateform('email')" placeholder="Email Address"  required/>
							<input type="password" name="password" id="password" onBlur="return passwordvalid('password')" placeholder="Password" required/>
                            <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="off" onBlur="return confirmvalid()" placeholder="Confirm Password" required/>
							<button type="submit" name='signupbutton' class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 if(isset($_POST["signupbutton"]) )
  {
	  include "database/dbconnect.php"; 
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $password=md5($password);
	  $email=$_POST['email'];
	  $sql="INSERT INTO user(user_name,user_email,user_password_hash,login_type,user_activation)VALUES('$username','$email','$password','none',1)";	
	  $result = mysqli_query($dbconnection, $sql);
	  
	  session_start();
	  $_SESSION["lansu_username"] = $username;
	  $_SESSION["lansu_email"] = $email;
	  header("location:index.php");
	  
	 
  }
  
  elseif(isset($_POST["button"]) )
  {
	  include "database/dbconnect.php"; 
	 $email = $_POST['textfield'];
	 $password = $_POST['textfield2'];

	$email = stripslashes($email);
	$password = stripslashes($password);

	$password = md5($password);


	$sql="SELECT user_name,user_type FROM user WHERE user_email='$email' and user_password_hash='$password'";
	$result=$dbconnection->query($sql);
	if($result->num_rows==1)
	{
	   $rows = mysqli_fetch_assoc($result);
	  $usertype=$rows['user_type'];
	  if($usertype=="admin")
	  {
		  session_start();
		 $_SESSION["lansu_username"] = $rows['user_name'];
	 	 $_SESSION["lansu_email"] = $email;
		 $_SESSION['lansu_user_type']= $rows['user_type'];
		  header("location:admin/index.php"); 
	  }
	  else
	  {
	  session_start();
	   $_SESSION["lansu_username"] = $rows['user_name'];
	  $_SESSION["lansu_email"] = $email;
	  header("location:index.php");
	  }
	}
	else
	{
	echo '<script language="javascript">alert("your login is wrong!")</script>';
	}

$dbconnection->close();

	  
  }
  
  
  }
?>
	
	<?php include "footer.php" ; ?>
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>