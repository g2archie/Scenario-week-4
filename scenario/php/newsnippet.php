<?php
session_start();
$name=$_SESSION['name'];


$connect=mysqli_connect("localhost","root","123456fxf");
mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库

$snippet=$_POST['snippet'];

$query="SELECT Num FROM num_for_id WHERE Username='$name' ";
$result=mysqli_query($connect,$query)or die(mysqli_error());
$row=mysqli_fetch_row($result);
$ID=$row[0]+1;

$sql = "UPDATE num_for_id SET num_for_id ='$ID' WHERE Username = '$name' ";
    mysqli_query($connect,$sql) or die(mysqli_error());

// $result = mysql_query('SELECT id, badge_name FROM meritbadgestable ORDER BY badge_name');

// while ($row = mysql_fetch_array($result)) 
// {
//     $badgenumber = $row['id'];   


mysqli_query($connect,"INSERT INTO Snippets (Username, snippets,ID) VALUES ('$name','$snippet','$ID')");
header('Location:../pages/home.php');


?>