<!DOCTYPE html>
<html>
<head>
<script src="../js/quiz.js"></script>
<link rel="stylesheet" href="../quiz.css" type="text/css">
<style type="text/css">

body{
	font-family: 'Raleway', sans-serif;
	overflow-x: hidden;
	margin:0;
	padding:0;
	font-size:12px;
    background: #F5EEF8 url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
	-webkit-animation: 10s linear 0s normal none infinite animate;
	-moz-animation: 10s linear 0s normal none infinite animate;
	-ms-animation: 10s linear 0s normal none infinite animate;
	-o-animation: 10s linear 0s normal none infinite animate;
	animation: 10s linear 0s normal none infinite animate;
	overflow-y:hidden;
}

@-webkit-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@-moz-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@-ms-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@-o-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
.buttons{
	position: fixed;
	top:540px;
	left:540px;
}

#nav_btn{
	font-size:30px;
	font-weight: bolder;
	color:white;
	display: block;
	border:0;
	background-color: rgba(0,0,0,0);
}

#sidemenu{
	position: relative;
	top:-45px;
	display: none;
	width:250px;
	height:750px;
	background-color: rgb(255,255,255);
	transition: 0.5s;
	z-index:1;
}

#cancel_menu{
	position: relative;
	top:4px;
	left:212px;
	background: rgba(255,255,255,0);
	font-weight: bolder;
	color:black;
	font-size:28px;
	border:0;
}

#cancel_menu:hover{
	cursor: pointer;
}
#nav_btn:hover{
	cursor:pointer;
}

#start_quiz{
	display:block;
	border:0;
	position: fixed;
	top:540px;
	left:650px;
	height: 40px;
	width: 100px;
	background-color:#CB4335;
	border:0;
	border-radius: 3px;
	cursor: pointer;
	color:white;
	font-family: Tahoma;
}

#end_quiz{
	display:block;
	border:0;
	position: fixed;
	top:540px;
	left:650px;
	height: 40px;
	width: 100px;
	background-color:#CB4335;
	border:0;
	border-radius: 3px;
	cursor: pointer;
	color:white;
	font-family: Tahoma;
}

#get_grade{
	border:0;
	position: fixed;
	top:540px;
	left:650px;
	height: 40px;
	width: 100px;
	background-color:#CB4335;
	border:0;
	border-radius: 3px;
	cursor: pointer;
	color:white;
	font-family: Tahoma;
	z-index: 3;
}

#start_quiz:hover{
	background-color: #E74C3C;
}

</style>
<title> Quiz ## </title>
</head>

<body>

<div><button id="nav_btn" onclick="document.getElementById('sidemenu').style.display='block'">&#9776;</button></div>

<div id="sidemenu">
	<div><button id="cancel_menu" onclick="document.getElementById('sidemenu').style.display='none'">&#10006;</button></div>
</div>

<form action="" method="post" id="quiz"><br><br>
<div class="maincontainer" style="background-color: white;height:500px;width:500px;position:absolute;left:440px;top:100px;border-radius: 4px;border:5px solid #3498DB;">
<div class="heading"><center><h1> Basic HTML Quiz </h1></center></div>
<div id="timerbox" style="display:none;position: absolute;left:620px;font-size:50px;background:rgba(0,0,0,0.3);color:white;top:0px;height:70px;width:120px;border-radius: 5px;"><div id="timer" style="position: relative;top:8px;left:13px;"></div></div>
   <center><br>
 	</center>
 	<div id="start_page" class="container_questions" style="display: block;position: fixed;top:255px;left:480px;font-size:20px;">
 		<h5>Marks</h5><br><br>
 		<div style="position:relative;top:-60px;">
 		<ul style="font-size:15px;">
 			<?php
 			$con=mysql_connect("localhost", "root", "") or die(mysql_error());
	$db = mysql_select_db("quizs",$con);
	$sqlget="select question,option1,option2,option3,option4,correct from Basics";
	$result=mysql_query($sqlget) or die(mysql_error());
	$answer1 = $_POST['q1'];
	$answer2 = $_POST['q2'];
	$answer3 = $_POST['q3'];
	$answer4 = $_POST['q4'];
	$answer5 = $_POST['q5'];
	$answer6 = $_POST['q6'];
	$answer7 = $_POST['q7'];
	$answer8 = $_POST['q8'];
	$answer9 = $_POST['q9'];
	$answer10 = $_POST['q10'];


	$totalCorrect = 0;

	//$con=mysql_connect("localhost", "root", "") or die(mysql_error());
  	//$db = mysql_select_db("template",$con);
  	//$sqlget="select correct from Basics";
  	//$result=mysql_query($sqlget) or die(mysql_error());

  	
	$Row = mysql_fetch_row($result);
	if ($answer1 == $Row[5]){
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer2 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer3 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer4 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer5 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer6 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer7 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer8 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer9 == $Row[5]){ 
		$totalCorrect++; 
	}
	$Row = mysql_fetch_row($result);
	if ($answer10 == $Row[5]){ 
		$totalCorrect++; 
	}
	//$con=mysql_connect("localhost", "root", "") or die(mysql_error());
	//$db2 = mysql_select_db("template",$con);
	//$queryget="select username from loginhistory order by id desc";
	//$row_get=mysql_fetch_row($query_get);
	//$rowget = mysql_fetch_row($queryget);
	//$name_get=$rowget[0];
	include('temp_get.php');
	$name=$row[0];
	$result_grade=$totalCorrect;
  	$addition = mysql_query("insert into student_result values('$name',$result_grade)");

  	echo "<div id='results'>You scored <b>$result_grade</b> out of 10.</div><br>
  			Your Grade is ";
  	if($result_grade<=3){
  		echo "<b>Poor</b><br>"; 
  	}
  	if($result_grade>3 && $result_grade<=8){
  		echo "<b>Average</b><br>";
  	}
  	if($result_grade>8){
  		echo "<b>Excellent</b>";
  	}
  	
	mysql_close($con);
	?>
 				
 		</ul>
 		</div>
  </div>

 	<div style="background:#3498DB;height:100px;width:500px;position: relative;top:327px;">
 		<a href="template/home_v2.php"><input type="button" id="start_quiz" value="Exit"></a>
 	</div>

 	</div>
 	</form>
</body>
</html>

