<?php


namespace App\Backend\Infrastructure\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RafaController
{
    /**
     * @Route("/api/status/")
     */
    public function number(): Response
    {
        $string = file_get_contents("/etc/webapp/config.json");
        $json_a = json_decode($string,true);


        return new Response(
            '<html><body>Lucky number: '.$string.'</body></html>'
        );
    }
}