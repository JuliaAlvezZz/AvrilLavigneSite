<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Avril Lavigne</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/estilopreview.css" />
		<script type="text/javascript" src="js/scriptpreview.js"></script>
		<link rel="icon" href="imagens/icon.png" type="image/x-icon" />
		<link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
	</head>
	<body>
		<?php
			require_once "php/config.php";
			require_once "php/connection.php";
			require_once "php/database.php";

			session_start();

			$con=DBConnect();

			if(isset($_POST['btSign'])){
				DBSign($con, $_POST['username'], $_POST['password']);
			}

			if(isset($_POST['btLogin'])){
				DBLogin($con, $_POST['username'], $_POST['password']);
			}

			DBClose($con);
		?>
		<video autoplay loop class="bgvideo" poster="imagens/background/background.jpg">
			<source src="videos/preview.mp4" type="video/mp4" />
		</video>
		<div class="titulo">
			<h1>A v r i l L a v i g n e</h1>
			<h2>Head Above Water – Out Now</h2>
		</div>
		<div id="login">
			<form method="post" action="">
					<h2><label for="username">Login:</label></h2>
					<p><label for="username">Username: </label><input type="text" name="username" id="username" size="30" maxlength="45" /></p>
					<p><label for="password">Password: </label><input type="password" name="password" id="password" size="30" maxlength="10" /></p>
					<input type="submit" value="Enter" id="button" name="btLogin"/>
			</form>
			<br/><br/><br/><br/>
			<input type="button" value="Sign Up" id="button" onclick="signUp('login', 'sign');" />
		</div>
		<div id="sign">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<h2><label for="username">Sign up:</label></h2>
					<p><label for="username">Username: </label><input type="text" name="username" id="username" size="30" maxlength="45" /></p>
					<p><label for="password">Password: </label><input type="password" name="password" id="password" size="30" maxlength="10" /></p>
					<input type="submit" value="Sign up" id="button" name="btSign" />
			</form>
			<br/><br/><br/><br/>
			<input type="button" value="Login" id="button" onclick="logIn('login', 'sign');" />
		</div>
	</body>
</html>