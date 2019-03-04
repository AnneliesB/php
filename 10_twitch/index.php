<?php 
    session_start();
    if( isset( $_SESSION['user']) ){
      // ☀️
    } else {
      // GA MAAR WEG
      header('Location: login.php');
    }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
    <header>
        <?php include_once("nav.inc.php"); ?>
    </header>


    <?php if(isset( $_SESSION['user'])): ?>
        <div class="welcome">
            <p>Welcome to Twitch! Start watching!</p>
        </div>
    <?php endif;?>


</body>
</html>