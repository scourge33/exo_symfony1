<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController {
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return new Response('Oi');
    }

    /**
     * @Route("/mentions", name="mentionslegales")
     */
    public function mentionslegales()
    {
        var_dump('mentions légales'); die;
    }

}

?>
