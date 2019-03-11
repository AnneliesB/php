<?php 

    function canRegister($email, $password1, $password2){
        if(!isPasswordSecureEnough($password1)){
            return false;
        }

        if (!isEqual($password1, $password2)){
            return false;
        }
        
        return true;
    }

    function isPasswordSecureEnough($password){
        if(strlen($password) < 7){
            return false;
        }
        return true;
    }

    function isEqual($value1, $value2){
        if($value1 != $value2){
            return false;
        }
        return true;
    }


?>