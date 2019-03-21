<?php

    class TicketVip extends Ticket {
        private $meal;

        public function getMeal()
        {
            return $this->meal;
        }

        public function setMeal($meal)
        {
            $this->meal = $meal;
        }

        public function setSeat($seat){
            $this->seat = $seat;
        }

        public function book(){
            // connectie + query
            $conn = Db::getInstance();
        }

        public function getTicket(){
            $ticket = parent::getTicket();
            $ticket .= "<p>Meal: " . $this->getMeal() . "</p>";
            return $ticket;
        }


    }