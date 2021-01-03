<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:Logout.php');
}
?>
<html>

<body>
	<!--Start Nav bar and menu bar -->
<header>
	
	<title>Homepage</title>
<style >
	/* Global*/
.container{
	width: 80%;
	margin: auto;
	overflow: hidden;

}
 .main-nav ul{
	list-style: none; 
}


/* Header**/

header{
	background: black;
	color: #ffffff;
	padding-top: 30px;
	min-height: 70px;
	border-bottom: #32CD32 3px solid;
	position: sticky; /* For fix header*/
	top: 0px; /* For fix header*/
}
header .main-nav a{
	color: #ffffff;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 16px;

}

.main-nav ul li{
	float: left;
	padding: 0 20px 0 20px;

}

header #branding{
	float: left;

}
header #branding h1{
	margin: 0;
}
header nav{
	float: right;
	margin-top: 10px;

}
header .red{
	color: white;
}
header .highlight,header .current a{
	color: #32CD32;
font-size: 30px;
	font-weight: bold;
}
header a:hover{
	color: #32CD32;
	font-weight: bold;

}
*{
	font-family: Arial, Helvetica,sans-serif;
	font-size: 15px;
	
	padding: 0;
	margin: 0;
	

}
.middle h1{
	text-align: center;
	height: 200px;
	padding-top: 70px;
	background-color: white;
	color: black;
}
</style>
</head>
<body>
	<header>
	<div class="container">
		<div id="branding">
			<h1><span class="highlight">BD</span> <span class="red">OLYMPIAD NEWS</span></h1>
		</div>
		<nav>
			<div class="main-nav">
			<ul>
				
			<li><a href="index.html">HOME</a></li>
				<li><a href="AboutUs.html">ABOUT </a></li>
				<li ><a href="section_.html">SECTION</a>
				</li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="http://localhost/BDOlympiadNews/ContactUs.php"">CONTACT US</a></li>
				<li><a href="http://localhost/BDOlympiadNews/logoutt.php">LOG OUT</a></li>
				</div>
			</ul>
		</nav>
</div>
</header>

	<div class="middle">
		
	<a href="logoutt.php"> </a>
<h1>Welcome <?php echo $_SESSION ['username']; ?> </h1>
	</div>



</body>
</html>

