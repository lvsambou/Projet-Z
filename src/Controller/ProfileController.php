<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile", methods={"GET|POST"})
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
