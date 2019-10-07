<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\NewsletterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class NewsletterController extends AbstractController
{
    /**
     * @Route("/home", name="newsletter_home", methods="POST|GET")
     */
    public function getNews(Request $request, EntityManagerInterface $manager/*, \Swift_Mailer $mailer*/)
    {
        $news = new Newsletter();

        $news->setDate(new \DateTime('now'));
        $news->setIsActive(false);

        $form = $this->createForm(NewsletterType::class, $news);

        $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid())
            {
                // $message = (new \Swift_Message('Newsletter'))
                //     ->setFrom('send@exemple.com')
                //     ->setTo($news->getEmail())
                //     ->setBody(
                //         $this->renderView(
                //             'email/newsletter.html.twig',
                //         )
                //     )
                // ;    

                // $mailer->send($message);

                $manager->persist($news);
                $manager->flush();

                // return $this->render('newsletter/home.html.twig'); g c po pk ça marche po ça
            }

        return $this->render('newsletter/home.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
