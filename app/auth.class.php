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
            $insert = $this->db->prepare(
                'INSERT INTO accounts(email,password,name,username) VALUES (:email,:password,:name,:username)'
            );
            $this->db->beginTransaction();
            $name = $user->getName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $username = $user->getUsername();
            $params = array(
                ":email" => $email,
                ":password" => $password,
                ":name" => $name,
                ":username" => $username
            );
            $insert->execute($params);
        } catch (PDOException $e) {
            echo "Error message: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Error message: " . $e->getMessage();
        } finally {
            if ($this->db->inTransaction()) {
                $this->db->commit();
            }
        }
    }
    public function login($user) {
        echo "login";
    }
}