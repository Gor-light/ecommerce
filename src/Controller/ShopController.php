<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShopController extends AbstractController
{
    #[Route('/', name: 'app_shop_index', methods: ['GET'])]
    public function index(): Response
    {
        return new Response('Hello shop');
    }
}
