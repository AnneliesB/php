<?php

    class Passenger{
        use Json;
        private $firstname;



        public function getFirstname()
        {
            return $this->firstname;
        }

        public function setFirstname($firstname)
        {
            $this->firstname = $firstname;
        }


    }