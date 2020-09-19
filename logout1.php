<?php   
ob_start();
session_start();  
session_unset($_SESSION['sess_user']);  
session_destroy();  
header("location:try1.php");  
?>  	