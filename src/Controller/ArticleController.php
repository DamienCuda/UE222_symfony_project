<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/article')]
class ArticleController extends AbstractController
{
    // Route vers la liste d'article admin
    #[Route('/', name: 'article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // Sytème de pagination
        $donnees = $this->getDoctrine()->getRepository(Article::class)->findBy([],['datePublication' => 'desc']);

        $articles = $paginator->paginate(
            $donnees, /* Les query */
            $request->query->getInt('page', 1)/*numéro de la page par defaut dans l'url */,
            10/* Maximum par page */
        );

        // On redirige en fonction du rôle de la personne connectée
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('article/index.html.twig', [
                'articles' => $articles,
            ]);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers la liste d'article utilisateur
    #[Route('/user', name: 'article_user', methods: ['GET'])]
    public function user(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {

        // Sytème de pagination
        $donnees = $this->getDoctrine()->getRepository(Article::class)->findBy([],['datePublication' => 'desc']);

        $articles = $paginator->paginate(
            $donnees, /* Les query */
            $request->query->getInt('page', 1)/*numéro de la page par defaut dans l'url */,
            8/* Maximum par page */
        );

        return $this->render('article/article_user.html.twig', [
            'articles' => $articles,
        ]);
    }

    // Route vers l'ajout d'article
    #[Route('/new', name: 'article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            
            $article = new Article();
            $form = $this->createForm(ArticleType::class, $article);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($article);
                $entityManager->flush();
    
                return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
            }
    
            return $this->renderForm('article/new.html.twig', [
                'article' => $article,
                'form' => $form,
            ]);

        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers un article selon son ID
    #[Route('/{id}', name: 'article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    // Route vers l'édition d'un article selon son ID
    #[Route('/{id}/edit', name: 'article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $form = $this->createForm(ArticleType::class, $article);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();
    
                return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
            }
    
            return $this->renderForm('article/edit.html.twig', [
                'article' => $article,
                'form' => $form,
            ]);
        }else{
            return $this->redirectToRoute('article_user');
        }
    }

    // Route vers la suppression article selon son ID
    #[Route('/{id}', name: 'article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
                $entityManager->remove($article);
                $entityManager->flush();
            }
    
            return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
        }else{
            return $this->redirectToRoute('article_user');
        }
        
    }
}
