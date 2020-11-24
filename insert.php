<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['fullname'];
	$email=$_POST['emailid'];
	$contactno=$_POST['contactno'];
	$password=md5($_POST['password']);
	//$password=$_POST['password'];
	$q = " INSERT INTO `users`(`name`, `email`, `contactno`, `password`) VALUES ('$name','$email','$contactno','$password')";
	//$query=mysqli_query($conn,"insert into users('name','email','contactno','password') values('$name','$email','$contactno','$password')");
	$query=mysqli_query($conn,$q);
	if($query)
	{
		echo "<script>alert('You are successfully register');</script>";
	}
	else{
		echo "<script>alert('Not register something went worng');</script>";
		}
}

?>