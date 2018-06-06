<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="../static/js/tools/bootstrap.min.js"></script>

<!-- Fonts Link-->
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />

<!--Include CSS file-->
<link rel="stylesheet" href="../static/css/home_newversion.css" type="text/css">
<link rel="stylesheet" href="../static/css/collective.css" type="text/css">

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <!--<script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>-->
  <style>
    html,
    body,
    #myChart {
      height: 100%;
      width: 100%;
    }
</style>
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

<div class="col-container" id="wholedoc">
  <div class="col-container-barchart" id="graphid">
    <div id='myChart' height="500px" width="1345px"></div>
  </div>
  <div class="col-container-classmark" style="height: 500px;">
    <center><span class="heading">Class Statistics</span></center> 
    <span class="class-statistics">
      <?php 
          $con_get=mysql_connect("localhost", "root", "") or die(mysql_error());
          $db_get = mysql_select_db("template",$con_get);
          $sql_get="select username from loginhistory order by id desc";
          $result_get=mysql_query($sql_get) or die(mysql_error());
          $row_get = mysql_fetch_row($result_get);
          //echo "{$row[0]}";
      ?>
      <?php
          $con=mysql_connect("localhost", "root", "") or die(mysql_error());
          $db = mysql_select_db("template",$con);
          $sqlget="select name,quiz1 from student_result";
          $sqlget2="select name,quiz2 from student_result_quiz2";
          $sqlget3="select name,quiz3 from student_result_quiz3";
          $result=mysql_query($sqlget) or die(mysql_error());
          $result2=mysql_query($sqlget2) or die(mysql_error());
          $result3=mysql_query($sqlget3) or die(mysql_error());
          $new_result = mysql_query("SELECT * FROM student_result");
          $new_result2 = mysql_query("SELECT * FROM student_result_quiz2");
          $new_result3 = mysql_query("SELECT * FROM student_result_quiz3");
          $num_rows = mysql_num_rows($new_result);
          $i=0;
          do{
            $Row = mysql_fetch_row($result);
            $Row2 = mysql_fetch_row($result2);
            $Row3 = mysql_fetch_row($result3);

            echo "{$row_get[0]} scored <b>{$Row[1]}</b> in quiz 1, <b>{$Row2[1]}</b> in quiz 2 and <b>{$Row3[1]}</b> in quiz 3<br>";
            $i++;
          } while ($i!=$num_rows);
          mysql_close($con);
      ?>
    </span>
  </div>
</div>
<input type="button" class="print-content" onclick="printDiv('wholedoc')" value="Print Collective Statistics" style="font-weight:bold;position: relative;height: 70px;background-color:#48C9B0;width:200px;left:750px;top:-150px;border: 0;border-radius: 2px;">

<div class="stats-container">
  <div class="stats-content-options">
    <a href="Statistics.php"><div class="stats-box-1">
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
        <span class="message-sender">Faculty Adivsor</span>
      </div>
    </div>
    </a>
  </div>
  <br>
</div>

<?php
    $con=mysql_connect("localhost", "root", "") or die(mysql_error());
    $db = mysql_select_db("template",$con);
    $mark_quiz1 = array();
    $count_row=0;
    $showmark1 = "select quiz1 from student_result";
    $getData = mysql_query($showmark1, $con);
    while ($row = mysql_fetch_row($getData)) {
      $mark_quiz1[] = $row[0];
      $count_row++;
    }
?>
<?php
    $con=mysql_connect("localhost", "root", "") or die(mysql_error());
    $db = mysql_select_db("template",$con);
    $mark_quiz2 = array();
    $count_row2=0;
    $showmark2 = "select quiz2 from student_result_quiz2";
    $getData2 = mysql_query($showmark2, $con);
    while ($row2 = mysql_fetch_row($getData2)) {
      $mark_quiz2[] = $row2[0];
      $count_row2++;
    }
?>
<?php
    $con=mysql_connect("localhost", "root", "") or die(mysql_error());
    $db = mysql_select_db("template",$con);
    $mark_quiz3 = array();
    $count_row3=0;
    $showmark3 = "select quiz3 from student_result_quiz3";
    $getData3 = mysql_query($showmark3, $con);
    while ($row3 = mysql_fetch_row($getData3)) {
      $mark_quiz3[] = $row3[0];
      $count_row3++;
    }
?>
<script>
    var myConfig = {
      type: "bar",
      series: [{
        values : [<?php
            for($i=0;$i<$count_row;$i++){
              echo "$mark_quiz1[$i],";
            }
         ?>]
      }, {
        values: [<?php
            for($i=0;$i<$count_row2;$i++){
              echo "$mark_quiz2[$i],";
            }
         ?>]
      }, {
        values: [<?php
            for($i=0;$i<$count_row3;$i++){
              echo "$mark_quiz3[$i],";
            }
         ?>]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "100%",
      width: "100%"
    });
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</head>
</html>