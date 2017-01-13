<?php
$name=$_POST['Username'];
// echo $name;
session_start();
$_SESSION['allsnippet']=$name;
header('Location:../pages/allsnippets.php');


?>