<?php 
$conn = new PDO("mysql:host=localhost;dbname=netflix", "root", "root");
$statement = $conn -> prepare("select * from collection");
$statement-> execute();
$collection = $statement->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <div id="netflix">
  <?php include_once("nav.inc.php"); ?>
  
  <div class="collection">
    <?php foreach($collection as $c): ?>
    <a href="details.php?id=<?php echo $c['id']; ?>" class="collection__item" style="background-image: url(<?php echo $c['poster']; ?>)">
    </a>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>