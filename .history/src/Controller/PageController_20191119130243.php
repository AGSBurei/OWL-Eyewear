<?php

namespace App\Controller;

use App\Entity\Page;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index(EntityManagerInterface $manager)
    {
        $page = $manager->getRepository(Page::class)->findAll();

        return $this->render('page/index.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/page/create", name="create_page", methods="GET|POST")
     */
    public function create(Request $request,  EntityManagerInterface $manager)
    {
        $page = new Page();

        $page->setUpdatedAt(new \DateTime('now'));
        $page->setIsActive(false);

        $form = $this->createFormBuilder($page)
            ->add('name', TextType::class, ['label' => 'Nom de la page *'])
            ->add('metaDescription', TextareaType::class, ['label' => 'Description de la page *'])
            ->add('metaAuthor', TextType::class, [
                'label' => 'Nom du créateur (optionnel)',
                'required'   => false,
                ])
            ->add('save', SubmitType::class, ['label' => "Valider"])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($page);
            $manager->flush();

            return $this->redirectToRoute('page');
        }

        return $this->render('page/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/page/{id}", name="show_page", methods="GET")
     */
    public function show(Page $page)
    {
        return $this->render('page/show.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/page/delete/{id}", name="delete_page")
     */
    public function delete($id, EntityManagerInterface $manager)
    {
        $page = $manager->getRepository(Page::class)->findOneBy(['id' => $id]);

        $manager->remove($page);
        $manager->flush();

        return $this->redirectToRoute('page');
    }
}
