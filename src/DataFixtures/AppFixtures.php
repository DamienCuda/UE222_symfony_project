<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setEmail("login@login.fr");
        $user->setPassword("$2y$13$.7SnqTUYrt6Iod1LMLk4M.ELOE4dg9rOGHQQVfM6Cjz8YeqmpMYvq");
        $user->setRoles([]);
        $manager->persist($user);

        $user = new User();
        $user->setEmail("admin@admin.fr");
        $user->setPassword("$2y$13$.7SnqTUYrt6Iod1LMLk4M.ELOE4dg9rOGHQQVfM6Cjz8YeqmpMYvq");
        $user->setRoles(["ROLE_ADMIN"]);
        $manager->persist($user);


        for ($i = 1; $i < 21; $i++){

            $num = rand(1,5);
            $published_random = rand(0,1);
            $categorie = new Category();
            $categorie->setName("Catégorie $num");
            $manager->persist($categorie);

            $article = new Article();
            $article->setTitle("Article $i");
            $article->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra urna in nunc dapibus tincidunt et eu magna. Pellentesque venenatis varius orci sit amet condimentum. Quisque sit amet enim id nisl consectetur gravida. Curabitur efficitur felis rutrum ligula convallis convallis. Vestibulum eget dictum lorem. Vestibulum est justo, fermentum eu eleifend vestibulum, lacinia efficitur erat. Proin a ligula lorem. In iaculis dignissim sodales.");
            $article->setCategory($categorie);
            $article->setImg("https://picsum.photos/300/300?random=$i");
            $article->setPublished($published_random); 
            $article->setDatePublication("$i-07-2023");
            $manager->persist($article);
        }


        $manager->flush();
    }
}
