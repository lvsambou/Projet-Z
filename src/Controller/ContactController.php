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
            ->add('firstname', TextType::class, [
                'label' => 'First Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your First Name here'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Last Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Last Name here'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your email here'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Phone Number',
                'attr'=> [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Phone Number here'
                ]
            ])
            ->add('subject', TextType::class, [
                'label' => 'Subject',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type the subject of your contact request here'
                ]

            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type the details of your contact request here'
                ]

            ])
            ->add('submit', SubmitType::class)
            ->getForm();

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);

    }
}