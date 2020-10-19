<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewController extends AbstractController
{
    /**
     * @Route("/new", name="new")
     */
    public function index()
    {
        return $this->render('new/index.html.twig', [
            'controller_name' => 'NewController',
        ]);
    }

    /**
     * @Route("/new2", name="new2")
     */
    public function test()
    {
        return $this->render('new/test.html', [
            'var1' => 'I am the value of var1',
        ]);
    }

    /**
     * @Route("/onemore/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'slug testing: %s',
            $slug
        ));
    }
}
