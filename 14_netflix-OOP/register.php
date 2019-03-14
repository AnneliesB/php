<?php
	if(!empty($_POST)){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConfirmation = $_POST['password_confirmation'];
		
		$conn = new PDO("mysql:host=localhost;dbname=netflix", "root", "root");
		$statement = $conn -> prepare("insert into users (email, password) values(:email, :password)");
		$statement->bindParam(":email" , $email);
		$statement->bindParam(":password" , $password);
		$result = $statement->execute();
		var_dump($result);

		/* 
		prepare met query tussen
		gewoon als values ('test', 'test') of ($email, 'test') gebruiken is nog steeds onveilig
		(:email, :password) is veiliger, hier gebruiken we placeholders die we later kunnen invullen
		de verantwoordelijkheid van de query is minder groot

		$statement->bindParam(":email" , $email);
		eerste plaats waar we iets willen binden :email en dan de variabele die we erin willen stoppen
		dit doet nog niets tot we het statement uitvoeren, de waarde kan dus nog veranderen voor we de query uitvoeren

		bindValue gaat meteen de waarde die we in $email steken in de :email steken

		bindParam:
		$statement = $conn -> prepare("insert into users (email, password) values(:email, :password)");
		$statement->bindParam(":email" , $email);
		$email = "test@test.com";
		$statement->execute();

		=> uitkomst is "test@test.com"

		bindValue:
		$statement = $conn -> prepare("insert into users (email, password) values(:email, :password)");
		$email = "chareltje@hotmail.com"
		$statement->bindParam(":email" , $email);
		$email = "test@test.com";
		$statement->execute();

		=> uitkomst is "chareltje@hotmail.com"
		*/
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