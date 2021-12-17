<?php
    $conn=mysqli_connect("localhost", "root", "","tyroproject");
	if($conn)
		echo "Successfully Connected";
	else
	{
		echo "Connection Failed";
		exit();
	}
	
	$userid = $_POST['uid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gen = $_POST['gender'];
	$em = $_POST['email'];
	$dob = $_POST['dob'];
	$pno = $_POST['phno'];
	$uname = $_POST['un'];
	$pw = $_POST['password'];
	
	$q1 = "INSERT INTO userdetails VALUES('$userid','$fname','$lname','$gen','$em','$dob','$pno','$uname','$pw')";
	
	$r1 = mysqli_query($conn, $q1);
	if($r1)
	{
		echo "Data Stored Successfully";
	}
	else
	{
		echo "Data Storage Failed";
	}
	
	mysqli_close($conn);
?>