<?php 
use Amine\Pokedex\controllers\pokemon\PokemonController;

require 'inc/head.php'; 

$controller = new PokemonController;

// Call show method from PokemonController
if(isset($_GET['pokemon'])){
    $pokemon = $controller->show($_GET['pokemon']);
    if (!$pokemon) {
        echo 'Pokemon does not exist.';
    }
}

// Call update method from PokemonController
if(isset($_GET['action']) && $_GET['action'] == "update") {
    if (!$controller->update($_POST, $_FILES)) {
        echo "Something went wrong.";
    } else {
        echo 'Pokemon has been updated';
    }
}

// Call delete method from PokemonController
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    if (!$controller->destroy($_GET['id'])) {
        echo 'Something went wrong.';
    } else {
        echo "Pokemon has been deleted.";
    }
}
?>
    <div class="flex flex-col w-full px-20 py-3 max-w-screen-xl">
        <section class="flex flex-wrap justify-around w-full mt-20">
            <div class=" w-full">
                <form action="?action=delete&id=<?php echo $pokemon['id']?>" method="post">
                    <input type="submit" value="Delete" onclick="alertDelete()" class="delete-button text-red-700 bg-transparent cursor-pointer hover:text-red-500">
                </form>
                <form action="?pokemon=<?php echo $pokemon['id'] . "&action=update"?>" method="post" enctype="multipart/form-data">
                    <div class="flex flex-col">
                        <input type="hidden" name="id" value="<?php echo $pokemon['id'] ?>">
                        <label for="pokemon_nr">Number: </label><input type="number" name="pokemon_nr" maxlength="10" class="rounded p-1 text-black mb-2" required value="<?php echo $pokemon['pokemon_nr']; ?>">
                        <label for="name">Name: </label><input type="text" name="name" maxlength="255" class="rounded p-1 text-black mb-2" required value="<?php echo $pokemon['name']; ?>">
                        <label for="type">Type: </label><input type="text" name="type" maxlength="255" class="rounded p-1 text-black mb-2" required value="<?php echo $pokemon['type']; ?>">
                        <label for="height">Height: </label><input type="number" name="height" maxlength="10" class="rounded p-1 text-black mb-2" required value="<?php echo $pokemon['height']; ?>">
                        <label for="Weight">Weight: </label><input type="number" name="weight" maxlength="10" class="rounded p-1 text-black mb-2"required  value="<?php echo $pokemon['weight']; ?>">
                        <label for="Image">image: </label><input type="file" name="img" required>
                    </div>
                    <div class="flex w-full justify-end items-center my-5">
                        <input type="submit" class="w-full text-center px-4 py-2 rounded bg-gradient-to-t from-mintblue to-mintbluelight" value="Save"></input>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php require 'inc/footer.html'; ?>
