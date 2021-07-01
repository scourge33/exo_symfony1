<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PokerController {

    //annotation pour déterminer la route URL

    /**
     * @Route("/poker", name="poker")
     */

    //déclaration de la méthode de requête
    public function poker()
    {
        // creation de la classe Request en httpFoundation avec createFromGlobal pour récupérer les informations de l'utilisateur
        $request = Request::createFromGlobals();
        // creation de la variable de stockage age
        $age = $request->query->get('age');

        // boucle if pour déterminer l'accès au site pour les majeurs
        if ($age >= 18) {
            return new Response('Bienvenue');
        } else {
            return new Response ('Accès refusé');
        }
    }

}
