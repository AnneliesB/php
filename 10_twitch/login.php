<?php 
	function canLogin($email, $password){
		if($email != "spammelies@spam.com" || $password != "spam"){
			return false;
		}else{
			return true;
		}
	};
	if( !empty( $_POST ) ){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if( canLogin($email, $password) ) {
			session_start();
			$_SESSION['user'] = true;
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
    <link rel="stylesheet" href="style.css">
    <title>Twitch</title>
</head>

<body>

<header>
  <?php include_once("nav.inc.php");?>
</header>

<div id="app">
    <h1>Log in to Twitch</h1>
    <nav class="nav--login">
        <a href="#" id="tabLogin">Log in</a>
        <a href="#" id="tabSignIn">Sign up</a>
    </nav>

    <?php if(isset($error)): ?>
        <div class="alert">That password was incorrect. Please try again</div>
    <?php endif;?>

  <form action="" method="post">
        <div class="form form--login">
            <label for="username">Username</label>
            <input type="text" id="username" name="email">
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="form form--signup hidden">
            <label for="username2">Username</label>
            <input type="text" id="username2">
        
            <label for="password2">Password</label>
            <input type="password" id="password2">
            
            <label for="email">Email</label>
            <input type="text" id="email">
        </div>
        

        <input type="submit" value="Log In" class="btn" id="btnSubmit">	
  </form>
</div>

</body>

</html>