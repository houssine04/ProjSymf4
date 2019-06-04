<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $i = 1;
        while ($i <= 10) {
            $article = new Article();
            $article->setTitle("titre test " . $i)
                ->setContent("text text text")
                ->setDate(new \DateTime());

            $manager->persist($article);
            $i++;
        }

        $manager->flush();


    }
}
