<?php
session_start();
if($_SESSION['checked']=="" || $_SESSION['checked']=="false"){
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../pages/signin.html"."\""."</script>";
}
$name=$_SESSION['name'];


$connect=mysqli_connect("localhost","root","123456fxf");
mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); //链接到Scenario4数据库

$snippet=$_POST['snippet'];

$query="SELECT Num FROM num_for_id WHERE Username='$name' ";
$result=mysqli_query($connect,$query)or die(mysqli_error());
$row=mysqli_fetch_row($result);
$ID=$row[0]+1;

$sql = "UPDATE num_for_id SET Num ='$ID' WHERE Username = '$name' ";
mysqli_query($connect,$sql) or die(mysqli_error());
 


mysqli_query($connect,"INSERT INTO Snippets (Username, snippets,ID) VALUES ('$name','$snippet','$ID')");
header('Location:../pages/mysnippets.php');


?>
=======
?>


<script type="  text/javascript  ">



function html_encode(str)  
{  
  vars ="$snippet";  
  if(str.length == 0)return"";  
  s = str.replace(/&/g,"&amp;"); 
  s = s.replace(/</g,"&lt;");  
  s = s.replace(/>/g,"&gt;");  
  s = s.replace(/ /g,"&nbsp;");  
  s = s.replace(/\'/g,"&#39;");  
  s = s.replace(/\"/g, "&quot;");  
  s = s.replace(/\n/g, "<br>");  
  return s;  
}  

</script>


?>
>>>>>>> origin/buggedversion
