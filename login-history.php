<?php
	$con=mysql_connect("localhost","root","") or die("Couldn't Connect");
	mysql_select_db("template",$con);
    $query2="insert into loginhistory values('$username','$password')";
    mysql_query($query2, $con);	
?>