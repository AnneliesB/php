<?php 
$conn = @new mysqli("localhost", "root", "root", "biertjes");
$result = $conn -> query("select * from breweries where country = 'Belgium'");


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        while($brewery = $result->fetch_assoc()){
            echo "<h3>" . $brewery['name'] . "</h3>";
        }
    
    
    
    ?>
</body>
</html>