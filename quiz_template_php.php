<script src="text/javascript">
var timeoutHandle;
	function countdown(minutes) {
    	var seconds = 60;
    	var mins = minutes;
    	function tick() {
        	var counter = document.getElementById("timer");
        	var current_minutes = mins-1
        	seconds--;
        	counter.innerHTML =
        	current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        	if( seconds > 0 ) {
            	timeoutHandle=setTimeout(tick, 1000);
        	} else {

            	if(mins > 1){

               	// countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               	setTimeout(function () { countdown(mins - 1); }, 1000);

            	}
        	}
    	}
    	tick();
}
countdown(10);
</script>
<link rel="stylesheet" href="../quiz.css" type="text/css">
<style type="text/css">

body{
	font-family: 'Raleway',sans-serif;
}

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
.question{
	position: relative;
	left: 5%;
	font-size: 12px;
}
.options{
	position: relative;
	left: 5%;
	height:270px;
	width:320px;
}

.opt1{
	border: 1px solid black;
	border-radius: 2px;
	padding: 5px;
	height: 23px;
	width:400px;
	font-weight: lighter;

}

.opt2{
	border: 1px solid black;
	border-radius: 2px;
	padding: 5px;
	height: 23px;
	width:400px;
	position: relative;
	top:5px;
	font-weight: lighter;
}

.opt3{
	border: 1px solid black;
	border-radius: 2px;
	padding: 5px;
	height: 23px;
	width:400px;
	position: relative;
	top:10px;
	font-weight: lighter;
}

.opt4{
	border: 1px solid black;
	border-radius: 2px;
	padding: 5px;
	height: 23px;
	width:400px;
	position: relative;
	top:15px;
	font-weight: lighter;

}

.opt1:hover{
	background-color: lightblue;
	cursor:pointer;
}
.opt2:hover{
	background-color: lightblue;
	cursor:pointer;
}
.opt3:hover{
	background-color: lightblue;
	cursor:pointer;
}
.opt4:hover{
	background-color: lightblue;
	cursor:pointer;
}

.remark{
	height: 50px;
	width:297px;
}

.submit_quiz{
	position: relative;
	left:36%;
	height: 50px;
	width: 120px;
	border: 0;
	background: #17A589;
	cursor: pointer;
	color:white;
}

.submit_quiz:hover{
	background-color: #48C9B0;
}

.buttons{
	position: absolute;
	bottom: 2%;
	left:50%;
}

.leave_quiz{
	position: relative;
	left:36%;
	height: 50px;
	width: 120px;
	border: 0;
	background: #C0392B;
	cursor: pointer;
	color: white;
}

.leave_quiz:hover{
	background-color:#CD6155;
}

.sure_end{
	display: none;
	position: fixed;
	left:40%;
	height: 180px;
	width: 300px;
	border: 2px solid #3498DB;
	z-index:299;
	font-size:17px;
	background: white;
	transition: 5s ease;
}

.text_end{
	text-align: center;
	position: relative;
	top:20%;
}

.buttons_end{
	position: relative;
	top:44%;
	left:23%;
}

.submit_quiz_end{
	border: 0;
	border-radius: 2px;
	height: 50px;
	width:70px;
	background:#E74C3C;
	cursor: pointer;
}

.cancel_end{
	border: 0;
	border-radius: 2px;
	height: 50px;
	width: 70px;
	background:#1ABC9C;
	cursor: pointer;
}

</style>
</head>
<body onload="countdown(10)">

<center><h1 style="font-size: 40px;position: relative;top:20px;">BASICS
</h1></center>
<form name="quizform" method="post" action="getresult.php">
<div class="maincontainer" style="background-color: white;height:auto;width:800px;position:absolute;left:290px;top:100px;border-radius: 4px;border:5px solid #3498DB;">
	<div class="heading"><center></center></div>
		<div id="timerbox" style="position: absolute;left:820px;z-index:10;font-size:50px;background:rgba(0,0,0,0.3);color:white;top:0px;height:70px;width:120px;border-radius: 5px;"><div id="timer" style="position: relative;top:8px;left:13px;"></div></div>
 			<div class="question_box" style="position: relative;top:5px;">
			<!--	<div class="question">
					<h2>1. Question.....</h2>
				</div>
				<div class="options">
					<div class="opt1"><input type="radio" name="opt1" id="opt1">A</div>
					<div class="opt2"><input type="radio" name="opt1" id="opt1">B</div>
					<div class="opt3"><input type="radio" name="opt1" id="opt1">C</div>
					<div class="opt4"><input type="radio" name="opt1" id="opt1">D</div><br><br>
					<div class="remarks">
						<textarea placeholder="Do you have remarks about this question?" class="remark"></textarea>
					</div>
				</div>
			</div>-->
			<?php
  				include('introphp.php');
  				echo "<table width='80%' style='text-align:left;'>";
  				$Row = mysql_fetch_row($result);
  					echo "<tr><td><div class='question'><h2>1. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q1' id='opt1' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q1' id='opt1' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q1' id='opt1' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q1' id='opt1' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div><th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>2. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q2' id='opt2' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q2' id='opt2' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q2' id='opt2' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q2' id='opt2' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>3. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q3' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q3' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q3' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q3' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>4. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q4' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q4' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q4' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q4' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>5. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q5' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q5' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q5' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q5' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>6. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q6' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q6' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q6' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q6' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>7. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q7' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q7' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q7' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q7' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>8. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q8' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q8' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q8' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q8' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>8. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q9' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q9' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q9' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q9' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				$Row = mysql_fetch_row($result);
  					echo "<tr><th><div class='question'><h2>10. {$Row[0]}</h2></div><div class='options'>
  						<div class='opt1'><input type='radio' name='q10' id='opt3' value='A'>{$Row[1]}</div>
						<div class='opt2'><input type='radio' name='q10' id='opt3' value='B'>{$Row[2]}</div>
						<div class='opt3'><input type='radio' name='q10' id='opt3' value='C'>{$Row[3]}</div>
						<div class='opt4'><input type='radio' name='q10' id='opt3' value='D'>{$Row[4]}</div><br><br>
						<div class='remarks'><textarea placeholder='Do you have remarks about this question?' class='remark'></textarea>
						</div></th></tr>";
				mysql_close($con);
			?>
			<div class="buttons">
				<input type="button" class='submit_quiz' onclick="document.getElementById('sure_end').style.display='block'" value="END QUIZ">&nbsp;&nbsp;
				<input type="button" class='leave_quiz' value="LEAVE QUIZ" onclick="document.getElementById('sure_leave').style.display='block'"><br><br><br>
			</div>
			<div class="sure_end" id="sure_end">
				<div class="text_end">Are You Want to Submit Quiz</div>
					<div class="buttons_end">
						<button class="submit_quiz_end" >Yes</button>
						<input type="button" class="cancel_end" onclick="document.getElementById('sure_end').style.display='none'" value="No">
					</div>
			</div>

			<div class="sure_end" id="sure_leave">
				<div class="text_end">Do You Want To Leave?<br> You Will Lost All Marks</div>
				<div class="buttons_end">
					<a href="template/home_v2.html"><input type="button" class="submit_quiz_end" value="Yes"></a>
					<input type="button" class="cancel_end" onclick="document.getElementById('sure_leave').style.display='none'" value="No">
				</div>	
			</div>
			<br>
			</div>
			<div></div>
			<div></div>
	</div>
</form>

