<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $categorie = new Category();
        $categorie->setName("Catégorie 1");
        $manager->persist($categorie);

        $categorie = new Category();
        $categorie->setName("Catégorie 2");
        $manager->persist($categorie);

        $categorie = new Category();
        $categorie->setName("Catégorie 3");
        $manager->persist($categorie);

        $categorie = new Category();
        $categorie->setName("Catégorie 4");
        $manager->persist($categorie);

        $categorie = new Category();
        $categorie->setName("Catégorie 5");
        $manager->persist($categorie);

        $article = new Article();
        $article->setTitle("Article 1");
        $article->setContent("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra urna in nunc dapibus tincidunt et eu magna. Pellentesque venenatis varius orci sit amet condimentum. Quisque sit amet enim id nisl consectetur gravida. Curabitur efficitur felis rutrum ligula convallis convallis. Vestibulum eget dictum lorem. Vestibulum est justo, fermentum eu eleifend vestibulum, lacinia efficitur erat. Proin a ligula lorem. In iaculis dignissim sodales.");
        $article->setCategory($categorie);
        $article->setImg("https://picsum.photos/300");
        $article->setPublished(0); 
        $article->setDatePublication('05-07-2023');
        $manager->persist($article);

        $article = new Article();
        $article->setTitle("Article 2");
        $article->setContent("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $article->setCategory($categorie);
        $article->setImg("https://picsum.photos/300");
        $article->setPublished(0);
        $article->setDatePublication('25-12-2021');
        $manager->persist($article);

        $article = new Article();
        $article->setTitle("Article 3");
        $article->setContent("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $article->setCategory($categorie);
        $article->setImg("https://picsum.photos/300");
        $article->setPublished(1);
        $article->setDatePublication('10-03-2022');
        $manager->persist($article);
        $article = new Article();

        $article->setTitle("Article 4");
        $article->setContent("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $article->setCategory($categorie);
        $article->setImg("https://picsum.photos/300");
        $article->setPublished(1);
        $article->setDatePublication('26-04-2022');
        $manager->persist($article);
        $article = new Article();

        $article->setTitle("Article 5");
        $article->setContent("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $article->setCategory($categorie);
        $article->setImg("https://picsum.photos/300");
        $article->setPublished(1);
        $article->setDatePublication('01-01-2022');
        $manager->persist($article);
        $article = new Article();

        $article->setTitle("Article 6");
        $article->setContent("Morbi viverra facilisis aliquet. Phasellus suscipit arcu id felis tempor, in fringilla turpis dictum. Fusce porta finibus diam, vitae lacinia nibh finibus id. Donec facilisis nisl quis egestas sollicitudin. Aenean quis nulla est. Aliquam volutpat dolor eget ultricies maximus. Maecenas felis turpis, lacinia et purus in, viverra sagittis ex. Ut laoreet est sit amet ligula auctor, in venenatis magna interdum. Maecenas suscipit accumsan libero, auctor ullamcorper lectus porta semper.");
        $article->setCategory($categorie);
        $article->setImg("https://picsum.photos/300");
        $article->setPublished(1);
        $article->setDatePublication('08-08-2022');
        $manager->persist($article);

        $manager->flush();
    }
}
