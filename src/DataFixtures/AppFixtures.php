<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # Création des régions
       # $localization = new Localization();
       # $localization->setName('Politique')->setAlias('politique');

        $farmer= new Farmer();
        $farmer->setName('Chadwick Boseman')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('wales');

        $farmer= new Farmer();
        $farmer->setName('Denzel Washington')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('wales');

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('wales');

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('wales');

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('west-midlands');

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('west-midlands');

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('west-midlands');

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('west-midlands');

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('east-midlands');

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('east-midlands');

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('east-midlands');

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('east-midlands');

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('yorks-humber');

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('yorks-humber');

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('yorks-humber');

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('yorks-humber');

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
