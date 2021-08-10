<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DomainsController extends AbstractController
{
    /**
     * @Route("/domains", name="domains")
     */
    public function index(): Response
    {
        //on appelle la liste de tous les domaines :
        
        return $this->render('domains/index.html.twig', [
            'controller_name' => 'DomainsController',
        ]);
    }
}
