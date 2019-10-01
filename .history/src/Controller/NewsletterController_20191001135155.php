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


class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function index()
    {
        return $this->render('newsletter/index.html.twig', [
            'controller_name' => 'NewsletterController',
        ]);
    }

    public function getNews(Request $request, ObjectManager $manager)
    {
        $news = new Newsletter();
        $news->setDate(new \DateTime('tomorrow'));
        $news->setIsActive(false);

        $form = $this->createFormBuilder($news)
            ->add('email', TextType::class)
            ->add('save', SubmitType::class, ['label' => "s/'abonner"])
            ->getForm();

            if($form->isSubmitted() && $form->isValid())
            {
                $manager->persist($news);
                $manager->flush();
            }

        return $this->render('main/home.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
