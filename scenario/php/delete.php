<?php
session_start();

//构造加密的Cookie信息,防御
// 　　　　$value = “DefenseSCRF”;
// 　　　　setcookie(”cookie”, $value, time()+3600);


if(isset($_POST['hash'])) {
     　　      $check = md5($_COOKIE['cookie']);  
          　　 if($_POST['hash'] == $check) {
               　　 $name=$_SESSION['name'];
                   $ID=$_REQUEST['deleteid'];  //制造漏洞
                   $connect=mysqli_connect("localhost","root","123456fxf");
mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库

mysqli_query($connect,"DELETE FROM `Snippets` WHERE Username='$name' AND ID='$ID' "); //

header('Location:../pages/mysnippets.php');
　　           } else {
　　　　　　　　//...
          　　 }
　　      } else {
　　　　　　//...
　　      }


// $name=$_SESSION['name'];
// $ID=$_REQUEST['deleteid'];  //制造漏洞

// $connect=mysqli_connect("localhost","root","123456fxf");
// mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库

// mysqli_query($connect,"DELETE FROM `Snippets` WHERE Username='$name' AND ID='$ID' "); //

// header('Location:../pages/mysnippets.php');

?>