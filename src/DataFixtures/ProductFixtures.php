<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $airPods = new Product();
        $airPods->setName('AirPods');
        $airPods->setDescription('Wireless headphones for music and calls.');
        $airPods->setPrice('5800');
        $airPods->setStock(10);
        $airPods->setIsActive(true);
        $manager->persist($airPods);

        $macBook = new Product();
        $macBook->setName('MacBook');
        $macBook->setDescription('Powerful laptop for work, study, and coding.');
        $macBook->setPrice('28000');
        $macBook->setStock(5);
        $macBook->setIsActive(true);
        $manager->persist($macBook);

        $iPhone = new Product();
        $iPhone->setName('iPhone');
        $iPhone->setDescription('Modern smartphone with great camera and performance.');
        $iPhone->setPrice('33000');
        $iPhone->setStock(7);
        $iPhone->setIsActive(true);
        $manager->persist($iPhone);

        $manager->flush();
    }
}