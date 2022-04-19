<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: index.php');
    } else {
			$message = False; 
		  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="icon"  href="../images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../CSS/style_login.css">
	<link rel="stylesheet" href="../CSS/style_menu.css">

	<title>Login</title>
</head>
<?php include 'succes.php'; ?>
<body>
	<div id="cont" class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST[
        'password'
    ]; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Vous n'avez pas un compte? <a href="register.php">Inscrivez-vous ici</a>.</p>
		</form>
	</div>

	<input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
			<li><a href="../index.html">Accueil</a></li>
            <li><a href="Location.php">Location</a></li>
            <li><a href="../HTML/aboutus.html">A propos de nous</a></li>
            <li><a href="../HTML/contactus.html">Nous contacter</a></li>
            
         </ul>
      </div>
	
<script>
	var register_cheack = <?php echo json_encode($message); ?>;
	if(register_cheack==false){
		document.getElementById("continer").style.display = "flex";
		document.getElementById("cont").style.display = "none";
		document.getElementById("croix").innerHTML="X";
		document.getElementById("popup_stat").innerHTML="Erreur";
		document.getElementById("register_p").innerHTML="votre mot de passe est incorrect. veuillez le vérifier";
		document.getElementById("register_btn").innerHTML="réessayer";
		document.getElementById('register_btn').href ="login.php";		
	}
</script>
</body>
</html>