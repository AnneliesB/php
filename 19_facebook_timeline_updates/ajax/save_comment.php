<?php

    include_once ("../bootstrap.php");
    if(!empty($_POST)){
        $comment = $_POST['comment'];
        // de comment uit de post komt uit de ajax en niet de name van het inputveld

        try{
            $c = new Comment();
            $c->setText($comment);
            $c->save();

            $result = [
                "status" => "success",
                "message" => "Like was saved"
            ];
            
            // success
        }
        catch(Throwable $t){
            $result = [
                "status" => "error",
                "message" => "Like went wrong"
            ];
            // error
        }

    echo json_encode($result);

    }