<?php
namespace Amine\Pokedex\controllers\user;

use Amine\Pokedex\library\Database;

class UserController 
{
    
    private $db;
    private $conn;

    /*
    * on construct, we create a new database object
    * and connect to the database
    */
    public function __construct()
    {
        $this->db = new Database;
        $this->conn = $this->db->conn;
    }

    /*
    * login a user
    */
    public function login($userName, $password)
    {
        $sql = "SELECT * FROM users WHERE username = '$userName' AND password = '$password'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();

        if(!$result-> num_rows > 0)
        {
            return false;
        }

        $_SESSION['username'] = $row;
        return true;

    }

    /*
    * logout a user
    */
    public function logout()
    {
        if (!session_destroy()) {
            return false;
        }
        
        return true;
    }
}
