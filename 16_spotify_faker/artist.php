<?php 
$conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
$id = (int) $_GET['id'];
$statement = $conn -> prepare("SELECT * from albums where artist_id='$id'");
$statement-> execute();
$albums = $statement->fetchAll();

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
        <?php foreach($albums as $a): ?>
          <a href="tracks.php?id=<?php echo $a['id']; ?>" class="artistLink">
            <h3> <?php echo $a['title']; ?></h3>
            <img src="<?php echo $a['cover']; ?>" alt="#">  
          </a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
  
</div>

</body>
</html>