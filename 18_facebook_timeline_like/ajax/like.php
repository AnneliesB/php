<?php
    include_once ("../bootstrap.php");
    if(!empty($_POST)){
        $postId= $_POST["postId"];
        $userId = 1;

        $l = new Like();
        $l->setPostId($postId);
        $l->setUserId($userId);
        $l->save();

        $result = [
            "status" => "success",
            "message" => "Like was saved"
        ];

        echo json_encode($result);
    }

