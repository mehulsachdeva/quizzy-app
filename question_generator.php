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
  					echo "<tr><th><div class='question'><h2>9. {$Row[0]}</h2></div><div class='options'>
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