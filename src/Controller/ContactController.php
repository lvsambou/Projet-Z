<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * Page / Action Contact
     * http://localhost:8000/contact
     * @Route("/contact", name="contact", methods={"GET|POST"})
     */
    public function contact()
    {
        $form = $this->createFormBuilder()
            ->add('lastname', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Last Name'
                ]
            ])
            ->add('firstname', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'First Name'
                ]
            ])
            ->add('email', EmailType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Email'
                ]
            ])
            ->add('phone', TelType::class, [

                'attr'=> [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Phone number'
                ]
            ])
            ->add('subject', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Subject'
                ]

            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Message'
                ]

            ])
            ->add('submit', SubmitType::class)
            ->getForm();

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);

    }
}