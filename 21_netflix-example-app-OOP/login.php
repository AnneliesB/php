<?php
	include_once("functions.inc.php");
	
	// get user and password from POST
	if( !empty($_POST) ) {
		$username = $_POST['email'];
		$password = $_POST['password'];

		// check if user can login (use function)
		if( canILogin($username, $password) ) {
			session_start();
			$_SESSION['username'] = $username;

			// if ok -> redirect to index.php
			header('Location: index.php');
		}
		else {
			$error = "Login failed";
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

				<?php if( isset($error) ): ?>
				<div class="form__error">
					<p>
						Sorry, we can't log you in with that email address and password. Can you try again?
					</p>
				</div>
				<?php endif; ?>

				<div class="form__field">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">
				</div>
				<div class="form__field">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
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