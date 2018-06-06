<?php 
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db("quizs",$con);
	$quiztitle=$_POST['quiztitle'];
	$qbank=$_POST['question_bank'];
	if($qbank=="New"){
		$sql = "CREATE TABLE {$quiztitle} (question VARCHAR(255), option1 VARCHAR(50),option2 VARCHAR(50),option3 VARCHAR(50),option4 VARCHAR(50),correct VARCHAR(2))";
		mysql_query($sql, $con);
		$question1=$_POST['question'];
		$option1=$_POST['opt1'];
		$option2=$_POST['opt2'];
		$option3=$_POST['opt3'];
		$option4=$_POST['opt4'];
		$correct1=$_POST['correct'];
		$addition = "insert into {$quiztitle} values('$question1','$option1','$option2','$option3','$option4','$correct1')";
		mysql_query($addition, $con);
		header('Location:template/questions.html');
		mysql_close($con);
	}
	else {
		$question1=$_POST['question'];
		$option1=$_POST['opt1'];
		$option2=$_POST['opt2'];
		$option3=$_POST['opt3'];
		$option4=$_POST['opt4'];
		$correct1=$_POST['correct'];
		$addition = "insert into {$quiztitle} values('$question1','$option1','$option2','$option3','$option4','$correct1')";
		mysql_query($addition, $con);
		header('Location:template/questions.html');
		mysql_close($con);
	}
?>

