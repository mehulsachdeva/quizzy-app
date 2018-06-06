<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{

			title:{
				text: "Your Marks",
				fontSize: 30
			},
                        animationEnabled: true,
			axisX:{

				gridColor: "Silver",
				tickColor: "silver",

			},                        
                        toolTip:{
                          shared:true
                        },
			theme: "theme2",
			axisY: {
				gridColor: "Silver",
				tickColor: "silver"
			},
			legend:{
				verticalAlign: "center",
				horizontalAlign: "right"
			},
			data: [
			{        
				type: "line",
				showInLegend: true,
				lineThickness: 2,
				name: "Your Marks",
				markerType: "square",
				color: "#F08080",
				dataPoints: [
				{ label: "Quiz 1", y:6 },
				{ label: "Quiz 2", y:9 },
				{ label: "Quiz 3", y:8 }
				]
			},
			{        
				type: "line",
				showInLegend: true,
				name: "Average Class Marks",
				color: "#20B2AA",
				lineThickness: 2,

				dataPoints: [
				{ label: "Quiz 1", y:7 },
				{ label: "Quiz 2", y:8 },
				{ label: "Quiz 3", y:6 }
				]
			}

			
			],
          legend:{
            cursor:"pointer",
            itemclick:function(e){
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              	e.dataSeries.visible = false;
              }
              else{
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
		});

	chart.render();
}
</script>

<script type="text/javascript" src="../static/js/tools/canvasjs.min.js"></script>

<!--Include Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="../static/js/tools/bootstrap.min.js"></script>


<!-- Fonts Link-->
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />


<!--Include CSS file-->
<link rel="stylesheet" href="../static/css/home_newversion.css" type="text/css">
<link rel="stylesheet" href="../static/css/statistics.css" type="text/css">



</head>
<body>

<div class="header">
	<nav>
		<ul>
			<a href="home_v2.php"><li class="logo">&nbsp;&nbsp;&nbsp;QUIZZY</li><button class="dropbtn"><span class="glyphicon glyphicon-menu-hamburger"></span></button></a>
			<span id="list">
				<a href="statistics.php"><li class="list-item"><span class="glyphicon glyphicon-stats"></span>&nbsp;Statistics</li></a>	
				<a href="#"><li class="list-item"><span class="glyphicon glyphicon-user"></span>&nbsp;
				<?php 
					$con=mysql_connect("localhost", "root", "") or die(mysql_error());
					$db = mysql_select_db("template",$con);
					$sqlget="select username from loginhistory order by id desc";
					$result=mysql_query($sqlget) or die(mysql_error());
					$row = mysql_fetch_row($result);
					echo "{$row[0]}";
				?>	
				</li></a>
				<a href="#" onClick="document.getElementById('about-us').style.display='block'"><li class="list-item"><span class="glyphicon glyphicon-envelope"></span>&nbsp;About Us</li></a>
  				<a href="../template.html"><li class="list-item"><span class="glyphicon glyphicon-off"></span>&nbsp;Logout</li></a>	
  			</span>
  		</ul>				
	</nav>
</div>

<div class="stats-container">
	<div class="linegraph-container"> 
		<div id="chartContainer">
		</div>
	</div>
	<div class="stats-content">
		<center><h1><b>STATISTICS</b></h1></center>
		<div class="stats-content-main">
			<?php 
				$con=mysql_connect("localhost", "root", "") or die(mysql_error());
  				$db = mysql_select_db("template",$con);
  				$sqlget="select quiz1 from student_result";
  				$result=mysql_query($sqlget) or die(mysql_error());
				$Row = mysql_fetch_row($result);
				echo "Your performance in Quiz 1 was ";
				if($Row[0]==NULL){
					echo "<b>-</b><br>";
				}
				else if($Row[0]>=0 && $Row[0]<=3){
					echo "<b>Poor</b><br>";
				}
				else if($Row[0]>3 && $Row[0]<=8){
					echo "<b>Average</b><br>";
				}
				else if($Row[0]>8){
					echo "<b>Excellent</b><br>";
				}
				$sqlget2="select quiz2 from student_result_quiz2";
  				$result2=mysql_query($sqlget2) or die(mysql_error());
				$Row2 = mysql_fetch_row($result2);
				echo "Your performance in Quiz 2 was ";
				if($Row2[0]==NULL){
					echo "<b>-</b><br>";
				}
				else if($Row2[0]>=0 && $Row2[0]<=3){
					echo "<b>Poor</b><br>";
				}
				else if($Row2[0]>3 && $Row2[0]<=8){
					echo "<b>Average</b><br>";
				}
				else if($Row2[0]>8 && $Row2[0]<=10){
					echo "<b>Excellent</b><br>";
				}
				$sqlget3="select quiz3 from student_result_quiz3";
  				$result3=mysql_query($sqlget3) or die(mysql_error());
				$Row3 = mysql_fetch_row($result3);
				echo "Your performance in Quiz 3 was ";
				if($Row3[0]==NULL){
					echo "<b>-</b><br>";
				}
				else if($Row3[0]>=0 && $Row3[0]<=3){
					echo "<b>Poor</b><br>";
				}
				else if($Row3[0]>3 && $Row3[0]<=8){
					echo "<b>Average</b><br>";
				}
				else if($Row3[0]>8){
					echo "<b>Excellent</b><br>";
				}
				mysql_close($con);
			?>

		</div>
	</div>
	<div class="stats-content-options">
		<a href="statistics.php"><div class="stats-box-1">
			<span class="individual-stats">My Statistics</span>
		</div>
		</a>
		<a href="collective.php"><div class="stats-box-2">
			<span class="individual-stats">Collective Statistics</span>
		</div></a>
		<a href=""><div class="stats-box-3">
			<span class="individual-stats">Remarks</span>
		</div></a>
		<a href=""><div class="comment-section">
			<span class="individual-stats">Comments</span>
			<div class="message">
				<span class="message-content">Going Good. Keep up the good work !</span>
				<span class="message-sender">Faculty. Adivsor</span>
			</div>
		</div>
		</a>
	</div>
	<br>
</div>
</body>
</html>