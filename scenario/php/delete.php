<?php
session_start();


$value = “DefenseSCRF”;
// setcookie(”cookie”, $value, time()+3600);
setcookie(”cookie”, $value, time());



$name=$_SESSION['name'];
$ID=$_REQUEST['deleteid'];  //制造漏洞

$connect=mysqli_connect("localhost","root","123456fxf");
mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库

mysqli_query($connect,"DELETE FROM `Snippets` WHERE Username='$name' AND ID='$ID' "); //

header('Location:../pages/mysnippets.php');

?>