<?php 
$conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
$statement = $conn -> prepare("SELECT * from artists");
$statement-> execute();
$artists = $statement->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Spotify Faker</title>
</head>
<body>
  <div id="spotify">
  
  <div class="collection">
    <?php foreach($artists as $a): ?>
    <a href="details.php?id=<?php echo $a['id']; ?>" class="collection__item" >
    <?php echo $a['name']; ?>
    </a>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>