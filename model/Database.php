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

    public function create($prenom,$idUser , $nom, $email, $password)
    {
        try
        {
            $create = $this -> database -> prepare('INSERT INTO utilisateurs (email, idUser, password, nom, prenom, statut) VALUES (:email, :idUser, sha1(:password), :nom, :prenom, 0)');

            $create -> execute(array(
                
                'email' => $email,
                'idUser' => $idUser,
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
        $verifications = $verification -> fetchAll();
        return $verifications;
    }

    public function statute($email)
    {
        try
        {
            $statute = $this -> database -> prepare('UPDATE utilisateurs SET statut = 1 WHERE email = :email');
            
            $statute -> execute(array(
                'email' => $email
            ));
        }catch(PDOException $e){
            die($e -> getMessage());
        }
    }

    public function getAllAutochtone()
    {
        try
        {
            $all = $this -> database -> prepare('SELECT * FROM utilisateurs WHERE statut = 1');

            $all -> execute();
        }catch(PDOException $e){
            die($e -> getMessage());
        }

        $yes = $all -> fetchAll(PDO::FETCH_ASSOC);
        return $yes;
    }

    public function getRandomContinent()
    {
        try
        {
            $all = $this -> database -> prepare('SELECT * FROM continents');

            $all -> execute();

        }catch(PDOException $e){
            die($e -> getMessage());
        }

        $yes = $all -> fetchAll(PDO::FETCH_ASSOC);
        return $yes;
    }

    public function getRandomDestination($precision = 'tous')
    {
        try
        {
            if($precision == 'tous')
            {
                $all = $this -> database -> prepare('SELECT m.path, m.idSite, d.idSite, d.nom FROM medias m JOIN destinations d WHERE m.idSite = d.idSite');

                $all -> execute();
            }
            else
            {
                $all = $this -> database -> prepare('SELECT m.path, m.idSite, d.idSite, d.nom, d.continent FROM medias m JOIN destinations d WHERE m.idSite = d.idSite AND d.continent = :continent');

                $all -> execute(array(
                    'continent' => $precision
                ));
            }
            
        }catch(PDOException $e){
            die($e -> getMessage());
        }

        $yes = $all -> fetchAll(PDO::FETCH_ASSOC);
        return $yes;
    }
}

?>