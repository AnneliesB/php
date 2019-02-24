<?php

$checkins = [
    [
        "image" => '<img src="https://fakeimg.pl/50x50/">',
        "username" =>"Jesse", 
        "name-location" =>"Assembly 3.0",
        "place" => "San Francisco, CA",
        "distance" => "3",
        "time" => "7m"
    ],
    [
        "image" => '<img src="https://fakeimg.pl/50x50/">',
        "username" =>"Michal", 
        "name-location" =>"Voxer",
        "place" => "San Francisco, CA",
        "distance" => "18",
        "time" => "12m"
    ],
    [
        "image" => '<img src="https://fakeimg.pl/50x50/">',
        "username" =>"Petr", 
        "name-location" =>"ROXY/NoD",
        "place" => "Praque, Czech Republic",
        "distance" => "125",
        "time" => "25m"
    ],
    [
        "image" => '<img src="https://fakeimg.pl/50x50/">',
        "username" =>"Jaroslav", 
        "name-location" =>"Brno hlavni nadrazi",
        "place" => "Brno, Czech Republic",
        "distance" => "225",
        "time" => "40m"
    ],
    [
        "image" => '<img src="https://fakeimg.pl/50x50/">',
        "username" =>"Jesse", 
        "name-location" =>"The Mill",
        "place" => "San Francisco, CA",
        "distance" => "5",
        "time" => "1h"
    ]
];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swarm</title>
</head>
<body>
<header>
    <?php include_once 'header.inc.php';?>
</header>

<div class="post__checkins">

            <?php foreach($checkins as $c): ?>
            <div class="container">
                <div class="user--image"><?php echo $c["image"]; ?></div>
                <div>
                    <p class="post__checkin">
                        <strong><?php echo $c["username"]; ?></strong><br>
                        <span class="focus"><?php echo $c["name-location"]; ?></span><br>
                        <span class="subtle"><?php echo $c["place"]; ?></span>
                    </p>
                </div>
                <div class="checkin--time"><?php echo $c["time"]; ?></div>
            </div>
            <?php endforeach; ?>

        </div>
    
</body>

<footer>
<?php include_once 'footer.inc.php';?>
</footer>
</html>