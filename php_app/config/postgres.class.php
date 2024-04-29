<?php
interface postgresInterface
{
  public function getDB(): PDO;
}

class postgres implements postgresInterface
{
  public ?postgres $e;
  public ?PDO $database;

  public function getDB(): PDO
  {
    try {
      $host = 'localhost';
      $db = 'twitter_v2';
      $username = 'aclalead';
      $password = '12345';

      $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
      $this->database = new PDO($dsn);
      $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $e = $this->e;
    } catch (PDOException $e) {
      echo "Error Message: " . $e->getMessage();
    } catch (Exception $e) {
      echo "Error Message: " . $e->getMessage();
    } finally {
      return $this->database;
    }
  }
}
