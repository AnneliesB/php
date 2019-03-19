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

<?php include_once("nav.inc.php"); ?>
  <div id="spotify">
  
  <div class="collection">
    <?php foreach($artists as $a): ?>
    <a href="artist.php?id=<?php echo $a['id']; ?>" class="collection__item" style="background-image: url(https://fakeimg.pl/50x50/)">
    <?php echo $a['name']; ?>
    </a>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>