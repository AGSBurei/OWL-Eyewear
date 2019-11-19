<?php

namespace App\Controller;

use DateTime;
use App\Entity\Newsletter;
use App\Form\NewsletterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home", methods="POST|GET")
     */
    public function home(Request $request, EntityManagerInterface $manager/*, \Swift_Mailer $mailer*/)
    {

        $news = new Newsletter();

        $news->setDate(new \DateTime('now'));
        $news->setIsActive(true);

        $form = $this->createForm(NewsletterType::class, $news);

        $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid())
            {
                 $message = (new \Swift_Message('Newsletter'))
                     ->setFrom('send@exemple.com')
                     ->setTo($news->getEmail())
                     ->setBody(
                         $this->renderView(
                             'email/newsletter.html.twig',
                         )
                     )
                 ;    

                 $mailer->send($message);

                $manager->persist($news);
                $manager->flush();

                return $this->render('newsletter/home.html.twig');
            }

        return $this->render('main/home.html.twig', [
            'form' => $form->createView(),
            
        ]);

    }
    /**
     * @Route("/faq")
     */
    public function faq()
    {
        return $this->render('main/faq.html.twig');
    }

    /**
     * @Route("/test")
     */
    public function tst()
    {
        return $this->render('main/test.html.twig');
    }

}
