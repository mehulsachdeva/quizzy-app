<?php
	$no_quiz++;
    include('temp_quiz.php');
    echo "<form action='quiz_model_generator.php' method='post'><div class='model'>
		<div class='topic'>QUIZ {$no_quiz} </div>
		<div class='topic-description'>{$dataList[$i][0]}</div>
		<button class='btn-quiz'>TAKE QUIZ</button>
		</div></form>";
?>
