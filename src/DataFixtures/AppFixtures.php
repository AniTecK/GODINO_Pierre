<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Livres = [
            [
                "Harry Potter à l'école des sorciers",
                "https://static.fnac-static.com/multimedia/Images/FR/NR/ba/d8/1d/1956026/1540-1/tsp20180921093018/Harry-Potter-a-l-ecole-des-sorciers.jpg",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
            [
                "Harry Potter et la chambre des secrets",
                "https://kbimages1-a.akamaihd.net/9c8dd7ef-8f2b-4ca1-b2cd-6a45bdc6285b/1200/1200/False/harry-potter-et-la-chambre-des-secrets-1.jpg",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
            [
                "Harry Potter et le prisonnier d'Azkaban",
                "https://images-na.ssl-images-amazon.com/images/I/51oBllyxx%2BL._SX342_BO1,204,203,200_.jpg",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
            [
                "Harry Potter et la coupe de feu",
                "https://images.epagine.fr/553/9782070624553_1_75.jpg",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
            [
                "Harry Potter et l'ordre du phénix",
                "https://ec56229aec51f1baff1d-185c3068e22352c56024573e929788ff.ssl.cf1.rackcdn.com/attachments/large/3/8/9/006034389.jpg",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
            [
                "Harry Potter et le prince de sang mélé",
                "https://media.cultura.com/media/catalog/product/cache/1/image/1000x1000/9df78eab33525d08d6e5fb8d27136e95/h/a/harry-potter-et-le-prince-de-sang-mele-tea-9781781101087_0.jpeg?t=1509578161",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
            [
                "Harry Potter et les reliques de la mort",
                "https://kbimages1-a.akamaihd.net/c1e7d032-f0a2-40c0-9d56-349b82f84213/1200/1200/False/harry-potter-et-les-reliques-de-la-mort-1.jpg",
                "JK Rowling",
                "Fantastique",
                "Harry Potter à l'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le 9 octobre 1998."
            ],
        ];
        $livre = [];
        foreach ($Livres as $livre) {
            $temp = new Livre();
            $temp->setTitre($livre[0]);
            $temp->setCouverture($livre[1]);
            $temp->setAuteur($livre[2]);
            $temp->setPrix(25);
            $temp->setGenre($livre[3]);
            $temp->setResume($livre[4]);
            $manager->persist($temp);
        }
        $manager->flush();
    }
}
