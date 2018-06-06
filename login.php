<?php
  session_start();
  $username=$_POST['username'];
  //$username_array=[$username];
  $password=$_POST['password'];
  if($username&&$password)
  {
    $con=mysql_connect("localhost","root","") or die("Couldn't Connect");
    mysql_select_db("template",$con);
    $query=mysql_query("SELECT username,password FROM registration WHERE username='$username'");
    $numrows=mysql_num_rows($query);
    if ($numrows!=0)
    {
      while($row=mysql_fetch_assoc($query))
      {
        $dbusername=$row['username'];
        $dbpassword=$row['password'];
      }
      if($username==$dbusername&&$password==$dbpassword)
      {
        $query2="insert into loginhistory(username) values('$username')";
        mysql_query($query2, $con);
        header("location:template/home_v2.php");
      }
    } else {
      header("location:home_invalid.html");
    }
  } 
  mysql_close($con);
?>
 