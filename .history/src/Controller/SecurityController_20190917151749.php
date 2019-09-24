<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, UserPasswordEncoderInterface $userPasswordEncoderInterface)
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);


        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
