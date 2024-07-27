<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/api/blog', name: 'api_blog', methods: ['GET'])]
    public function index(): Response 
    {
        $data =[
            'id' => '1',
            'name' => 'Mikhail',
        ];
        return $this->json($data); 
    }
}