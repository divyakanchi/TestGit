<?php
require_once('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
 <title> User Registration</title>
 <link href="Stylesheet1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
   <?php
   if(isset($_POST['create']))
   {
	   //echo 'User submitted.';
	   $firstname   =$_POST['firstname'];
	   $lastname    =$_POST['lastname'];
	   $email       =$_POST['email'];
	   $phonenumber =$_POST['phonenumber'];
	   $username    =$_POST['username'];
	   $password    =$_POST['password'];
	   
	   $sql = "INSERT INTO user_info1 (firstname,lastname,email,phonenumber,username,password) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$username', '$password')";
	   mysqli_query($con,$sql);
		/*$stmt=$con->prepare("INSERT INTO user_info (firstname, lastname , email , phonenumber , username , password) VALUES 
        $stmt->param($firstname, $lastname, $email, $phonenumber, $username, $password);
		$result=$stmt->execute();*/
		if ($con->query($sql) === TRUE) 
		{
        echo "New records created successfully";
        } 
		else 
		{
        echo "Error: " . $sql . "<br>" . $con->error;
        }
		
   }
   ?>
</div>
	   
<div>
<form action="registration.php" method="post">
   <div class ="container">
   
       <h1>Registration Form</h1>
	   <p>Please fill in the information requested below in order to complete the employee registration. Thank you!.</P>
	   <div class="row">
	   <lable for ="firstname"><b>First Name</b></lable>
	   <input type="text" name="firstname" required>
	   
	   <lable for ="lastname"><b>Last Name</b></lable>
	   <input type="text" name="lastname" required>
	   
	   <lable for ="email"><b>Email</b></lable>
	   <input type="text" name="email" required>
	   
	   <lable for ="phonenumber"><b>Phone#</b></lable>
	   <input type="text" name="phonenumber" required>
	   
	   <lable for ="username"><b>Username</b></lable>
	   <input type="text" name="username" required>
	   
	   <lable for ="password"><b>Password</b></lable>
	   <input type="password" name="password"  required>
	   
	   <input type="submit" name="create" value="Sign Up">
	 </div>
	 </div>
</form>
</div>	
</body>
</html> 
	 
	   
	   
	   