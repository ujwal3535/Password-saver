<!DOCTYPE html>
<html>
<head>
     <title>website</title>
     <style type="text/css">
     	.table{
     		border-collapse:collapse;
     		width:100%;
     		color:#588c7e;
     		font-family: geneva;
     		font-style: italic;
     		font-size: 100px;
     		text-align: center; 
     	}
     	th{
     		background-color: #588c7e;
     		color:white;
     	}

     </style>
</head>
<body>
	<table>
		<tr>
			<th>Domain</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  domain,email,pass FROM data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["domain"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    }
} else {
    echo "0 results";
}
	
mysqli_close($conn);
   //header('Location: data1.php');
?>
</table>
</body>
</html>