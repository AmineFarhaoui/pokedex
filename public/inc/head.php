<?php 
session_start();
use Amine\Pokedex\controllers\user\UserController;

require '../vendor/autoload.php'; 

// Initialize Controller
$controller = new UserController;

// Check if user logged out
if(isset($_GET['action']) && $_GET['action'] == 'logout') {
    if (!$controller->logout()) {
        echo "Something went wrong";
    } else {
        header("location: index.php?action=loggedout");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="auth" content="Amine Farhaoui" >
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Pokedex</title>
</head>
<body class="flex flex-col items-center text-white bg-mirage h-screen">
    <header class="flex w-full">
        <nav class="flex justify-center items-center w-full bg-black bg-opacity-30 text-white">
            <div class="flex text-base w-full px-20 py-3 max-w-screen-xl">
                <div p-5 class="flex w-full justify-start items-center space-x-5">
                    <img class="h-12" src="img/testlogo.png">
                    <a class="hover:text-yellow-200" href="index.php"><h1 class="text-2xl">Pokedex</h1></a>

                    <!-- Show add pokemon button if user is logged in -->
                    <?php if (isset($_SESSION['username'])) { ?>
                    <a class="hover:text-yellow-200" href="addPokemon.php">Add pokemon</a>
                    <?php } ?>

                </div>
                <!-- show signout button if user is logged in. Else show login -->
                <?php if (isset($_SESSION['username'])) { ?>
                <div class="flex w-full justify-end items-center space-x-5">
                    <a class="px-4 py-2 rounded bg-gradient-to-t from-mintblue to-mintbluelight" href="index.php?action=logout">Signout</a>
                </div>
                <?php } else { ?>
                <div class="flex w-full justify-end items-center space-x-5">
                    <a href="login.php">Login</a>
                    <a class="px-4 py-2 rounded bg-gradient-to-t from-mintblue to-mintbluelight" href="#signup">Signup</a>
                </div>
                <?php } ?>
            </div>
        </nav>
    </header>

