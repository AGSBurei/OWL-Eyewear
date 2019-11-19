<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Template;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TemplateController extends AbstractController
{
    /**
     * @Route("/template", name="template")
     */
    public function index(EntityManagerInterface $manager)
    {
        $template = $manager->getRepository(Template::class)->findAll();

        return $this->render('template/index.html.twig', [
            'template' => $template,
        ]);
    }

    /**
     * @Route("/template/create", name="create_template", methods="GET|POST")
     */
    public function createTemplate(Request $request, EntityManagerInterface $manager): Response
    {
        $template = new Template();
        $template->setCreatedAt(new \DateTime('now'));
        $template->setIsActive(false);

        $form = $this->createFormBuilder($template)
            ->add('title', textType::class, ['label' => 'Sujet'])
            ->add('content', CKEditorType::class, ['label' => 'Contenu'])
            ->add('save', SubmitType::class, ['label' => "Valider"])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($template);
            $manager->flush();

            return $this->redirectToRoute('template');
        }

        return $this->render('template/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/template/{id}", name="show_template")
     */
    public function show(Template $template)
    {
        return $this->render('template/show.html.twig', [
            'template' => $template,
        ]);
    }

    /**
     * @Route("/template/select", name="select_template", methods="GET|POST")
     */
    public function selectTemplate(Request $request, EntityManagerInterface $manager)
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
            ->add('templates', EntityType::class, [
                'label' => 'Visuel (optionnel)',
                'class' => 'App:Template',
                'choice_label' => 'title',
                'required'   => false,
            ])
            ->add('save', SubmitType::class, ['label' => "Valider"])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($page);
            $manager->flush();

            return $this->redirectToRoute('select_template');
        }

        return $this->render('template/select.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/template/delete/{id}", name="delete_template")
     */
    public function delete($id, EntityManagerInterface $manager)
    {
        $template = $manager->getRepository(Template::class)->findOneBy(['id' => $id]);

        $manager->remove($template);
        $manager->flush();

        return $this->redirectToRoute('template');
    }
}
