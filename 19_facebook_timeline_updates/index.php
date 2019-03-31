<?php
	//Eerst bouwen we onze applicatie uit zodat ze werkt, ook zonder JavaScript

	include_once("bootstrap.php");

	//controleer of er een update wordt verzonden
	if(!empty($_POST))
	{
		try {
			$comment = new Comment();
			$comment->setText($_POST['comment']);
			var_dump($comment->Save());
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	//altijd alle laatste activiteiten ophalen
	$comments = Comment::getAll();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>IMDBook</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">

	</script>
</head>
<body>
<div>
	<div class="errors"></div>

	<form method="post" action="">
		<div class="statusupdates">
		<img src="https://fakeimg.pl/400x200/5921E8/fff?text=I  LOVE PHP, IT'S TRUE" style="max-width: 100%">

		<input type="text" placeholder="What's on your mind?" id="comment" name="comment" />
		<input id="btnSubmit" type="submit" value="Add comment" />

		<ul id="listupdates">
		<?php
			foreach($comments as $c) {
					echo "<li>". $c->getText() ."</li>";
			}

		?>
		</ul>

		</div>
	</form>

</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>
    $("#btnSubmit").on("click", function(e){
        let text = $("#comment").val();

        $.ajax({
            method: "POST",
            url: "ajax/save_comment.php",
            data: { comment: text },
            dataType:'json'
        })
            .done(function( res ) {
                if(res.status =="success"){
                    let li = `<li style='display:none'> ${text} </li>`;
                    $("#listupdates").append(li);
                    $("#comment").val("").focus();
                    $("#listupdates li").last().slideDown();

                }
            });

        e.preventDefault();
    });
</script>
</body>
</html>