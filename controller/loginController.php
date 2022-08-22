<?php
require_once dirname(__DIR__, 1).DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'Database.php';
require_once dirname(__DIR__, 1).DIRECTORY_SEPARATOR.'configs'.DIRECTORY_SEPARATOR.'config.php';


class connection
{
    public $database;

    public function __construct()
    {
        $this -> database = new Database(URL, USERNAME, PASSWORD);
    }

    public function login($email, $password)
    {
        $logins = $this -> database -> login($email, $password);

        if($logins)
        {
            foreach($logins as $login)
            {
                $_SESSION['nom'] = $login['prenom'] . ' ' . $login['nom'];
            }
            echo 'Joooooooooooooooooooooooo';
        }

        

        else
        {
            return false;
        }
    }
}
?>