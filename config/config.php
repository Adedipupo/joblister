<?php 


 $host = 'localhost';
 $user = 'root';
 $password = 'Adedipupo123!';
 $dbname = 'joblister';

 $dsn = 'mysql:host = $host; dbname=$dbname';

 try {
     $pdo = new PDO($dsn,$user,$password);
 } catch (ERRORMODE $e) {
     
 }


?>