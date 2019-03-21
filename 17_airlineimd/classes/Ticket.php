<?php
    class Ticket implements iTicket {
        protected $seat;
        private $passenger;


        public function getSeat()
        {
                return $this->seat;
        }

        private function setSeat($seat)
        {
                $this->seat = $seat;

                return $this;
        }

        public function book(){
            $this->setSeat(rand(1, 60));
            // connectie + query
            $conn = Db::getInstance();
        }

        public function getTicket(){
            $ticket = "<h3>Firstname: " . $this->getFirstname() . "</h3>";
            $ticket .= "<p>Seat: " . $this->getSeat() . "</p>";
            return $ticket;
        }

        public function setPassenger($passenger){
            $this->passenger = $passenger;
            return $this;
        }

        public function getPassenger(){
            return $this->passenger;
        }
    }

