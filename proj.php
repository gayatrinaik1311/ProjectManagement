<?php
    $conn=mysqli_connect("localhost", "root", "","tyroproject");
	if($conn)
		echo "Successfully Connected<br>";
	else
	{
		echo "Connection Failed";
		exit();
	}
	
	$pid = $_POST['pid'];
	$pname = $_POST['pname'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$pmid = $_POST['pmid'];
	$status = $_POST['status'];
	$cid = $_POST['cid'];
	
	$q1 = "INSERT INTO projectdetails VALUES('$pid','$pname','$start','$end','$pmid','$status','$cid')";
	
	$r1 = mysqli_query($conn, $q1);
	if($r1)
	{
		echo "Data Stored Successfully<br>";
	}
	else
	{
		echo "Data Storage Failed";
	}
	
	mysqli_close($conn);
?>