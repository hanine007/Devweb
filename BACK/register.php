<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header('Location: index.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $check = 'success';
            } else {
                $check = 'error';
            }
        } else {
            $check = 'same_mail';
        }
    } else {
        $check = 'dif_pass';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style_login.css">
	<link rel="stylesheet" href="../CSS/style_menu.css">
	<link rel="icon"  href="../images/favicon.png">

	<title>Register</title>
</head>
<?php include 'succes.php'; ?>
<body>
	<div id="polo"style="display:none;background :red">hello world </div>
	<div class="container" id="cont" style="display:flex">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST[
        'password'
    ]; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST[
        'cpassword'
    ]; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Vous avez deja un compte? <a href="login.php">Login ici</a>.</p>
		</form>
	</div>

	<input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
		    <li><a href="../index.html">Accueil</a></li>
            <li><a href="Location.php">Location</a></li>
            <li><a href="aboutus.html">A propos de nous</a></li>
            <li><a href="contactus.html">Nous contacter</a></li>
            
         </ul>
      </div>
	  
</script>



<script>   

var register_cheack = <?php echo json_encode($check); ?>;
	if(register_cheack =="success")
	{
		document.getElementById("continer").style.display = "flex";
		document.getElementById("cont").style.display = "none";
	}
	else if (register_cheack=="same_mail")
	{
		document.getElementById("continer").style.display = "flex";
		document.getElementById("cont").style.display = "none";
		document.getElementById("croix").innerHTML="X";
		document.getElementById("popup_stat").innerHTML="Erreur";
		document.getElementById("register_p").innerHTML="cet email est déjà utilisé. merci d'en saisir un nouveau";
		document.getElementById("register_btn").innerHTML="réessayer";
		document.getElementById('register_btn').href ="register.php";
		function Redirect() {  window.location="register.php"; } 
    	setTimeout('Redirect()', 4000); }
	else if(register_cheack=="error")
	{
		document.getElementById("continer").style.display = "flex";
		document.getElementById("cont").style.display = "none";
		document.getElementById("croix").innerHTML="X";
		document.getElementById("popup_stat").innerHTML="Erreur";
		document.getElementById("register_p").innerHTML="erreur serveur";
		document.getElementById("register_btn").innerHTML="réessayer";
		document.getElementById('register_btn').href ="register.php";		
	}
	else if(register_cheack=="dif_pass")
	{
		document.getElementById("continer").style.display = "flex";
		document.getElementById("cont").style.display = "none";
		document.getElementById("croix").innerHTML="X";
		document.getElementById("popup_stat").innerHTML="Erreur";
		document.getElementById("register_p").innerHTML="les mots de passe saisis ne sont pas identiques";
		document.getElementById("register_btn").innerHTML="réessayer";
		document.getElementById('register_btn').href ="register.php";		
	}
</script>


</body>
</html>