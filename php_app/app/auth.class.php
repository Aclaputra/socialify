<?php
interface authInterface
{
    public function register($user);
    public function login($user);
}
class auth implements authInterface
{
    private PDO $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function register($user)
    {
        try {
            $insert = $this->db->prepare(
                'INSERT INTO 
                    accounts(
                        email,
                        password,
                        name,
                        username,
                        ip_address
                    )
                    VALUES (
                        :email,
                        :password,
                        :name,
                        :username,
                        :ip_address
                    )'
            );
            $this->db->beginTransaction();

            $name = $user->getName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $username = $user->getUsername();
            $ipAddress = $user->getIpAdress();

            $params = array(
                ":email" => $email,
                ":password" => $password,
                ":name" => $name,
                ":username" => $username,
                ":ip_address" => $ipAddress
            );
            $insert->execute($params);
        } catch (PDOException $e) {
            echo "Error message: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Error message: " . $e->getMessage();
        } finally {
            if ($this->db->inTransaction())
                $this->db->commit();
            else
                $this->db->rollBack();
        }
    }
    public function login($user)
    {
        try {
            $insert = $this->db->prepare(
                'INSERT INTO 
                    accounts(
                        email,
                        password,
                        name,
                        username,
                        ip_address
                    )
                    VALUES (
                        :email,
                        :password,
                        :name,
                        :username,
                        :ip_address
                    )'
            );
            $this->db->beginTransaction();

            $name = $user->getName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $username = $user->getUsername();
            $ipAddress = $user->getIpAdress();

            $params = array(
                ":email" => $email,
                ":password" => $password,
                ":name" => $name,
                ":username" => $username,
                ":ip_address" => $ipAddress
            );
            $insert->execute($params);
        } catch (PDOException $e) {
            echo "Error message: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Error message: " . $e->getMessage();
        } finally {
            if ($this->db->inTransaction())
                $this->db->commit();
            else
                $this->db->rollBack();
        }
    }
}
