<?php

namespace App\Controller;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;



class LoginCheckController extends AbstractController
{
    #[Route('/login/check', name: 'app_login_check')]
    public function index(Request $request, UserRepository $UserList)  
    {
        /*
        $login = "Admin";
        $password = "test";

        $log = $request->get('loginName');
        $pass = $request->get('password');

        if ($log === $login && $pass === $password) {
            return $this->redirectToRoute('article_index');
        } else {
           return $this->redirectToRoute('app_login', array('errorMessage'=>'Blabla manger'));
        }
        */
    }

}
?>