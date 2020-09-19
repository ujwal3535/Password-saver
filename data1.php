<?php
session_start(); // needs to be added here
if(!isset($_SESSION["sess_user"])){  
    header("location:try1.php");  
} else {  

?>
<?php
     $domain=$_POST['domain'];
     $Email=$_POST['email'];
     $Pass=$_POST['pass'];
     $User=$_SESSION['sess_user'];
     $servername = "localhost";
     $username="root";
     $passsword="";
     $dbname="database3";
     $conn=new mysqli($servername,$username,$passsword,$dbname);
     if($conn->connect_error)
     {
      die('Connection Failed : '.$conn->connect_error);
     }else{
     $stmt = $conn->prepare ("INSERT INTO data(username,domain,email,password) VALUES(?,?,?,?)");
     $stmt->bind_param("ssss",$User,$domain,$Email,$Pass);
     $stmt->execute();
     $stmt->store_result();
     echo"New Record Created";
      
     $stmt->close();
     }
     $conn->close();
 }  
     header('Location: get.php');
?>