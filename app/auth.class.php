<?php
interface authInterface {
    public function register($user);
    public function login($user);
}
class auth implements authInterface {
    private PDO $db; 
    public function __construct($db) {
        $this->db = $db;
    }
    public function register($user)  {
        try {
            $name = $user->getFullName();
            var_dump($name);
            $insert = $this->db->prepare(
                'INSERT INTO accounts(name) VALUES (:name)'
            );
            $this->db->beginTransaction();
            $insert->bindParam(':name',$name);
            $insert->execute();
        } catch (PDOException $e) {
            echo "Error message: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Error message: " . $e->getMessage();
        } finally {
            if ($this->db->inTransaction()) 
                $this->db->commit();
        }
        
    }
    public function login($user) {
        echo "login";
    }
}