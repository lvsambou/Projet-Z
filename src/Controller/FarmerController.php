<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FarmerController extends AbstractController
{
    /**
     * @Route("/farmer", name="farmer", methods={"GET"})]
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('farmer/farmer.html.twig', [
            'controller_name' => 'Farmer',
        ]);
    }
}
