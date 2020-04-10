<?php
   $db_name = 'fernandodev_sistemapizza';
   $hostname = '31.170.163.101';
   $username = 'fernandodev_pizza';
   $password = 123456;

   try {
    $pdo = new PDO('mysql:host=31.170.163.101;dbname=fernandodev_sistemapizza', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 
   
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>