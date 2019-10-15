<?php

namespace App\Controller;
use App\Entity\CountDown;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CountdownController extends AbstractController
{
    
    public function createCountDown()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $compteur = new CountDown();
        $compteur -> setCreatedAt(new \Datetime("2019-10-26"));


        $entityManager->persist($compteur);

        $entityManager->flush();
        
       
    }
}
