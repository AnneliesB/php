<?php 
    class Ticket{
        private $seat;
        private $firstname;

        
        public function getSeat()
        {
                return $this->seat;
        }

        private function setSeat($seat)
        {
                $this->seat = $seat;

                return $this;
        }

        public function getFirstname()
        {
                return $this->firstname;
        }

        public function setFirstname($firstname)
        {
                $this->firstname = $firstname;

                return $this;
        }
    }

