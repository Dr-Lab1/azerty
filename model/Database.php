<?php
class Database
{
    //attributs
    public $database;
    public function __construct($url, $username, $password)
    {
        $this -> database = new PDO($url, $username, $password);
    }

    public function login($email, $password)
    {
        try
        {
            $login = $this -> database -> prepare('SELECT * FROM utilisateurs WHERE email = :email AND password = sha1(:password)');

            $login -> execute(array(
    
                'email' => $email,
                'password' => $password
    
            ));
        }catch(PDOException $e){
            die($e -> getMessage());
        }
        

        $logins = $login -> fetchAll(PDO::FETCH_ASSOC);

        return $logins;
    }

    public function create($prenom, $nom, $email, $password)
    {
        try
        {
            $create = $this -> database -> prepare('INSERT INTO utilisateurs (email, password, nom, prenom) VALUES (:email, sha1(:password), :nom, :prenom)');

            $create -> execute(array(
                
                'email' => $email,
                'password' => $password,
                'nom' => $nom,
                'prenom' => $prenom,
    
            ));
        }catch(PDOException $e){
            die($e -> getMessage());
        }

    }

    public function emailVerification($email)
    {
        try
        {
            $verification = $this -> database -> prepare('SELECT * FROM utilisateurs WHERE email = :email');

            $verification -> execute(array(
    
                'email' => $email
    
            ));
        }catch(PDOException $e){
            return false;
            die;
            die($e -> getMessage());
        }
        

        // $verifications = $verification -> fetchAll(PDO::FETCH_ASSOC);

        return true;
    }
}

?>