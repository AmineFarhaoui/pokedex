<?php
namespace Amine\Pokedex\controllers\pokemon;

use Amine\Pokedex\library\Database;
use Amine\Pokedex\helpers\ImageUpload;

class PokemonController 
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
    * Store a newly created resource in storage.
    */
    public function index($type = null)
    {   
        if($type == null) {
            $sql = "SELECT * FROM pokemons";
        } else {
            $sql = "SELECT * FROM pokemons WHERE `type`= '$type'";
        }

        $data = $this->conn->query($sql);

        if ($data->num_rows > 0) {
            while($row = $data->fetch_assoc()){
                $result[] = $row;
            } 
            return $result;
        }

        return false;
    }

    /*
    * Get one pokemon from pokemons table
    */
    public function show($id)
    {   
        $sql = "SELECT * FROM pokemons WHERE `id`= '$id'";
        $data = $this->conn->query($sql);

        if($data->num_rows > 0){
            return $data->fetch_assoc();
        }

        return false;
    }

    /*
    * Add a new pokemon to the database
    */
    public function store($data, $img)
    {
        if (!isset($_SESSION['username'])) {
            return false;
        }

       $imageUpload = new ImageUpload;

       if ($imageUpload->uploadImage($img)) {
            $img_name = $img['img']['name'];
            $type = $data['type'][0];

            $sql = "INSERT INTO pokemons VALUES (NULL, '$data[name]', '$data[pokemon_nr]', '$img_name', '$type', '$data[height]', '$data[weight]')";
            if (!$this->conn->query($sql)) {    
                return false;
            }
            return true;
        }
    }

    /*
    * Add update pokemon in database
    */
    public function update($data, $img)
    {
        if (!isset($_SESSION['username'])) {
            return false;
        }

        $imageUpload = new ImageUpload;

        if ($imageUpload->uploadImage($img)) {
             $img_name = $img['img']['name'];
 
             $sql = "UPDATE pokemons SET `name`='$data[name]', `pokemon_nr`='$data[pokemon_nr]', `img`='$img_name', `type`='$data[type]', `height`='$data[height]', `weight`='$data[weight]' WHERE `id`='$data[id]'";
             if (!$this->conn->query($sql)) {    
                 return false;
             }
             return true;
         }
    }

    /*
    * Delete pokemon from database
    */
    public function destroy($id)
    {
        if (!isset($_SESSION['username'])) {
            return false;
        }
        
        $sql = "DELETE FROM pokemons WHERE `id` = '$id'";
        if (!$this->conn->query($sql)) {
            return false;
        }
        return true;
    }
}
