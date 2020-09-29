<?php 

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct()
    {
      $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname ;
      
      $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
    }
}