<?php
	
	include_once("bootstrap.php");
	$posts = Post::getAll();

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Become a fan</title>
	<style>
	body{background-color: #e9eaed;font-family: Helvetica, Arial, 'lucida grande',tahoma,verdana,arial,sans-serif;}
	article{background-color: #fff;font-size: 15px; padding: 0.5em;width: 300px; margin-bottom: 1em;}
	article div{color: #3b5998;}
	</style>
</head>
<body>
	
	<?php foreach($posts as $post): ?>
	<article>
		<p><?php echo $post->text; ?></p>
		<img src="http://dummyimage.com/300x200/5921E8/fff" alt="">
		<div><a href="#" data-id="<?php echo $post->id ?>" class="like">Like</a> <span class='likes'><?php echo $post->getLikes(); ?></span> people like this </div>
	</article>
	<?php endforeach; ?>

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	<script>
		$("a.like").on("click", function(e){
		    let postId = $(this).data("id");
		    let link = $(this);

            $.ajax({
                method: "POST",
                url: "ajax/like.php",
                data: { postId: postId },
                dataType: 'json'
            })
                .done(function( res ) {
                    if(res.status == "success"){
                        let likes = link.next().html();
                        likes ++;
                        link.next().html(likes);
                        console.log(likes);
                    }
                });

		    e.preventDefault();
        });
	</script>






</body>
</html>