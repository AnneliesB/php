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
  
  <div class="collectionDetails" style="background-image: linear-gradient(to right, rgba(0,0,0,1) 0%,rgba(255,255,255,0) 100%), url(<?php echo $c['poster']; ?>)">
    <h1 class="collectionDetails__title"><?php echo $c['title']; ?></h1>
    <p class="collectionDetails__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
  
    <form action="" method="post">
    <input type="hidden" name="collectionId" value="<?php echo $id ?>">
    <input class="btn btn--primary" name="btnAdd" type="submit" value="Add to list">
    </form>

  </div>
  
</div>

</body>
</html>