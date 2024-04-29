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
      echo "test 123";
      $host = 'postgres';
      $db = 'twitter_v2';
      $username = 'aclalead';
      $password = '12345';

      $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
      $this->database = new PDO($dsn);
      echo "test 234";
      $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $e = $this->e;
      echo "test" . $e;
    } catch (PDOException $e) {
      echo "PDO Exception Error Message: " . $e->getMessage();
    } catch (Exception $e) {
      echo "Exception Error Message: " . $e->getMessage();
    } finally {
      return $this->database;
    }
  }
}
