<?php
	$username_login=$_POST['username'];
	$con=mysql_connect("localhost","root","") or die("Couldn't Connect");
    mysql_select_db("template",$con);
    $query=mysql_query("SELECT username FROM registration WHERE username='$username_login'");
    $row_login=mysql_fetch_assoc($query);
    $uname_logined=$row_login['username'];
?>