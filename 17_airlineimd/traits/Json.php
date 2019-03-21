<?php

    trait Json{
        public function toJson(){
            $allProperties = get_object_vars($this);
            return json_encode($allProperties); // is zoals json.stringify bij js
        }

        /*public function toJson() : string{
            $allProperties = get_object_vars($this);
            return json_encode($allProperties); // is zoals json.stringify bij js
        }

        andere code met :string betekend dat deze functie alleen strings mag/zal returnen*/
    }