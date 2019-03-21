<?php 
    require_once("bootstrap.php");

    $ticket = new Ticket();
    $ticket->setFirstname("chareltje");
    $ticket->book();
    echo $ticket->getTicket();

    $ticketVip = new TicketVip();
    $ticketVip ->setFirstname("David");
    // ... SEAT?

?>