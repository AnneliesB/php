<?php

include_once ("../bootstrap.php");
if(!empty($_POST)){
    $email = $_POST['email'];
    // de comment uit de post komt uit de ajax en niet de name van het inputveld

    try{
        $u = new Users();
        $u->setEmail($email);
        $c->getEmailDb();

        if($result->num_rows == 0){
            $result = [
                "status" => "success",
                "message" => "Email is available"
            ];
        }
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