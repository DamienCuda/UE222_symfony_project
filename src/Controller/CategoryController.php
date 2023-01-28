<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/category')]
class CategoryController extends AbstractController
{
    // Route vers les catégories
    #[Route('/', name: 'category_index', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository, PaginatorInterface $paginator, Request $request): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            // Sytème de pagination
            $donnees = $this->getDoctrine()->getRepository(Category::class)->findBy([],[]);

            $category = $paginator->paginate(
                $donnees, /* Les query */
                $request->query->getInt('page', 1)/*numéro de la page par defaut dans l'url */,
                8/* Maximum par page */
            );

            return $this->render('category/index.html.twig', [
                'categories' => $category,
            ]);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers un l'ajout d'une catégorie
    #[Route('/new', name: 'category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $category = new Category();
            $form = $this->createForm(CategoryType::class, $category);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($category);
                $entityManager->flush();
    
                return $this->redirectToRoute('category_index', [], Response::HTTP_SEE_OTHER);
            }
    
            return $this->renderForm('category/new.html.twig', [
                'category' => $category,
                'form' => $form,
            ]);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers une catégorie selon son ID
    #[Route('/{id}', name: 'category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('category/show.html.twig', [
                'category' => $category,
            ]);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers l'édition d'une catégorie selon son ID
    #[Route('/{id}/edit', name: 'category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $form = $this->createForm(CategoryType::class, $category);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();
    
                return $this->redirectToRoute('category_index', [], Response::HTTP_SEE_OTHER);
            }
    
            return $this->renderForm('category/edit.html.twig', [
                'category' => $category,
                'form' => $form,
            ]);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers la suppressions d'une catégorie selon son ID
    #[Route('/{id}', name: 'category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
                $entityManager->remove($category);
                $entityManager->flush();
            }
    
            return $this->redirectToRoute('category_index', [], Response::HTTP_SEE_OTHER);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }
}
