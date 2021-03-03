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
        $user->setRoles((array)'ROLE_USER');
        $user->setCreatedAt(new \DateTime());

        #Form creation
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class, [
                'attr' => [
                    'class'=>'form-group',
                    'placeholder' => 'User name'
                ]
            ])
            ->add('firstname', TextType::class, [
                'attr' => [
                    'class'=>'form-group',
                    'placeholder'=> 'Firstname'
                ]
            ])
            ->add('lastname', TextType::class, [
                'attr'=>[
                    'class' => 'form-group',
                    'placeholder' => 'Lastname'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr'=>[
                    'class'=> 'form-group',
                    'placeholder' => 'Email'
                ]
            ])
            ->add('password', PasswordType::class, [
                'attr'=>[
                    'class'=>'form-group',
                    'placeholder' => 'Password'
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
                'label'=>'Sign Up'
            ])
            ->getForm();

        $form->handleRequest($request);

        #If form is valid and submit
        if ($form->isSubmitted() && $form->isValid())
        {
            #password encryption
            $user->setPassword(
                $encoder->encodePassword(
                    $user, $user->getPassword()
                )
            );

            #Save user data in DB
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            #TODO : Email confirmation & token

            #Redirect user on creation confirmation page
            return $this->redirectToRoute('user_completed');
        }

        return $this->render('register/register.html.twig', [
            'form'=>$form->createView()
        ]);

    }

}