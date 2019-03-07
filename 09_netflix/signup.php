<?php 
    include_once('functions.inc.php');
    // mysql commando's zijn verouderd, dus blijf ervan weg! mysqli is wel goed

    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST["password_confirmation"];

        if (canRegister($email, $password, $passwordConfirmation)){
            $conn = @new mysqli("localhost", "root", "root", "netflix");
            // @ symbool voor de functie zorgt ervoor dat errors onderdrukt worden
            // zo kunnen hackermans niet aan uw errors en geef je geen info prijs ✌️

            if(!$conn -> connect_errno == 0){
                die ("ai kapot 😭");
            }
            //var_dump($conn);
            // laat zien of connectie geslaagd is: ["connect_errno"]=> int(0) 
            $password = md5($password);
            $sql = "insert into users (email, password) values ('$email', '$password')";
            $result = $conn ->query($sql);
            var_dump($result);
        } else {
            echo "🔫";
        }

        
    }



?><html lang="en">
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

				<div class="form__error hidden">
					<p>
						Some error here
					</p>
				</div>

				<div class="form__field">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">
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
</body>
</html>