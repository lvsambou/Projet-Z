<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccountController extends AbstractController
{
    /**
     * @Route("/user/dashboard", name="account_dashboard", methods={"GET"})
     */
    public function dashboard(): Response
    {
        return $this->render('account/dashboard.html.twig');
    }

    /**
     * @Route("/user/myrecipes", name="account_myrecipes", methods={"GET"})
     */
    public function myrecipes(): Response
    {
        return $this->render('account/myrecipes.html.twig');
    }

    /**
     * @Route("/user/favorite", name="account_favorite", methods={"GET"})
     */
    public function favorite(): Response
    {
        return $this->render('account/favorite.html.twig');
    }

}