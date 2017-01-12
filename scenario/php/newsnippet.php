<?php
session_start();
$name=$_SESSION['name'];

$connect=mysqli_connect("localhost","root","123456fxf");
mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库

$snippet=$_POST['snippet'];
mysql_query("INSERT INTO Snippets (Username, snippets) VALUES ('$name','$snippet')");
header('Location:../pages/home.php');


?>