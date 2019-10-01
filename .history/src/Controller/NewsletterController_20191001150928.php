<?php

namespace App\Controller;

use App\Entity\Newsletter;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\DateTime;


class NewsletterController extends AbstractController
{
    /**
     * @Route("/home", name="newsletter")
     */
    public function getNews(Request $request, ObjectManager $manager/*, \Swift_Mailer $mailer*/)
    {
        $news = new Newsletter();
        $news->setDate(new \DateTime('now'));
        $news->setIsActive(false);

        $form = $this->createFormBuilder($news)
            ->add('email', TextType::class)
            ->add('save', SubmitType::class, ['label' => "s'abonner"])
            ->getForm();

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

                return $this->render('newsletter/home.html.twig');
            }

        return $this->render('newsletter/home.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
