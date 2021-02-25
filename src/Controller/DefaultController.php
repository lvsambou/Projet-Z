<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * Page / Action Animation
     * ex. http://localhost:8000
     * @Route("/", name="animation", methods={"GET"})
     */
    public function animation()
    {
        return $this->render("default/animation.html.twig");
    }

    /**
     * Page / Action Home
     * ex. http://localhost:8000/home
     * @Route("/home", name="index", methods={"GET"})
     */
    public function index()
    {
        return $this->render("default/index.html.twig");
    }

    /**
     * Page / Action Recipes
     * ex. http://localhost:8000/recipes
     * @Route("/recipes", name="recipes", methods={"GET"})
     */
    public function recipes()
    {
        return $this->render("default/recipes.html.twig");
    }

    /**
     * Page / Action Beverages
     * ex. http://localhost:8000/recipes/beverages
     * @Route("/recipes/beverages", name="beverages", methods={"GET"})
     */
    public function beverages()
    {
        return $this->render("default/beverages.html.twig");
    }

    /**
     * Page / Action Salty
     * ex. http://localhost:8000/recipes/salty
     * @Route("/recipes/salty", name="salty", methods={"GET"})
     */
    public function salty()
    {
        return $this->render("default/salty.html.twig");
    }

    /**
     * Page / Action Sweetened
     * ex. http://localhost:8000/recipes/sweety
     * @Route("/recipes/sweety", name="sweety", methods={"GET"})
     */
    public function sweety()
    {
        return $this->render("default/sweety.html.twig");
    }
    /**
     * Page / Action Legal notices
     * ex. http://localhost:8000/legal-notices
     * @Route("/legal-notices", name="legal-notices", methods={"GET"})
     */
    public function legalNotices()
    {
        return $this->render("default/legal-notices.html.twig");
    }

    /**
     * Page / Action CGU
     * ex. http://localhost:8000/cgu
     * @Route("/cgu", name="cgu", methods={"GET"})
     */
    public function cgu()
    {
        return $this->render("default/cgu.html.twig");
    }

    /**
     * Page / Action Random recipe
     * ex. http://localhost:8000/recipes/random-recipe
     * @Route("/recipes/random-recipe", name="random-recipe", methods={"GET"})
     */
    public function randomRecipe()
    {
        return $this->render("default/random-recipe.html.twig");
    }

}