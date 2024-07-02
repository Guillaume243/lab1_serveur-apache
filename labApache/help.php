<?php

  $log_file = '/var/log/aidelog.log';
  
  try {
  
      echo "je suis dans la page help.php";
  
      $result = 10 / 0;
      
  } catch (Exception $e) {
  
      $errorMessage = 'Erreur sur la page help.php: ' . $e->getMessage() . PHP_EOL;
      
      file_put_contents($log_file, $errorMessage, FILE_APPEND);
      
  }

?>