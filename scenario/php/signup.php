<?php
//链接数据库服务器
// echo (!!@mysqli_connect("localhost","root","harry63779588"));
$connect=mysqli_connect("localhost","root","123456fxf");
mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库
// $query1="INSERT INTO userinfo (Username, Password) VALUES ('allen','123')";

// $result=mysql_query($query1) or die('sql错误'.mysql_error());

mysqli_query($connect,"INSERT INTO userinfo (Username, Password) VALUES ('$_POST[user_name]','$_POST[password]')"); //将信息添加到userinfo这个表

// $result = mysql_query("SELECT * FROM userinfo");  //显示所有数据
// while($row = mysql_fetch_array($result))
//   {
//   echo $row['Username'] . " " . $row['Password'];
//   echo "<br />";
//   }

// echo "<br />";
// echo "1 record added";
header('Location:../pages/signin.html');

mysqli_close($connect);

?>
