<?php

$todoitems = [
    [
        "description" => "PHP oefeningen",
        "time" => "2",
        "category" => "school"
    ],
    [
        "description" => "Webtech lab1",
        "time" => "4",
        "category" => "school"
    ],
    [
        "description" => "E-business groepjes vormen",
        "time" => "1",
        "category" => "school"
    ],
    [
        "description" => "kattenbak uitkuisen",
        "time" => "1",
        "category" => "thuis"
    ],
    [
        "description" => "Rozen De Roy",
        "time" => "6",
        "category" => "werk"
    ]
]


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="normalize.css">
    <title>To Do</title>
</head>
<body>

<div class="todo__items">
    <?php foreach($todoitems as $t): ?>
        <p <?php if($t["time"] >=5) {echo 'class="red"';} else if ($t["time"] >=2) {echo 'class="orange"';} else {echo 'class="green"';}?>>
            <strong><?php echo $t["description"];?> (&plusmn; <?php echo $t["time"];?> uur)</strong><br>
            <span><?php echo $t["category"];?></span>
        </p>
    <?php endforeach; ?>

</div>


    
</body>
</html>