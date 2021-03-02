<?php


namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RecipeGeneratorController extends AbstractController
{
    /**
     * ex. http://localhost:8000/generator
     * @Route("/generator", name="generator", methods={"GET|POST"})
     */
    public function generator()
    {
        return $this->render('recipegenerator/generator.html.twig');


    }

    /**
     * ex. http://localhost:8000/generator/results
     * @Route("/generator/results", name="results", methods={"GET"})
     *
     */
    public function results(): Response
    {
        return $this->render('recipegenerator/results.html.twig');
    }

    /**
     * ex. http://localhost:8000/generator/results/{alias}
     * @Route("/generator/results/{alias}", name="recipe", methods={"GET"})
     */
    public function recipe($alias): Response
    {
        return $this->render('recipegenerator/recipe.html.twig');
    }
}