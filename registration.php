<?php 
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db("template",$con);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$addition = "insert into registration values('$fname','$lname','$username','$password','$email')";
	if (mysql_query($addition, $con)){
    	header("location:template_registered.html");
    } else {
    	echo "error ".mysql_error();
    }
	mysql_close($con);
?>

