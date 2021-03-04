//get the events on 'Get your random recipe 🎲' button
const get_meal_btn = document.getElementById('get_meal');
//get the meal display html part, for displaying after the random recipe
const meal_container = document.getElementById('meal');

// on click event on 'Get your random recipe 🎲' button activate connexion to mealDB API with random option
get_meal_btn.addEventListener('click', () => {
    fetch('https://www.themealdb.com/api/json/v1/1/random.php')
        .then(res => res.json())
        .then(res => {
            createMeal(res.meals[0]);
        });
});

// Create the random meal view with API response to random querry
const createMeal = (meal) => {
    const ingredients = [];
    // Get all ingredients from the object. Up to 20
    for(let i=1; i<=20; i++) {
        if(meal[`strIngredient${i}`]) {
            ingredients.push(`${meal[`strIngredient${i}`]} - ${meal[`strMeasure${i}`]}`)
        } else {
            // Stop the loop when no more ingredients or null response get on 'strIngredients'
            break;
        }
    }

    const newInnerHTML = `
    <div class="container-fluid wh-100-80 section-bg">
    <div class="p-3 mx-auto text-center">
        <h2 class= "fs-46 bitter  ">${meal.strMeal}</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="overflow-hidden d-flex justify-content-center wh-img align-self-center">
            <img class="img-fluid align-self-center" src="${meal.strMealThumb}"  alt="${meal.strMeal}">
        </div>
    </div>
    

    <div class="row ml-5 wh-100-80 mt-3 d-flex justify-content-end fs-18 bitter">
        <img class="icon img-fluid" src="/public/asset/img/favorites.PNG'" alt="Ajouter la recette aux favoris">
        <div class=" mt-2 ml-1">Add to favorite recipes</div>

        <a href="javascript:window.print()">
        <img class="icon ml-4" src="{{ asset('asset/img/print.png') }}" alt="Imprimer la recette">
        <div class=" mt-2 ml-1">Print</div>
        </a>
        
        <img class="icon ml-4" src="{{ asset('asset/img/share.png') }}" alt="Partager la recette">
        <div class=" mt-2 ml-1">Share</div>
    </div>

    <div class="row wh-100-80 mt-3 d-flex justify-content-center fs-18 bitter text-center">
        ${meal.strCategory ? `<div class="mt-2 ml-1"><span class="fs-18 btn btn-outline-dark bitter " type="button" >${meal.strCategory}</span>
        </div>` : ''}
        ${meal.strArea ? `<div class="mt-2 ml-1"><span class="fs-18 btn btn-outline-dark bitter " type="button" >${meal.strArea}</span>
        </div>` : ''}
        ${meal.strTags ? `<div class="mt-2 ml-1"><span class="fs-18 btn btn-outline-dark bitter " type="button" >${meal.strTags.split(',').join(' - ')}</span>
        </div>` : ''}
    </div>

    <div class="p-2 mx-auto text-center mb-0 mt-3">
        <p class="fs-25 fw-bolder text-center mb-0 arvo">Ingredients :</p>
    </div>

    <div class="fs-18 arvo text-center wh-100-50>
        <ul class="li-none ">
            ${ingredients.map(ingredient => `<li class="li-none">${ingredient}</li>`).join('')}
        </ul>
    </div>

    <div class="p-2 mx-auto text-center arvo fw-bolder arvo mb-0 mt-3">
        <h2 class= "fs-25 mb-0">Make &#32 &#32<span class="fs-36 dawning">&#32 &#32 ${meal.strMeal}</span> :</h2>
    </div>

    <div class=" mx-auto text-center fs-18 arvo d-flex justify-content-center">
         <p class="mb-2 text-center wh-100-50 p-lh">
            ${meal.strInstructions}
        </p>
    </div>

    <div class="p-2 mx-auto text-center mb-0 mt-3">
        <p class="fs-25 fw-bolder text-center mb-0 arvo">Let's look how to cook it</p>
    </div>
    <div class=" mx-auto text-center fs-18 arvo d-flex justify-content-center">
         <div class="ratio ratio-16x9 mb-4">
            <iframe src="https://www.youtube.com/embed/${meal.strYoutube.slice(-11)}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </div>

    </div>

    <div class="container-fluid wh-100-80 section-bg mt-4 section-bg">
        <div class="p-2 mx-auto text-center arvo fw-bolder dawning mb-0 mt-3">
            <h2 class= "fs-46 mb-0 dawning">Looking for quality products ?</h2>
            <p class="p-2 fs-25 fw-bolder text-center mb-0 arvo">Check the food producers nearby :</p>

            
            <div class="col d-flex justify-content-center mb-3">
                <input class="fs-20 bitter fw-italic border-0 p-2 input-bg" type="text" placeholder="Enter region name">
                <a href="#"><input class=" bitter fw-bold fs-36 border-none submitgo ml-2" type="submit" value="Go !"></a>
            </div>
        </div>
    </div>

	`;

    meal_container.innerHTML = newInnerHTML;
}