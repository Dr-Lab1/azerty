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
            $login = $this -> database -> prepare('SELECT * FROM utilisateurs WHERE email = :email AND password = :password');

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
            $login = $this -> database -> prepare('SELECT * FROM utilisateurs WHERE email = :email AND password = :password');

            $login -> execute(array(
    
                'prenom' => $prenom,
                'nom' => $nom,
                'email' => $email,
                'password' => $password
    
            ));
        }catch(PDOException $e){
            die($e -> getMessage());
        }
        

        $logins = $login -> fetchAll(PDO::FETCH_ASSOC);

        return $logins;
    }
}

?>