<?php

namespace App\Controller;

use App\Entity\Newsletter;
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
     * @Route("/home", name="newsletter_home", methods="GET")
     */
    public function getNews(Request $request, ObjectManager $manager/*, \Swift_Mailer $mailer*/)
    {
        $news = new Newsletter();
        $news->setDate(new \DateTime('now'));
        $news->setIsActive(false);

        $form = $this->createFormBuilder($news)
            ->add('email', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

            dump($news);

            if($form->isSubmitted() && $form->isValid())
            {
                dump($form);die;
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

                return $this->render('newsletter/home.html.twig');
            }

        return $this->render('newsletter/home.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
