<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController {
    /**
     * @Route("/articles", name="article")
     */
    public function listArticles()
    {
        return new Response('mes articles');
    }

    /**
     * @Route("/articleshow/{id}", name="articleshow")
     */
    public function articleShow($id)
    { // creation du tableau
        $articles = [
            1 => [
                "title" => "La vaccination c'est trop géniale",
                "content" => "bablablblalba",
                "id" => 1
            ],
            2 => [
                "title" => "La vaccination c'est pas trop géniale",
                "content" => "blablablabla",
                "id" => 2
            ],
            3 => [
                "title" => "Balkany c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3
            ],
            4 => [
                "title" => "Balkany c'est pas trop génial",
                "content" => "balblalblalb",
                "id" => 4
            ]
        ];

        // déclaration de la variable article qui contient tous les articles défini par l'id
        $article = $articles[$id];

        // renvoie de la réponse du titre de l'article dont l'id a été préciser dans l'url
        return new Response($article['title']);
    }



}

