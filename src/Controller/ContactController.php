<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * Page / Action Contact
     * http://localhost:8000/contact
     * @param Request $request
     * @Route("/contact", name="contact", methods={"GET|POST"})
     * @return RedirectResponse|Response
     */
    public function contact(Request $request)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
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
            ->add('content', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Content'
                ]

            ])
            ->add('submit', SubmitType::class)
            ->getForm();

        #Permet à Symfony de gérer les dernières saisies par l'utilisateur
        $form->handleRequest( $request );

        #si le formulaire est soumis et validé
        if($form->isSubmitted() && $form->isValid()){


            #Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);

    }
}