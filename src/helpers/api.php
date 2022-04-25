<?php
session_start();
use Amine\Pokedex\controllers\pokemon\PokemonController;

require '../../vendor/autoload.php'; 

if (count($_GET) > 0) {

    if(isset($_GET['PokemonController'])) {
        
        if($_GET['PokemonController'] == 'index') {
            if (isset($_GET['type'])) {
                $type = $_GET['type'];
                $controller = new PokemonController;
                echo(json_encode($controller->index($type)));
            }else {
                $controller = new PokemonController;
                echo(json_encode($controller->index()));
            }
        }
    }

    if(isset($_GET['session'])) {
        if($_GET['session'] == '0') {
            if(isset($_SESSION['username']))
                echo(json_encode(true));
            else { 
                echo(json_encode(false));
            }
        }
    }
}