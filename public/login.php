<?php

use Amine\Pokedex\controllers\user\UserController;

require 'inc/head.php';

$controller = new UserController;

// attempt to login
if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!$controller->login($_POST['username'], $_POST['password'])) {
        echo "username of password is fout";
    } else {
        header("location: index.php?action=loggedin");
    }
}

?>
    <div class="flex flex-col w-full px-20 py-3 max-w-screen-xl">
        <section class="flex flex-wrap justify-center w-full mt-20">
            <div class="p-4 border rounded-md">
                <form action="" method="POST">
                    <div class="flex flex-col justify-between mb-4">
                        <label for="username">Username: </label> <input type="text" name="username" maxlength="50" class="rounded p-1 text-black mb-2">
                        <label for="password">Password: </label> <input type="password" name="password" maxlength="50" class="rounded p-1 text-black">
                    </div>
                    <div>
                        <input type="submit" class="cursor-pointer w-full px-4 py-2 rounded bg-gradient-to-t from-mintblue to-mintbluelight" href=""></input>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php require 'inc/footer.html'; ?>