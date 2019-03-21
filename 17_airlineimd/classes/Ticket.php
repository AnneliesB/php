<?php 
    class Ticket{
        protected $seat;
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

        public function book(){
            
            $this->setSeat(rand(1, 60));
            // connectie + query
        }

        public function getTicket(){
            $ticket = "<h3>Firstname: " . $this->getFirstname() . "</h3>";
            $ticket .= "<p>Seat: " . $this->getSeat() . "</p>";
            return $ticket;
        }
    }

