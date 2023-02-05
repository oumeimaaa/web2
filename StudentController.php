<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class StudentController extends AbstractController {

    #[Route('/welcome')]
    public function index(){
        return new Response("bonjour");

    }
    #[Route('/welcome/{name}/{para2}')]
    public function indexPara($name,$para2){
        return new Response("bonjour ".$name.' '.$para2);


    }

}

?>
