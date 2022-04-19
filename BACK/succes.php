<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

	<link rel="stylesheet" type="text/css" href="../CSS/succes_style.css">
	

	<title>Register</title>
</head>

<body>
	<div id="continer" style="display:none" class="containers">
		<div class="top-card">
			<span id="croix" class="circle-check">✓</span>
			<h3 id='popup_stat'>succés</h3>
		</div>
		<p id="register_p">félicitations! votre compte est crée avec succés</p>
		<a id="register_btn" href="login.php" class="btn-continue">Continuer</a>


	</div>

</body>

</html>