<?php 

$concerts = [
    [
        "date" => "THU 18 FEB 2016",
        "band" => "Kula Shaker",
        "opener" => "Oliver Terwagne",
        "description" => "British psych-pop icon is hatching a comeback & a new LP!",
        "time" => "20:00",
        "location" => "AB Club",
        "ticketstatus" => "sold out"
    ],
    [
        "date" => "THU 18 FEB 2016",
        "band" => "Black Box revelation",
        "opener" => "Mo & Grazz",
        "description" => "Glorious return of Black Box to AB!",
        "time" => "20:00",
        "location" => "AB Main Hall",
        "ticketstatus" => "sold out"
    ],
    [
        "date" => "THU 18 FEB 2016",
        "band" => "screening: Pulp: A film about life, death & supermarkets",
        "description" => "Documentary about one of Britpop's most important bands",
        "time" => "20:00",
        "location" => "Huis 23",
        "ticketstatus" => "Full"
    ]
];


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Concert</title>
</head>
<body>
<?php include_once 'nav.inc.php';?>
<div class="concert__items">
    <?php foreach($concerts as $c): ?>
        <p>
            <span><?php echo $c["date"];?></span><br>
            <span><?php echo $c["band"];?></span><br>
            <span><?php if(!empty($c["opener"])){echo $c["opener"]."<br/>";};?></span>
            <span><?php echo $c["description"];?></span><br>
            <span><?php echo $c["time"];?></span>
            <span><?php echo $c["location"];?></span>
            <span><?php echo $c["ticketstatus"];?></span>
        </p>

    <?php endforeach; ?>

</div>
    
</body>
</html>