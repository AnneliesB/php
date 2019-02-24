<?php 
   $page = basename($_SERVER['SCRIPT_NAME']); 
   
   //echo $page;
   
   ?>
   
   
   
    <nav>
        <a href="home.php" <?php if($page == 'home.php') {echo 'class="current"';}?>>home</a>
        <a href="contact.php" <?php if($page == 'contact.php') {echo 'class="current"';}?>>contact</a>
    </nav>
