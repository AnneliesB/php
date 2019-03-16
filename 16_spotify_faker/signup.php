<?php 
include_once("classes/User.class.php");
include_once("Security.class.php");
if(!empty($_POST)){
    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setPasswordConfirmation($_POST['passwordConfirmation']);
    $user->register();
    header("Location: index.php");
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

        <a href="#" class="btnFb">SIGN UP WITH FACEBOOK</a>
    </div>
    <div class="container">
        <form action="" method="post">

            <div class="form__field">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email">
            </div>

            <div class="form__field">
                <label for="password">PASSWORD</label>
                <input type="text" id="password" name="password">
            </div>

            <div class="form__field">
                <label for="passwordConfirmation">PASSWORD CONFIRMATION</label>
                <input type="text" id="passwordConfirmation" name="passwordConfirmation">
            </div>

            <div class="form__field">
                <input type="submit" value="Sign up">
            </div>
        
        </form>
    </div>
</div>
    
</body>
</html>