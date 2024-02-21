<?php
interface postgresInterface {
  public static function getDB();
}

class postgres implements postgresInterface {
  public static postgres $e;
  public static PDO $database;
  

  public static function getDB() : PDO { 
    try {
      $host ='localhost';
      $db = 'twitter_v1';
      $username = 'aclalead';
      $password = '12345';
      
      $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
      self::$database = new PDO($dsn);
      self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $e = self::$e;
    } catch (PDOException $e) {
      echo "Error Message: " . $e->getMessage();
    } finally {
      return self::$database;
    }
  }

}