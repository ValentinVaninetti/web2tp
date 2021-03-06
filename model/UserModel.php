<?php
require_once "../utils/DataBase.php";

class UserModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }
    
    public function getUsers(){
        $statement = $this->db->prepare("SELECT * FROM users");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUserByEmail($email){
        $statement = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $statement->execute(array($email));
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    
    public function addNewUser($username,$email,$password,$isAdmin){
        
        $statement = $this->db->prepare("INSERT INTO users(username,email,pass,isAdmin) VALUES(?,?,?,?)");
        $statement->execute(
            array($username, $email, $password,$isAdmin)
        );
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    function convertToAdmin($id, $admin){
        $statement = $this->db->prepare("UPDATE users SET isAdmin = ? WHERE id_user = ?");
        $statement->execute(array($admin, $id));
    }

    function deleteUser($id){
        $statement = $this->db->prepare("DELETE FROM users WHERE id_user = ?");
        $statement->execute(array($id));
    }

     
    
}
