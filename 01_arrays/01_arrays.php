<?php

$comments = [
    [
        "username" =>"Billie", 
        "comment" =>"muisjes vangen  🐭"
    ],
    [
        "username" =>"Poes", 
        "comment" =>"Billie aanvallen 🐱"
    ]
];

//echo $comments [1] ["username"]; => echo nooit voor doctype
// uit array 1 de username ophalen

// var_dump ($comments);
// controle op welke info in array zit, enkel voor dev




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <div class="post">
        <div class="post__image">
            <img src="https://fakeimg.pl/250x250/">
        </div>

        <div class="post__comments">

            <?php foreach($comments as $c): ?>
            
            <p class="post__comment">
                <strong><?php echo $c["username"]; ?></strong>
                <span><?php echo $c["comment"]; ?></span>
            </p>

            <?php endforeach; ?>

        </div>
    </div>

</body>
</html>
