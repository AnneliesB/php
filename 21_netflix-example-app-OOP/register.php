<?php
    include_once("classes/User.class.php");
    include_once("helpers/Security.class.php");
    
    if( !empty($_POST) ){
        try
        {
            $security = new Security();
            $security->password = $_POST['password'];
            $security->passwordConfirmation = $_POST['password_confirmation'];

            if( $security->passwordsAreSecure() ){
                $user = new User();        
                $user->setEmail( $_POST['email'] );
				$user->setPassword( $_POST['password'] );
				if( $user->register() ) {
					$user->login();
				}
			}
			else {
				$error = "Your passwords are not secure or do not match.";
			}
        }
        catch(Exception $e) {
			$error = $e->getMessage();
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
	<div class="netflixLogin netflixLogin--register">
		<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign up for an account</h2>


				<div>
					<p class="availabilityCheck">

					</p>
				</div>


				<div class="form__field">
					<label for="email">Email<span class="form__hint"></span></label>
					<input value="" type="text" id="email" name="email">
				</div>
				<div class="form__field">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				</div>

                <div class="form__field">
					<label for="password_confirmation">Confirm your password</label>
					<input type="password" id="password_confirmation" name="password_confirmation">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign me up!" class="btn btn--primary">	
				</div>
			</form>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/imdflix.js"></script>
</body>
</html>