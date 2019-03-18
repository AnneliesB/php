<?php 
$conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
$id = (int) $_GET['id'];
$statement = $conn -> prepare("SELECT * from albums where artist_id='$id'");
$statement-> execute();
$albumId = $statement->fetch()['id'];
$albums = $statement->fetchAll();

$statement2 = $conn -> prepare("SELECT * from tracks where album_id='$albumId'");
$statement2 -> execute();
$tracksId = $statement->fetch()['album_id'];
$tracks = $statement->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="indexstyle.css">
  <title>IMDFlix</title>

</head>
<body>
  
  <div id="spotify">

    <div class="albumCollection">
      <div class="albums">
        <?php foreach($albums as $a): ?>
          <div>
            <h3> <?php echo $a['title']; ?></h3>
            <img src="<?php echo $a['cover']; ?>" alt="#">  
            <?php foreach($tracks as $t): ?>

                <?php if($tracksId == $albumId) : ?>
                    <p><?php echo $t['title']; ?></p>
                <?php endif; ?>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
  
</div>

</body>
</html>