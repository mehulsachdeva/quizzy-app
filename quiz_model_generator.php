<style>
.no_quiz_schedule{
	font-size: 30px;
	font-weight: bold;
	position: relative;
	top:21%;
	left:6%;
	color:#212F3C;
}
.no_quiz_schedule2{
	font-size: 23px;
	font-weight: bold;
	position: relative;
	top:25%;
	left:-17%;
	color:#212F3C;
}

</style>
<?php 
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db("quizs",$con);

	//$show = "SHOW TABLES FROM template";
	//$table_result = mysql_query($show);
	$count_tables=0;
	$dataList = array();
	$showTable = "SHOW TABLES from quizs";
	$getData = mysql_query($showTable, $con);
	while ($row = mysql_fetch_row($getData)) {
   		$dataList[] = $row;
   		$count_tables++;
	}
	//print_r($dataList[1][0]);
	//print_r($dataList);
	//foreach($dataList as $temp)
	//	foreach($temp as $x)
	//		echo "$x\t";
	$no_quiz=0;
	for($i=0;$i<$count_tables;$i++){
		//print_r($dataList[$i][0]);
		$total_result = mysql_query("SELECT * FROM {$dataList[$i][0]}");
    	$no_rows = mysql_num_rows($total_result);
    	//echo "$no_rows\t";
    	if($no_rows>=10){
    		$no_quiz++;
    		echo "<div class='model'>
				<div class='topic'>QUIZ {$no_quiz} </div>
				<div class='topic-description'>{$dataList[$i][0]}</div>
				<a href='quiz.html'><button class='btn-quiz'>TAKE QUIZ</button></a>
				</div>";
    	}
    	if($no_quiz==0){
    		echo "<span class='no_quiz_schedule'>Till Now No Quiz Is Scheduled &#x2639;</span>";
    		echo "<span class='no_quiz_schedule2'>Come Back Later</span>";
    	}
    }
	//$no_quiz=0;
	/*foreach($dataList as $temp)
		foreach($temp as $table_quiz)
			//echo "$table_quiz";
			$total_result = mysql_query("SELECT * FROM {$table_quiz}");
    		$no_rows = mysql_num_rows($total_result);
    		echo "$no_rows\t";
    		if($no_rows>=10){
    			$no_quiz++;
    			echo "<div class='model'>
					<div class='topic'>QUIZ {$no_quiz} </div>
					<div class='topic-description'>{$table_quiz}</div>
					<a href='quiz.html'><button class='btn-quiz'>TAKE QUIZ</button></a>
					</div>";
    		}
    */
?>