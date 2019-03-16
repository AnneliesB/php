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
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
  
</div>

</body>
</html>