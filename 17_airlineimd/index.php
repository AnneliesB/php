<?php 
    require_once("bootstrap.php");

    $ticket = new Ticket();
    $ticket->setFirstname("chareltje");
    $ticket->book();
    echo $ticket->getTicket();
?>