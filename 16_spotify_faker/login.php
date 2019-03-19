<?php
    if(!empty($_POST)){
        $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
        $email = $_POST['email'];
        $password = $_POST['password'];

        $statement = $conn->prepare("select * from users where email = :email");
		$statement->bindParam(":email", $email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if(password_verify($password,$user['password'])){
            header("Location: index.php");
        } else {
            $error = true;
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify Faker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <div class="top">
        <a href="#" class="logo"><img src="logo.png" alt="#"></a>

        <a href="#" class="btnFb">LOGIN WITH FACEBOOK</a>

        <?php if (isset($error)): ?>
            <div class="form__error">
                <p>
                    Sorry, we can't log you in with that email <br> address and password. Can you try again?
                </p>
            </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <form action="" method="post">

            <div class="form__field">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email">
            </div>

            <div class="form__field">
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form__field">
                <input type="submit" value="Login">
            </div>
        
        </form>
    </div>
</div>
    
</body>
</html>