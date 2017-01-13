<?php
$name=$_POST['Username'];
session_start();
$_SESSION['allsnippet']=$name;
header('Location:../pages/allsnippets.php');


?>