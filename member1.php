<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:try1.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
 <style type="text/css">
      h2{
      	text-align: center;
      	font-family: geneva;
      	font-size: 200%;
      	color:red;
      	font-style:italic;
      }	
      .table{
        text-align:  center;
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
body{
  margin:0;
  padding:0;
  font-family:sans-serif;
    box-sizing: border-box;
  background-attachment: fixed;
  background-position: center;
}
header{
  position:absolute;
  top: 0;
  left:0;
  padding: 0 100px;
  background:#262626;
  width: 100%;
  box-sizing:border-box;

}
header .logo{
  color: red;
  height:50px;
  line-height: 50px;
  font-size: 24px;
  float: left;
  font-weight: bold;
}
header nav{
  float: right;
}
header nav ul{
  margin: 0;
  padding: 0;
  display: flex;
}
header nav ul li a{
  height:50px;
  line-height:50px;
  padding:0 20px;
  color:#fff;
  text-decoration: none;
  
}
header nav ul li a:hover,
header nav ul li a.active{
color:#fff;
background: red;

}
.menu-toggle{
 color:white;
 float:right;
 line-height: 50px;
 font-size: 24px;
 cursor:pointer;
 display:none;  
}

@media(max-width:991px)
{
  header
  {
    padding:0 20px;
  }
  .menu-toggle{
    display:block;


  }
  header nav
  {
      position:absolute;
      width:100%;
      height:calc( 100vh-50px);
      background: #333;
      top:50px;
      left:-100%;
      transition: 0.5s;
  }
  header nav.active{
    left: 0;
  }
  header nav ul{
    display: block;
    text-align: center;
  }
  header nav ul li a{
    border-bottom: 1px solid rgba(0,0,0,0.2);
  }


.container,.panel{padding:0.01em 16px}.panel{margin-top:8px;margin-left:-500px ;margin-right: 16px;margin-bottom:16px}
.content,.auto{margin-left:auto;margin-right:auto}.content{max-width:500px}.auto{max-width:1140px}


}
.black,.hover-black:hover{
  color:#fff!important;
  background-color:#000!important}
.block{
  display:block;width:100%}
.button{
  border:none;
  display:inline-block;
  padding:8px 16px;
  vertical-align:center;
  overflow:hidden;
  text-decoration:none;
  color:inherit;
  background-color:inherit;
  text-align:center;
  cursor:pointer;
  white-space:nowrap}




.input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
.border{border:1px solid #ccc!important}
.hover-border-black:hover{border-color:#000!important}
.section{margin-top:0px!important;margin-left: 350px!important;margin-bottom:18px!important}
.container:after,.container:before{content:"";display:table;clear:both}
.button{border:none;display:inline-block;padding:8px 8px;margin-left: 350px!important;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
.xlarge{font-size:24px;text-align:center}
.bottombar{border-bottom:6px!important solid #ccc}
.border-dark-grey,.hover-border-dark-grey:hover,.border-dark-gray{border-color:#616161!important}
.padding-16{padding-top:0px!important;padding-bottom:1px!important}

.hd{

    font-style: italic;
    padding: 20px 20px ;
    color: red;
    margin-left: -50px;
    margin-top: 40px;
    float: below; 

}
.user{
    font-style: italic;
    padding: 20px 20px ;
    color: red;
    margin-left:-50px;
    margin-top: -60px;
    float: below; 

}
 ul{
  list-style-type: none;
  float:center;
  margin-top:  0%;
  margin-left: 10% ;
  border-radius:5%;
  line-height: 200%;
  
  border-width: 100%;
  border:block 3% outset;

}

ul li{
  display: inline-block;
}
ul li a{
  text-decoration: none;
  color:white;
  padding:5% 10%;
  border:3px solid transparent;
  transition:0.6s ease;
  background-color: black;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
} 
ul li a:hover{
  background-color:red;
  color: black;
}
</style>
</head>  
<body>
       <header>
      <div class="logo">PassVault</div>
      <nav class="active">
        <ul>
          <li><a href="try1.php" class="active" >Logout</a></li>
         
        </ul>
      </nav>
      <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </header>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
 ></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('.menu-toggle').click(function(){
      $('nav').toggleClass('active')
    })
  })
 </script>
 <div class="body"></div> 
     <h2 class="hd">Welcome</h2>
     <h2 class="user">User:<?=$_SESSION['sess_user']?></h2><br><br>
 <div class="content" style="max-width:400px;float:center;margin-left: 150px ;margin-top:-40px;margin-bottom:80px">   
   <form class="container" action="" method="POST" >
   
    <div class="section">
      <input class="input border hover-border-black" style="width:750%"; type="text" placeholder="Domain" name="domain" required>
    </div>
        <div class="section">
      
      <input class="input border hover-border-black" style="width:750%;" type="email" placeholder="Email" name="email" required>
    </div>
    <div class="section">
       <input class="input border hover-border-black" style="width:750%;" type="Password" placeholder="Password" name="pass" required>
    </div>
     <button type="submit" class="button block black" value="Save" name="submit">Save</button>
  
  </form>
</div>
<!--<?php
//session_start(); // needs to be added here
if(!isset($_SESSION["sess_user"])){  
    header("location:try1.php");  
} else {  

?>-->
<?php
       if(empty(isset($_POST['domain']))||empty(isset(($_POST['email'])))||empty(isset(($_POST['pass'])))||empty(isset(($_SESSION['sess_user'])))){
                echo"";
       }else{

          
     $domain=base64_encode($_POST['domain']);
     $Email=base64_encode($_POST['email']);
     $Pass=base64_encode($_POST['pass']);
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
   
 
     //header('Location: get.php');
    }
?>
 <table align="center">
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
$User=$_SESSION['sess_user'];
$name2 = mysqli_connect($servername, $username, $password, $dbname);
if (!$name2) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($name2,"SELECT * FROM data WHERE username='".($User)."'");

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){ 
    echo "<tr><td>".base64_decode($row["domain"])."</td><td>".base64_decode($row["email"])."</td><td>".base64_decode($row["password"])."</td></tr>";
    }
} else {
    echo "0 results";
}
	
   //header('Location: data1.php');
?>
</table>
</body>  
</html>
<?php
}
}
?>