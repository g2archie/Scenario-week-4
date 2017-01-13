<?php
$name1=$_POST['Username'];
session_start();
if($_SESSION['checked']=="" || $_SESSION['checked']==false){
    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../pages/signin.html"."\""."</script>";
}
$_SESSION['allsnippet']=$name1;
header('Location:../pages/allsnippets.php');


?>