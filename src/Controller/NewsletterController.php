<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\NewsletterType;
use App\Repository\NewsletterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class NewsletterController extends AbstractController
{


    /**
     * @Route("/admin/export", name="newsletter_export", methods="GET")
     */
    public function export(EntityManagerInterface $manager, Request $request)
    {
        $fileName = "email_newsletter_" . date("d_m_Y") . ".csv";
        $response = new StreamedResponse();

        $news = $manager->getRepository(Newsletter::class)->findAll();

        dump($news);
        $response->setCallback(function() use ($news){
            $handle = fopen('php://output', 'w+');
 
            fputcsv($handle, [
                'ID',
                utf8_decode('Email'),
                'Date',
                'IsActive',
            ], ';');
 
            foreach ($news as $news)
            {
                fputcsv($handle,array(
                    $news->getId(),
                    utf8_decode($news->getEmail()),
                    $news->getDate()->format('d/m/Y'),
                    $news->getIsActive()
                ),';');
            }
            fclose($handle);
        });
 
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8', 'application/force-download');
        $response->headers->set('Content-Disposition','attachment; filename='.$fileName);
        
        return $response;
    }
}
