<?php

namespace App\Controller;

use App\Entity\Email;
use App\Entity\Newsletter;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("admin/sendEmail", name="admin_sendEmail")
     */
    public function sendEmail(Request $request, \Swift_Mailer $mailer)
    {
        //creation d'un email
        $email = new Email();
        $email->setCreatedAt(new \DateTime('now'));
        $em = $this->getDoctrine()->getManager();


        //creation formulaire
        $form = $this->createFormBuilder($email)
            ->add('title', textType::class)
            ->add('content', TextType::class)
            // ->add('createdAt', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'envoyer le mail'])
            ->getForm();

        $form->handleRequest($request);

        $newsletter = $this->getDoctrine()->getManager()->getRepository(Newsletter::class)->findAll();

        $emailContent = $email->getContent();

        //si le mail est valide
        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($email);
            $em->flush();

                //envoyer à tous les mails
                foreach($newsletter as $newsletter)
                {
                    $message = (new \Swift_Message($email->getTitle()))

                        ->setFrom('owleyewearfr@gmail.com')
                        ->setTo($newsletter->getEmail())
                      
                        ->setBody(
                            $this->renderView(
                                'email/sendEmail.html.twig',
                                [
                                'content' => $emailContent,

                                ]
                            ),
                            'text/html'
                        )
                    ;
                    $mailer->send($message);
                }
            return $this->redirectToRoute('sendEmail');
        }

        return $this->render('admin/sendEmail.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
}
