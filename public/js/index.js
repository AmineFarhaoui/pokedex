$(document).ready(function(){
    var type;
    var userState;

    // alert user when delete button is clicked
    $('.delete-button').click(function() {
        alert("Are you sure you want to delete this item?");
    });

    // change pokemon type shown when clicking on a type
    $('.type-button').click(function() {
        $(".pokemons-container").empty();
        type = $(this).attr("value");
        getPokemon()
    });

    // ajaax call to get all pokemon of a type and display
    const getPokemon = async () =>{
        loggedIn()
        if (!type) {
            var url = `http://localhost:8080/src/helpers/api.php?PokemonController=index&type=`;
        } else {
            var url = `http://localhost:8080/src/helpers/api.php?PokemonController=index&type=${type}`;
        }

        const res = await fetch(url);
        const data = await res.json();

        data.forEach(element => {
            if (!userState) { // if user is not logged in without edit button
                $(".pokemons-container").append(`
                    <div class="flex items-center w-full border rounded-md m-1">
                        <div class="flex w-20 h-20 p-2 object-scale-down">
                            <img src="./img/${element.img}" class="object-cover">
                        </div>
                        <div class="flex flex-col w-1/3 p-2">
                            <p><b>Nr. ${element.pokemon_nr}</b> ${element.name}</p>
                            <p>${element.type}</p>
                        </div>
                        <div class="flex flex-col w-1/3 p-2">
                            <p>Weight: ${element.weight} kg</p>
                            <p>Height: ${element.height} m</p>
                        </div>
                    </div>`
                )
            }
            else { // if user is logged in with edit button
                $(".pokemons-container").append(`
                    <div class="flex items-center w-full border rounded-md m-1">
                        <div class="flex w-20 h-20 p-2 object-scale-down">
                            <img src="./img/${element.img}" class="object-cover">
                        </div>
                        <div class="flex flex-col w-1/3 p-2">
                            <p><b>Nr. ${element.pokemon_nr}</b> ${element.name}</p>
                            <p>${element.type}</p>
                        </div>
                        <div class="flex flex-col w-1/3 p-2">
                            <p>Weight: ${element.weight} kg</p>
                            <p>Height: ${element.height} m</p>
                        </div>
                        <div class="flex flex-col w-1/3 items-end p-2">
                            <a href="show.php?pokemon=${element.id}" class="text-blue-500">Edit</a>
                        </div>
                    </div>`
                )
            }
        });
    }
    getPokemon();

    // ajaax call to get user state
    function loggedIn() {
        // ajax call to check if user is logged in
        $.ajax({
            url: '../src/helpers/api.php?session=0',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if (data == true) {
                    userState = true;    
                } else {
                    userState = false;
                }
            }
        });
    }
})