<?php
  $con=mysql_connect("localhost", "root", "") or die(mysql_error());
  $db = mysql_select_db("template",$con);
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $addition = "insert into marks values('$q1','$q2','$q3')";
  mysql_query($addition, $con);
  mysql_close($con);
?>
