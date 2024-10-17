$(document).ready(function () {
    const apiUrl = 'http://localhost:3001/recipes';

    // Function to load and display recipes
    function loadRecipes() {
        $.ajax({
            url: apiUrl,
            method: 'GET',
            success: function (data) {
                $('#recipe-list').empty();
                data.forEach(recipe => {
                    $('#recipe-list').append(`
                        <div class="recipe">
                            <h3>${recipe.title}</h3>
                            <p>${recipe.description}</p>
                        </div>
                    `);
                });
            },
            error: function () {
                alert('Failed to load recipes');
            }
        });
    }

    // Function to add a new recipe
    $('#add-recipe-form').submit(function (e) {
        e.preventDefault();

        const newRecipe = {
            title: $('#title').val(),
            description: $('#description').val()
        };

        $.ajax({
            url: apiUrl,
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(newRecipe),
            success: function () {
                loadRecipes(); // Reload the recipes after adding a new one
                $('#title').val('');
                $('#description').val('');
            },
            error: function () {
                alert('Failed to add recipe');
            }
        });
    });

    // Load recipes when the page loads
    loadRecipes();
});
