<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../CSS/main.css">
	<meta charset="utf-8">
	<title>Bookcars</title>
</head>
<body>
	<header>
	<h1 ><a class="logobc" href="index.php"><span class="B">B</span>ook<span class="C">C</span>ars</a></h1>
	<nav>
	<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="Location.php">Location</a></li>
			<li><a href="../HTML/aboutus_user.html">À propos </a></li>
			<li><a href="../HTML/contactus_user.html">Nous contacter</a></li>
		</ul>
		
	</nav>
	<div class="button" dir="">
		<button class="nav_btn"><a >WELCOME</a></button>
		<button style="background-color:rgb(209, 0, 0)"><a><?php echo $_SESSION["username"] ?></a></button>
		<a href="logout.php"><img class="parametres_compte_info" src="../images/cog-solid.svg"></a>
	</div>
	
		
	</header>

</html>