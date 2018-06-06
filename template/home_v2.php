<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<script src="../static/js/tools/jquery-1.11.1.min.js"></script>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="../static/js/tools/bootstrap.min.js"></script>

<link rel="stylesheet" href="../static/css/tools/animate.css">
<link rel="stylesheet" href="../static/css/quiz-model.css" type="text/css">
<link rel="stylesheet" href="../static/css/home_v2.css" type="text/css">
<link rel="stylesheet" href="../static/css/aboutus.css" type="text/css">

<style>
body{
	background-image: url('../static/img/libdisplay.jpg');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.quiz-contents{
	background-image: url('../static/img/par.jpg');
	background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
}

.aboutus{
	background-image: url('../static/img/about.jpg');
	background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
}

.model{
	background: url("../static/img/quiz-model-bg.jpg");
	background-repeat: no-repeat;
	background-position: fixed;
	position: relative;
	height: 290px;
	width:240px;
	border:0;
	top:5%;
	left:14%;
	border-radius: 3px;
}

.model2{
	background: url("../static/img/quiz-model-bg.jpg");
	background-repeat: no-repeat;
	background-position: fixed;
	position: relative;
	height: 290px;
	width:240px;
	border:0;
	top:-33%;
	left:37%;
	border-radius: 3px;
}

.model3{
	background: url("../static/img/quiz-model-bg.jpg");
	background-repeat: no-repeat;
	background-position: fixed;
	position: relative;
	height: 290px;
	width:240px;
	border:0;
	top:-71%;
	left:61%;
	border-radius: 3px;
}
.head_instructions{
	position: absolute;
	left:35%;
	font-weight: bolder;
	font-size: 25px;
	text-align: center;
}

.information{
	position: absolute;
	top:60%;
	left:14%;
	font-weight: bold;
	font-size: 20px;
	z-index: 99px;
}

</style>
</head>
<body>

<div class="header">
	<nav>
		<ul>
			<a href="home_v2.php"><li class="logo">QUIZZY</li><button class="dropbtn"><span class="glyphicon glyphicon-menu-hamburger"></span></button></a>
			<span id="list">
				<a href="statistics.php"><li class="list-item"><span class="glyphicon glyphicon-stats"></span>&nbsp;Statistics</li></a>	
				<a href="#"><li class="list-item"><span class="glyphicon glyphicon-user"></span>&nbsp;
				<?php 
					include('../temp_get.php');
					echo "{$row[0]}";
				?>
				</li></a>
				<a href="#" onClick="document.getElementById('about-us').style.display='block'"><li class="list-item"><span class="glyphicon glyphicon-envelope"></span>&nbsp;About Us</li></a>
  				<a href="../template.html"><li class="list-item"><span class="glyphicon glyphicon-off"></span>&nbsp;Logout</li></a>	
  			</span>
  		</ul>				
	</nav>
</div>

<div class="container">
	<div class="display-logo">QUIZZY</div>
	<div class="description">Creating a community of Life-Long learners</div>

	<div class="btns">
		<a href="#quiz-contents"><button class="take-quiz">TAKE QUIZ</button></a>
		<a href="questions.html"><button class="create-quiz">CREATE QUIZ</button></a>
	</div>

	<div class="mouse-icon hidden-xs">
		<div class="scroll"></div>
	</div>
</div>

<!-- Quiz Models-->
<div class="quiz-contents" id="quiz-contents">
	<img src="../static/img/paper.jpg" height="80px" width="200px" class="paper-img">
	<span class="quiz-content-header">QUIZ</span>
	<?php
		include('../quiz_model_generator.php');
	?>
	<!--<div class="model">
		<div class="topic">QUIZ 1</div>
		<div class="topic-description">Basic in HTML</div>
		<a href="quiz.html"><button class="btn-quiz">TAKE QUIZ</button></a>
	</div>
	<div class="model2">
		<div class="topic">QUIZ 2</div>
		<div class="topic-description">Data Structures</div>
		<a href="quiz.html"><button class="btn-quiz" style="background: #1ABC9C;">TAKE QUIZ</button></a>
	</div>
	<div class="model3">
		<div class="topic">QUIZ 3</div>
		<div class="topic-description">Software Engineering</div>
		<a href="quiz.html"><button class="btn-quiz" style="background: #E74C3C;">TAKE QUIZ</button></a>
	</div>-->
	<div class="information">
	<span class="head_instructions">INSTRUCTIONS</span><br><br>
	1. Quizzy is an online quiz system tool made for the purpose of our softwar engineering project.<br>
	2. All students are advised to keep a regular track of their statistics<br>
	3. There will be no negative marking.<br>
	4. Once answers are submitted, there is no chance to get back to questions.<br>
	5. Candidate must perform each quiz exercise as specified.<br>
	6. Each Quiz must be completed within 10 minutes of time.<br>
	7. Good Luck.
	</div>
</div>
<!--
	<div class="bottom">
    <div class="content-box-1">
      <div class="content-box-text">
        <div class="content-box-text-top"><img src="../static/img/user1.jpg" height="200px" width="327px"></div>
        <div class="content-box-text-bottom">
          <div class="content-box-text-bottom-head"><b><span class="glyphicon glyphicon-tasks"></span>&nbsp;Quiz 1</b></div>
          <div class="content-box-text-bottom-info"><b><span class="info">The Beginning</span></b><br>
            <div class="q1-button">
              <input type="button" class="q1-b" value="TAKE QUIZ">
              <input type="button" class="q1-b-info" value="INFO" onclick="document.getElementById('info01').style.display='block'">
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="content-box-2">
      <div class="content-box-text-top"><img src="../static/img/user2.jpg" height="200px" width="327px"></div>
        <div class="content-box-text-bottom">
          <div class="content-box-text-bottom-head"><b><span class="glyphicon glyphicon-tasks"></span>&nbsp;Quiz 2</b></div>
          <div class="content-box-text-bottom-info"><b><span class="info">&nbsp;Give It A Shot</span></b><br>
            <div class="q2-button">
              <input type="button" class="q2-b" value="TAKE QUIZ">
              <input type="button" class="q2-b-info" value="INFO" onclick="document.getElementById('info02').style.display='block'">
            </div> 
          </div>
        </div>
    </div>
    <div class="content-box-3">
      <div class="content-box-text-top"><img src="../static/img/user3.jpg" height="200px" width="327px"></div>
        <div class="content-box-text-bottom">
          <div class="content-box-text-bottom-head"><b><span class="glyphicon glyphicon-tasks"></span>&nbsp;Quiz 3</b></div>
          <div class="content-box-text-bottom-info"><b><span class="info">Very Last Lesson</span></b><br>
            <div class="q3-button">
              <input type="button" class="q3-b" value="TAKE QUIZ">
              <input type="button" class="q3-b-info" value="INFO" onclick="document.getElementById('info03').style.display='block'">
            </div> 
          </div>
        </div>
    </div>-->

<!-- Email and FAQs-->
<div class="aboutus">	
	<div class="text-email-head">Keep in Touch!</div>
	<div class="text-email-desc">Enter your email to get time to time notifications..</div><br>
	<form>
		<input class="input-email" placeholder=" Email" type="email"><br><br>
		<input type="button" value="Submit" class="submit-email">
	</form>
</div>

<div class="bottom-banner"><br>
	<div class="link-left"><a href="#">Home</a></div>
	<div class="link-left"><a href="#">FAQs</a></div>
	<div class="link-left"><a href="#">Report a Problem</a></div>
	<div class="link-right"><a href="#" onClick="document.getElementById('pop_instructions').style.display='block'">Instructions</a></div>
	<div class="link-right"><a href="#">Quiz Details</a></div>
	<div class="link-right"><a href="#" onClick="document.getElementById('about-us').style.display='block'">Team
	</a></div>
	<div class="powered">Powered By &copy;&nbsp;Mehul Sachdeva</div>
</div>

<!--About Us Pop -->
<div class="aboutus-pop" id="about-us" style="display: none;">
	<div class="cross-btn">
		<button class="close-aboutus" onclick="document.getElementById('about-us').style.display='none'">&#10006;</button>
	<div class="aboutus-heading">Know More About Us</div><br><br>
	<div class="member1">
		<img src="../static/img/libdisplay.jpg" class="circle-img">
		<div class="member-desc"><br>
			<div class="name">Mehul Sachdeva</div>
			<div class="desc">FrontEnd Developer</div>
		</div>
	</div>
	<div class="member2">
		<img src="../static/img/libdisplay.jpg" class="circle-img">
		<div class="member-desc"><br>	
			<div class="name">Pushkar Warale</div>
			<div class="desc">BackEnd Developer</div>
		</div>
	</div>
</div>

<!--<div class="pop_instructions animate" id="pop_instructions">
	<div class="head_instructions"><span style="color:black;">INSTRUCTIONS</span></div>
	<div class="Instructions">
	1. Quizzy is an online quiz system tool made for the purpose of our softwar engineering project.<br>
	2. All students are advised to keep a regular track of their statistics
	3. There will be no negative marking.
	4. Once answers are submitted, there is no chance to get back to questions.
	5. Candidate must perform each quiz exercise as specified.
	6. Each Quiz must be completed within 10 minutes of time.
	7. Good Luck.
	</div>
</div>-->




<!--jQuery-->
<script>
$(document).ready(function(){
	$('.dropbtn').click(function(){
		$('#list').toggle();
	});
});
</script>

</body>
</html>