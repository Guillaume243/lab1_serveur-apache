<?php

    $logfile = '/var/log/indexlog.log';
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "Je suis à la page d'index via l'adresse IP $ip_address à $timestamp" . PHP_EOL;
    file_put_contents($logfile, $logMessage, FILE_APPEND);

    echo "je suis à la page d'index"; 

?>