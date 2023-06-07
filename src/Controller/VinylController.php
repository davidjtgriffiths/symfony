<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController 
{
    
    #[Route('/')]
    public function homepage() {

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'Dave',
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse($slug) {

        dd($slug);
    }
}
