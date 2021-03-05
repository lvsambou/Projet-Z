<?php

namespace App\Controller;

use App\Entity\Category;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * Page / Action Animation
     * ex. http://localhost:8000
     * @Route("/", name="animation", methods={"GET"})
     */
    public function animation(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render("default/animation.html.twig");
    }

    /**
     * Page / Action Home
     * ex. http://localhost:8000/home
     * @Route("/home", name="index", methods={"GET"})
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render("default/index.html.twig");
    }

    /**
     * Page - Recipes : dropdown menu
     * url - http://localhost:8000/recipes/{alias}
     * @Route("/recipes/{alias}", name="default_category", methods={"GET"})
     * @param Category $category
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function category(Category $category): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('default/category.html.twig', [
            'category'=>$category #store and return the categories data from DB
        ]);
    }

    /**
     * Page - legal terms, privacy policy, GDPR
     * url - http://localhost:8000/legals
     * @Route("/legals", name="legals", methods={"GET"})
     */
    public function legals(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('default/legals.html.twig');
    }

    /**
     * Page / Action Random recipe
     * ex. http://localhost:8000/random-recipe
     * @Route("/random-recipe", name="random-recipe", methods={"GET"})
     */
    public function randomRecipe(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render("default/random-recipe.html.twig");
    }

}