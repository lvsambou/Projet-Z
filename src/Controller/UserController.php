<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * ex. http://localhost:8000/register
     * @Route("/register", name="register", methods={"GET|POST"})
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */

    public function register(Request $request, UserPasswordEncoderInterface $encoder){

        $user = new User();
        $user->setCreatedAt(new \DateTime());

        $form = $this->createFormBuilder($user)
            ->add('firstname', TextType::class, [
                'label' => "First Name",
                'attr' => [
                    'class' => 'formtest',
                    'placeholder' => 'Type your First Name here']
            ])
            ->add('lastname', TextType::class, [
                'label' => "Last Name",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Last Name here'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => "Email",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Email here'
                ]

            ])
            ->add('password', PasswordType::class, [
                'label' => "Password",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Password here'
                ]

            ])
            ->add('address', TextType::class, [
                'label' => "Address",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Address here'
                ]

            ])
            ->add('zipcode', TextType::class, [
                'label' => "Zipcode",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type your Zipcode here'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => "City",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type the name of your City here'
                ]
            ])
           ->add('submit', SubmitType::class, [
               'label' => "Submit"
           ])
            ->getForm();

        #Permet à Symfony de gérer les dernières saisies par l'utilisateur
        $form->handleRequest( $request );

        #si le formulaire est soumis et validé
        if($form->isSubmitted() && $form->isValid()){

            #Encodage du mot passe
            $user->setPassword(
                $encoder->encodePassword(
                    $user, $user->getPassword()
                )
            );

            #Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('profile');
        }

        #Affichage du formulaire dans la page
        return $this->render('register/register.html.twig', [
            'form' => $form->createView()
        ]);

    }

}