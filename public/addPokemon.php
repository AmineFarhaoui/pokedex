<?php 
use Amine\Pokedex\controllers\pokemon\PokemonController;

require 'inc/head.php'; 

$controller = new PokemonController;

// Call add method from PokemonController
if(isset($_GET['action']) && $_GET['action'] == "add") {
    if (isset($_POST['type']) && count($_POST['type']) == 1) {   
        if (!$controller->store($_POST, $_FILES)) {
            echo "Something went wrong.";
        }
        else {
            echo 'Pokemon has been added.';
        }
    } else {
        
        echo 'give pokemon type.';
    }
}

?>
    <div class="flex flex-col w-full px-20 py-3 max-w-screen-xl">
        <section class="flex flex-wrap justify-around w-full mt-20">
            <div class=" w-full">
                <form action="?action=add" method="post" enctype="multipart/form-data">
                    <div class="flex flex-col">
                        <label for="pokemon_nr">Number: </label><input type="number" name="pokemon_nr" class="rounded p-1 text-black mb-2"required>
                        <label for="name">Name: </label><input type="text" name="name" class="rounded p-1 text-black mb-2" required>
                        <div class="flex flex-col mb-2">
                            <div>
                                <label for="">Type: </label>
                            </div>
                            <div>
                                <label for="">Normal: </label><input name="type[]" type="checkbox" value="Normal" class="mr-4">
                                <label for="">Fire: </label><input name="type[]" type="checkbox" value="Fire" class="mr-4">
                                <label for="">Water: </label><input name="type[]" type="checkbox" value="Water" class="mr-4">
                                <label for="">Grass: </label><input name="type[]" type="checkbox" value="Grass" class="mr-4">
                                <label for="">Flying: </label><input name="type[]" type="checkbox" value="Flying" class="mr-4">
                                <label for="">Fighting: </label><input name="type[]" type="checkbox" value="Fighting" class="mr-4">
                                <label for="">Poison: </label><input name="type[]" type="checkbox" value="Poison" class="mr-4">
                                <label for="">Electric: </label><input name="type[]" type="checkbox" value="Electric" class="mr-4">
                                <label for="">Ground: </label><input name="type[]" type="checkbox" value="Ground" class="mr-4">
                                <label for="">Rock: </label><input name="type[]" type="checkbox" value="Rock" class="mr-4">
                                <label for="">Psychic: </label><input name="type[]" type="checkbox" value="Psychic" class="mr-4">
                                <label for="">Ice: </label><input name="type[]" type="checkbox" value="Ice" class="mr-4">
                                <label for="">Bug: </label><input name="type[]" type="checkbox" value="Bug" class="mr-4">
                                <label for="">Dragon: </label><input name="type[]" type="checkbox" value="Dragon" class="mr-4">
                                <label for="">Ghost: </label><input name="type[]" type="checkbox" value="Ghost" class="mr-4">
                                <label for="">Dark: </label><input name="type[]" type="checkbox" value="Dark" class="mr-4">
                                <label for="">Steel: </label><input name="type[]" type="checkbox" value="Steel" class="mr-4">
                                <label for="">Fairy: </label><input name="type[]" type="checkbox" value="Fairy" class="mr-4">
                            </div>
                        </div>
                        <label for="height">Height: </label><input type="number" step="0.01" name="height" class="rounded p-1 text-black mb-2" required>
                        <label for="Weight">Weight: </label><input type="number" step="0.01" name="weight" class="rounded p-1 text-black mb-2" required>
                        <label for="Image">image: </label><input type="file" name="img" required>
                    </div>
                    <div class="flex w-full justify-end items-center my-5">
                        <input type="submit" class="submit w-full text-center px-4 py-2 rounded bg-gradient-to-t from-mintblue to-mintbluelight" value="Save"></input>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php require 'inc/footer.html'; ?>
