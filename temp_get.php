<?php
	$con=mysql_connect("localhost", "root", "") or die(mysql_error());
	$db = mysql_select_db("template",$con);
	$sqlget="select username from loginhistory order by id desc";
	$result=mysql_query($sqlget) or die(mysql_error());
	$row = mysql_fetch_row($result);
?>