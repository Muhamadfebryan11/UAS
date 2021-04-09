<?php
include 'config.php';
$username   = mysqli_real_escape_string($con, $_POST['username']);
$pass       = mysqli_real_escape_string($con, $_POST['password']);
$user 		= "select * from login where username='$username' and password='$pass'";
$result 	= mysqli_query($con, $user);
$data 		= mysqli_fetch_array($result);
if($data)
{
	if ($username == $data['username']) 
	{
		header("location:input.php");
	}
	else{
		header("location:index.php");
	}
}else
{	
	echo "<SCRIPT>alert('Username atau Password Salah...!!!');window.location='index.php'</SCRIPT>";
}
?>