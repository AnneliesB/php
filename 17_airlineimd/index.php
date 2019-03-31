<?php
    require_once("bootstrap.php");

    $passenger1 = new Passenger();
    $passenger1->setFirstname("Chareltje");
    //echo $passenger1->toJson();

    $passenger2 = new Passenger();
    $passenger2->setFirstname("David");

    $ticket = new Ticket();
    $ticket->setPassenger($passenger1); // dependency injection
    $ticket->book();
    echo $ticket->getTicket();

    $ticketVip = new TicketVip();
    $ticketVip->setPassenger($passenger2); // dependency injection
    $ticketVip->setMeal("vegetarian");
    $ticketVip->setSeat("80");
    $ticketVip->book();
    echo $ticketVip->getTicket();
    // ... SEAT?

?>
