<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class VinylController {
    
    #[Route('/')]
    public function index() {

        dd('hello');
    }

    #[Route('/browse/{slug}')]
    public function browse($slug) {

        dd($slug);
    }
}
