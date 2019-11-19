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
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/sendEmail", name="admin_sendEmail", methods="GET|POST")
     */
    public function sendEmail(Request $request, \Swift_Mailer $mailer)
    {
        $email = new Email();
        $email->setCreatedAt(new \DateTime('now'));
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($email)
            ->add('title', textType::class, ['label' => 'Sujet'])
            ->add('content', CKEditorType::class, ['label' => 'Contenu'])
            ->add('save', SubmitType::class, ['label' => "Envoyer l'email"])
            ->getForm();

        $form->handleRequest($request);

        $newsletter = $this->getDoctrine()->getManager()->getRepository(Newsletter::class)->findAll();
        $emailContent = $email->getContent();

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($email);
            $em->flush();

                foreach($newsletter as $newsletter)
                {
                    $message = (new \Swift_Message($email->getTitle()))
                        ->setFrom('owleyewearfr@gmail.com')
                        ->setTo($newsletter->getEmail())
                        ->setBody(
                            $this->renderView(
                                'email/sendEmail.html.twig',
                                [
                                'content' => $emailContent
                                ]
                            ),
                            'text/html'
                        )
                    ;
                    $mailer->send($message);
                }
            return $this->redirectToRoute('admin_sendEmail');
        }

        return $this->render('admin/sendEmail.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
}
