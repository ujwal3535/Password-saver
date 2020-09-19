<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">

  <title>Login page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .body{
   
}
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.tag,.fa {cursor:pointer}
.tag {height:15px;width:15px;padding:0;margin-top:6px}

body{
	margin:0;
	padding:0;
     background-image: url(".jpg");
  min-height: 300px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
    background-size: cover;
  
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
.section{margin-top:10px!important;margin-left: 35px!important;margin-bottom:18px!important}
.container:after,.container:before{content:"";display:table;clear:both}
.button{border:none;display:inline-block;padding:8px 8px;margin-left: 350px!important;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
.xlarge{font-size:24px;text-align:center}
.bottombar{border-bottom:6px!important solid #ccc}
.border-dark-grey,.hover-border-dark-grey:hover,.border-dark-gray{border-color:#616161!important}
.padding-16{padding-top:20px!important;padding-bottom:1px!important}

.hd{

    font-style: italic;
    color: red;
    margin-left: 500px;
    

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


</style>-->
	
</head>
<body>
	
 <header>
      <div class="logo">Q&A Website</div>
      <nav class="active">
        <ul>
          <li><a href="aboutus.html" >Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="try1.php" class="active">Login</a></li>
          <li><a href="index.html">Register</a></li>
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

  </div>
</div>
 
  <div class="content" style="max-width:400px;float:center ;margin-left: 160px;margin-top:150px;margin-bottom:80px">   
   <form class="container" action="" method="POST">
   <h2 class="hd"></h2>
    <div class="section">
      <input class="input border hover-border-black" style="width:1000%"; type="text" placeholder="Ask a Question..." name="user" required>
    </div>
    <div class="section">
           </div>
     <button type="submit" class="button block black" value="Search" name="submit">Search
     </button>
  
  </form>
</div>
  
</body>
</html>