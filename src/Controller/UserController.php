<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\IsFalse;
use Symfony\Component\Validator\Constraints\IsTrue;

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

                'attr' => [
                    'class' => 'formtest mt-4',
                    'placeholder' => 'First Name']
            ])
            ->add('lastname', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4 ',
                    'placeholder' => 'Last Name'
                ]
            ])
            ->add('email', EmailType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Email'
                ]

            ])
            ->add('password', PasswordType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Password'
                ]

            ])
            ->add('address', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Address'
                ]

            ])
            ->add('zipcode', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'Zipcode'
                ]
            ])
            ->add('city', TextType::class, [

                'attr' => [
                    'class' => 'form-control mt-4',
                    'placeholder' => 'City'
                ]
            ])

           ->add('tou', CheckboxType::class, [
               'mapped' => false,
               'label' => 'I agree and accept #TERMS_OF_USE_LINK#',
               'label_attr' => [
                   'class' => 'show-label'
               ],
               'constraints' => [
                   new IsTrue([
                       'message' => 'I know, it\'s silly, but you must agree to our terms.'
                   ])
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

//            if(true === $form['tou']->getData()){
//                $user->setTou($this = ‘terms ok’);
//
//            }

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