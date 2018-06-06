<?php	
	//$con=mysql_connect("localhost","root","") or die(mysql_error());
	//$db=mysql_select_db("quizs",$con);

	//$show = "SHOW TABLES FROM template";
	//$table_result = mysql_query($show);
	/*$count_tables2=0;
	$dataList2 = array();
	$showTable2 = "SHOW TABLES from quizs";
	$getData2 = mysql_query($showTable2, $con);
	while ($row2 = mysql_fetch_row($getData2)) {
   		$dataList2[] = $row2;
   		$count_tables2++;
	}
	$no_quiz2=0;*/
	
		//print_r($dataList[$i][0]);
	$total_result2 = mysql_query("SELECT * FROM {$dataList[$i][0]}");
    $no_rows2 = mysql_num_rows($total_result2);
    //echo "$no_rows\t";
    $sqlget2="select question,option1,option2,option3,option4,correct from {$dataList[$i][0]} ORDER BY rand() LIMIT 10";
	$result2=mysql_query($sqlget2) or die(mysql_error());
?>