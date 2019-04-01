<?php
    include_once("settings.inc.php"); // PRIVE

    $server = $settings['server'];
    $user = $settings['user'];
    $password = $settings['password'];
    $db = $settings['database'];
    $port = $settings['port'];

    $conn = new mysqli($server, $user, $password, $db);
?>