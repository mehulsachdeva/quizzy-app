<?php 
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db("quizs",$con);
	$quiztitle=$_POST['quiztitle'];
	$qbank=$_POST['question_bank'];

	$question1=$_POST['question'];
	$option1=$_POST['opt1'];
	$option2=$_POST['opt2'];
	$option3=$_POST['opt3'];
	$option4=$_POST['opt4'];
	$correct1=$_POST['correct'];
?>