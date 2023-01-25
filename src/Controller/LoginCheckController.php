<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;



class LoginCheckController extends AbstractController
{
    #[Route('/login/check', name: 'app_login_check')]
    public function index(Request $request)  
    {
        $login = "Admin";
        $password = "Cvtic2022//";

        $log = $request->get('loginName');
        $pass = $request->get('password');

        if ($log === $login && $pass === $password) {
            return $this->redirectToRoute('article_index');
        } else {
           return $this->redirectToRoute('app_login', array('errorMessage'=>'Blabla manger'));
        }

    }
}
?>