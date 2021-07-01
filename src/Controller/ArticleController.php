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


    

}

?>
