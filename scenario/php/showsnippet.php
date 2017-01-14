<?php
$name1=$_POST['Username'];
session_start();
$_SESSION['allsnippet']=$name1;
header('Location:../pages/allsnippets.php');
exit();

?>