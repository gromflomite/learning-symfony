<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OneMoreController extends AbstractController
{
    /**
     * @Route("/one/more", name="one_more")
     */
    public function index()
    {
        return $this->render('one_more/index.html.twig', [
            'controller_name' => 'OneMoreController',
        ]);
    }
}
