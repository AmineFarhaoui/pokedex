<?php
namespace Amine\Pokedex\library;

use mysqli;

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'Farhaoui';
    Private $db = 'pokedex';

    public $conn;

    /*
    * Create an database connection when class is used.
    */
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->conn -> connect_errno) {
            return "Failed to connect to MySQL: " . $this->conn -> connect_error;
        }
    }
}
