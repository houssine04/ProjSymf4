<?php

namespace App\Controller;

use App\Services\ComplexObject;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="hello")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function index($name, ComplexObject $complexObject)
    {
        //call service by autowiring
//        $name = $complexObject->doSomething($name);
//        $response = new Response();
//
//        $response->setContent('<html><body><h1>Hello '. $name .'</h1></body></html>');
//
//        return $response;

        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }
}
