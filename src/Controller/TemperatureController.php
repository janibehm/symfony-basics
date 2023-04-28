<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController {
    #[Route('/temp')]
    public function GetTemperature(Request $request){
        $temp = $request->query->get('temperature');
        $fahrenheit = ($temp * 1.8) + 32.00;

        if(!is_numeric($temp)){
            return new Response("Error: Temperature must be a number", 400);
        }
        return new Response("The temperature in Fahrenheit : " . $fahrenheit);
    }
}

