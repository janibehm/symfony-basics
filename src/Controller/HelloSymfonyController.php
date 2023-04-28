<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloSymfonyController {
    #[Route('/')]
    public function HelloSymfony() {
        return new Response ("Hello symfony!");
    }
}