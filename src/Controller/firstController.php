<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Flex\Response;

class firstController {
    public function home(){
        return new Response("hola Olga que tal estas");
    }
}

?>