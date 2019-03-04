<?php if(isset( $_SESSION['user'])): ?>

    <nav class="nav">
        <a href="#">Browse</a>
        <a href="#">Get desktop</a>
        <a href="#">Try prime</a>
        <a href="#" class="loggedIn">
        <div class="user--avatar"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387" alt=""></div>
        <h3 class="user--name">Username here</h3>
        <span class="user--status">Watching dakotaz</span>
        </a>
        <a href="logout.php">Log out?</a>
    </nav> 
  
  <?php endif;?>
