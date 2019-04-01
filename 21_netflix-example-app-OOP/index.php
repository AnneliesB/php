<?php
  session_start();
  include_once("classes/Item.class.php");
  include_once("classes/User.class.php");

  User::checkLogin();

  $collection = Item::getAll();


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
    <a href="details.php?watch=<?php echo $c['id']; ?>" class="collection__item" style="background-image: url(<?php echo $c['poster']; ?>)">
    </a>
    <?php endforeach; ?>
  </div>
  
</div>

</body>
</html>