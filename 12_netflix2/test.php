<?php 
    
    if(!empty($_POST)){
        $email = $_POST["email"];
        echo "Welcome " . $email;
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">

        <input type="submit" value="Log In">

    </form>


</body>
</html>