<?php


namespace App\Controller;
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RecipeGenerator extends AbstractController
{
    /**
     * @Route("/generator", name="recipegenerator_generator", methods={"GET"})
     */
    public function generator(): Response
    {
        return $this->render('recipegenerator/generator.html.twig');
    }

    /**
     * @Route("/generator/results", name="recipegenerator_results", methods={"GET"})
     *
     */
    public function results(): Response
    {
        return $this->render('recipegenerator/results.html.twig');
    }

    /**
     * @Route("/generator/results/{alias}", name="recipegenerator_recipe", methods={"GET"})
     */
    public function recipe($alias): Response
    {
        return $this->render('recipegenerator/recipe.html.twig');
    }
}