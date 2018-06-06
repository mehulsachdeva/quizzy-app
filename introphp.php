<?php
	$con=mysql_connect("localhost", "root", "") or die(mysql_error());
	$db = mysql_select_db("quizs",$con);
	$sqlget="select question,option1,option2,option3,option4,correct from Basics";
	$result=mysql_query($sqlget) or die(mysql_error());	
	//ORDER BY rand() LIMIT 10
?>