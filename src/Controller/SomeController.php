<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;

class SomeController extends AbstractController
{
    #[Route('/show')]
    public function showAction(
        SerializerInterface     $serializer,
        Request                 $request
    ): Response {
        dd($request);
    }
}
