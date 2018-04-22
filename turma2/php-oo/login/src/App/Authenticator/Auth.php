<?php 
namespace App\Authenticator;

class Auth
{
    /**
     * @var array
     */
    private $credentials = array();

    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }

    public function setCredentials($data)
    {
        $this->credentials = $data;
    }

    public function login()
    {
        $sql = "SELECT 
                    * 
                FROM 
                   users 
                WHERE 
                   email = :login 
                AND 
                   password  = :password";

        $doLogin  = $this->conn->prepare($sql);
        $password = sha1(KEY .  $this->credentials['password']);

        $doLogin->bindValue(':login', $this->credentials['login'], \PDO::PARAM_STR);
        $doLogin->bindValue(':password', $password, \PDO::PARAM_STR);

        if(!$doLogin->execute()) return false;

        $user = $doLogin->fetch(\PDO::FETCH_ASSOC);

        unset($user['password']);

        return $user;
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user']);
        $_SESSION = [];
    }

    public function isLogged()
    {
        return isset($_SESSION['user']);
    }
}