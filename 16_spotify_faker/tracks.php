<?php 
$conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
$id = (int) $_GET['id'];
$statement = $conn -> prepare("SELECT * from tracks where album_id='$id'");
$statement-> execute();
$tracks = $statement->fetchAll();

$statement2 = $conn->prepare("SELECT title from albums where id = '$id'");
$statement2-> execute();
$albumTitle = $statement2->fetch()['title'];

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="indexstyle.css">
  <title>Spotify Faker</title>

</head>
<body>
  
<?php include_once("nav.inc.php"); ?>

  <div id="spotify">

    <div class="albumCollection">
      <div class="albums">
        <h3> <?php echo $albumTitle; ?></h3>
        <?php foreach($tracks as $t): ?>
            <ul>
                <li> <?php echo $t['title']; ?></li>
            </ul>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
  
</div>

</body>
</html>