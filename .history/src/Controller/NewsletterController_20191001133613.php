<?php

namespace App\Controller;

use App\Entity\Newsletter;
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

    public function getNews(Request $request)
    {
        $news = new Newsletter();
        $news->setDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($news)
            ->add('email', TextType::class)
            ->add("s/'abonner", SubmitType::class, ['label' => 'Send Email'])
            ->getForm();

    }
}
