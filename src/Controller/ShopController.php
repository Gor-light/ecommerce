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
        return $this->render('shop/index.html.twig', [
            'products' => $this->getProducts(),
        ]);
    }

    private function getProducts(): array
    {
        return [
            [
                'name' => 'AirPods',
                'description' => 'Wireless headphones for music and calls.',
                'price' => 5800,
            ],
            [
                'name' => 'MacBook',
                'description' => 'Powerful laptop for work, study, and coding.',
                'price' => 28000,
            ],
            [
                'name' => 'iPhone',
                'description' => 'Modern smartphone with great camera and performance.',
                'price' => 33000,
            ],
        ];
    }
}