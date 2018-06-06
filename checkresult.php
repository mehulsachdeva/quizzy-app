<?php
	include('introphp.php');
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

	$con=mysql_connect("localhost", "root", "") or die(mysql_error());
  	$db = mysql_select_db("template",$con);
  	
  	$result2=mysql_query($result) or die(mysql_error());

  	
	$Row2 = mysql_fetch_row($result2);
	if ($answer1 == $Row[0]){
		$totalCorrect++; 
	}
	echo "$Row[0]<br>";
	$Row2 = mysql_fetch_row($result2);
	if ($answer2 == $Row[0]){ 
		$totalCorrect++; 
	}
	echo "$Row[0]<br>";
	$Row2 = mysql_fetch_row($result2);
	if ($answer3 == $Row[0]){ 
		$totalCorrect++; 
	}
	echo "$Row[0]<br>";
	$Row2 = mysql_fetch_row($result2);
	if ($answer4 == $Row[0]){ 
		$totalCorrect++; 
	}
	echo "$Row[0]<br>";
	$Row = mysql_fetch_row($result2);
	if ($answer5 == $Row[0]){ 
		$totalCorrect++; 
	}
	$Row2 = mysql_fetch_row($result2);
	if ($answer6 == $Row[0]){ 
		$totalCorrect++; 
	}
	$Row2 = mysql_fetch_row($result2);
	if ($answer7 == $Row[0]){ 
		$totalCorrect++; 
	}
	$Row2 = mysql_fetch_row($result2);
	if ($answer8 == $Row[0]){ 
		$totalCorrect++; 
	}
	$Row2 = mysql_fetch_row($result2);
	if ($answer9 == $Row[0]){ 
		$totalCorrect++; 
	}
	$Row2 = mysql_fetch_row($result2);
	if ($answer10 == $Row[0]){ 
		$totalCorrect++; 
	}
	
	$name="Mehul";
	$result=$totalCorrect;
  	$addition = mysql_query("insert into student_result values('$name','$result')");

  	echo "<div id='results'>You scored $totalCorrect out of 10.</div><br>
  			Your Grade is ";
  	if($totalCorrect<=3){
  		echo "Poor<br>"; 
  	}
  	if($totalCorrect>3 && $totalCorrect<=8){
  		echo "Average<br>";
  	}
  	if($totalCorrect>8){
  		echo "Excellent";
  	}


	mysql_close($con);
?>