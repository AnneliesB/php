<?php
  
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
 
  <h2>My List</h2>

  <div class="collection myList">
    
    <a href="details.php?id=<?php  ?>" class="collection__item" style="background-image: url(<?php  ?>)"></a>
    
  </div>
  
</div>

</body>
</html>