<?php

namespace App\DataFixtures;

use App\Entity\Farmer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $localization = new Localization();



       #Creation Farmer
       $farmer= new Farmer();
       $farmer->setName('Chris Pine')
              ->setAddress('25 Brickroad')
              ->setZipcode('10000')
              ->setCity('Edimburg')
              ->setLocalization('scotland');

        $farmer= new Farmer();
        $farmer->setName('Ian Somerhalder')
            ->setAddress('25 Plumkroad')
            ->setZipcode('20000')
            ->setCity('Glasgow')
            ->setLocalization('scotland');

        $farmer= new Farmer();
        $farmer->setName('William Levy')
            ->setAddress('25 Oxford Street')
            ->setZipcode('30000')
            ->setCity('Aberdeen')
            ->setLocalization('scotland');

        $farmer= new Farmer();
        $farmer->setName('JDavid Giuntoli')
            ->setAddress('25 Flash Road')
            ->setZipcode('41000')
            ->setCity('Dundee')
            ->setLocalization('scotland');

        $farmer= new Farmer();
        $farmer->setName('Matt Bomer')
            ->setAddress('25 Block three')
            ->setZipcode('BT47 2AS')
            ->setCity('Londonderry')
            ->setLocalization('northern-ireland');

        $farmer= new Farmer();
        $farmer->setName('Idris Elba')
            ->setAddress('Queen Elisabeth rod')
            ->setZipcode('BT1 1BT')
            ->setCity('Belfast')
            ->setLocalization('northern-ireland');

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('Superman way')
            ->setZipcode('BT47 3AS')
            ->setCity('Newry')
            ->setLocalization('northern-ireland');

        $farmer= new Farmer();
        $farmer->setName('Patrick Dempsey')
            ->setAddress('London Road')
            ->setZipcode('BTD E5F')
            ->setCity('Soho')
            ->setLocalization('nothern-ireland');

        $farmer= new Farmer();
        $farmer->setName('Keith Harrigton')
            ->setAddress('Winter street')
            ->setZipcode('LA1 1AE')
            ->setCity('Lancaster')
            ->setLocalization('north-west');

        $farmer= new Farmer();
        $farmer->setName('John Stamos')
            ->setAddress('San Fran street')
            ->setZipcode('LA1 1AJ')
            ->setCity('Liverpool')
            ->setLocalization('north-west');

        $farmer= new Farmer();
        $farmer->setName('Micheal B Jordan')
            ->setAddress('1 Kingcross road')
            ->setZipcode('CH1 1AF')
            ->setCity('Chester')
            ->setLocalization('north-west');

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Nine lives boulevard')
            ->setZipcode('CA1 1AF')
            ->setCity('Carlisle')
            ->setLocalization('north-west');

        $farmer= new Farmer();
        $farmer->setName('Chris Hemsworth')
            ->setAddress('22 Kings Road')
            ->setZipcode('DH1 1AF')
            ->setCity('Durham')
            ->setLocalization('north-east');

        $farmer= new Farmer();
        $farmer->setName('Pedro Pascal')
            ->setAddress('1 DEA bld')
            ->setZipcode('NE10 0AH')
            ->setCity('Gateshad')
            ->setLocalization('north-east');

        $farmer= new Farmer();
        $farmer->setName('José María Yazpik')
            ->setAddress('Netflix street')
            ->setZipcode('SR1 1AG')
            ->setCity('Sunderland')
            ->setLocalization('north-east');

        $farmer= new Farmer();
        $farmer->setName('Pêpê Rapazote')
            ->setAddress('Season Two boulevard')
            ->setZipcode('NE1 1DF')
            ->setCity('Newcastle')
            ->setLocalization('north-east');



        // $product = new Product();
        // $manager->persist($product);}



        $manager->flush();
    }
}
