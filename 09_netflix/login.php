<?php 

	function canLogin($email, $password){
		if($email != "spammelies@spam.com" || $password != "binge"){
			return false;
		}else{
			return true;
		}
	};

	if(!empty($_POST)){
		// zodra we iets verzonden hebben, gaan we de volgende code uitvoeren
		$email = $_POST['Email'];
		$password = $_POST['Password'];

		if (canLogin($email, $password)){
			// als canLogin true is, of niet vals, voeren we de code uit
			header("Location: index.php");
			// eens we zijn ingelogd naar de index pagina redirecten
		} else{
			$error = true;
		}
	}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="netflixLogin">
		<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign In</h2>

				<!-- enkel als de $error variabele bestaat willen we de div tonen, anders gaat deze een foutmelding laten zien -->
				<?php if(isset($error)): ?>
					<div class="form__error">
						<p>
							Sorry, we can't log you in with that email address and password. Can you try again?
						</p>
					</div>
				<?php endif;?>
				


				<div class="form__field">
					<label for="Email">Email</label>
					<input type="text" name="Email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
					<input type="password" name="Password">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign in" class="btn btn--primary">	
					<input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
				</div>
			</form>
		</div>
	</div>


</body>
</html>