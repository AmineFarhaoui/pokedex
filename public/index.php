<?php
require 'inc/head.php'; 
    if(isset($_GET['action'])) {
        if ($_GET['action'] == "loggedin") {
            echo"logged in";
        }
        elseif ($_GET['action'] == "loggedout") {
            echo "logged out";
        }
    }
?>
    <div class="flex flex-col w-full px-20 py-3 max-w-screen-xl">
        <div class="flex justify-center w-full">
            <div class="flex flex-wrap justify-center">
                <button class="type-button mx-2 hover:text-yellow-200" value=""> All </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Normal"> Normal </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Fire"> Fire </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Water"> Water </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Grass"> Grass </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Earth"> Earth </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Fighting"> Fighting </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Poison"> Poison </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Electric"> Electric </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Ground"> Ground </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Rock"> Rock </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Psychic"> Psychic </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Ice"> Ice </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Bug"> Bug </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Dragon"> Dragon </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Ghost"> Ghost </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Dark"> Dark </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Steel"> Steel </button> -
                <button class="type-button mx-2 hover:text-yellow-200" value="Fairy"> Fairy </button> -
            </div>
        </div>
        <section class="pokemons-container flex flex-wrap justify-around w-full my-20"></section>
    </div>
<?php require 'inc/footer.html'; ?>