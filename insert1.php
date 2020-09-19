<?php
ob_start(); // needs to be added here
?>
<!DOCTYPE html>
<html>
<head>
     <title>website</title>
</head>
<body>
<?php
     $firstname=base64_encode($_POST['firstname']);
     $lastname=base64_encode($_POST['lastname']);
     $Email=base64_encode($_POST['email']);
     $Gender=base64_encode($_POST['gender']);
     $user=$_POST['username'];
     $pass=$_POST['password'];
     $servername = "localhost";
     $username="root";
     $passsword="";
     $dbname="database3";
     $conn=new mysqli($servername,$username,$passsword,$dbname);
     if($conn->connect_error)
     {
      die('Connection Failed : '.$conn->connect_error);
     }else{
     $stmt = $conn->prepare ("INSERT INTO registerfirst(firstname,lastname,Email,Gender,username,password) VALUES(?,?,?,?,?,?)");
     $stmt->bind_param("ssssss",$firstname,$lastname,$Email,$Gender,$user,$pass);
     $stmt->execute();
     $stmt->store_result();
     echo"New Record Created";
      
     $stmt->close();
     }
     $conn->close();
         header('Location: try1.php');
?>
</body>
</html>