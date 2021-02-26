<?php

namespace App\DataFixtures;

use App\Entity\Farmer;
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
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Denzel Washington')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('wales');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('west-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('east-midlands');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shemar Moore')
            ->setAddress('2590 Blue dress')
            ->setZipcode('20000')
            ->setCity('Manchester')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Shawn Wayans')
            ->setAddress('1 Dans mon lit')
            ->setZipcode('5000')
            ->setCity('whatever')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('52 years')
            ->setZipcode('30000')
            ->setCity('Panny')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Paris Road')
            ->setZipcode('78000')
            ->setCity('newYork')
            ->setLocalization('yorks-humber');
        $manager->persist($farmer);

        #Creation Farmer
        $farmer= new Farmer();
        $farmer->setName('Chris Pine')
            ->setAddress('25 Brickroad')
            ->setZipcode('10000')
            ->setCity('Edimburg')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Ian Somerhalder')
            ->setAddress('25 Plumkroad')
            ->setZipcode('20000')
            ->setCity('Glasgow')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('William Levy')
            ->setAddress('25 Oxford Street')
            ->setZipcode('30000')
            ->setCity('Aberdeen')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('JDavid Giuntoli')
            ->setAddress('25 Flash Road')
            ->setZipcode('41000')
            ->setCity('Dundee')
            ->setLocalization('scotland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Matt Bomer')
            ->setAddress('25 Block three')
            ->setZipcode('BT47 2AS')
            ->setCity('Londonderry')
            ->setLocalization('northern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Idris Elba')
            ->setAddress('Queen Elisabeth rod')
            ->setZipcode('BT1 1BT')
            ->setCity('Belfast')
            ->setLocalization('northern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Henry Cavill')
            ->setAddress('Superman way')
            ->setZipcode('BT47 3AS')
            ->setCity('Newry')
            ->setLocalization('northern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Patrick Dempsey')
            ->setAddress('London Road')
            ->setZipcode('BTD E5F')
            ->setCity('Soho')
            ->setLocalization('nothern-ireland');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Keith Harrigton')
            ->setAddress('Winter street')
            ->setZipcode('LA1 1AE')
            ->setCity('Lancaster')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('John Stamos')
            ->setAddress('San Fran street')
            ->setZipcode('LA1 1AJ')
            ->setCity('Liverpool')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Micheal B Jordan')
            ->setAddress('1 Kingcross road')
            ->setZipcode('CH1 1AF')
            ->setCity('Chester')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Brad Pitt')
            ->setAddress('Nine lives boulevard')
            ->setZipcode('CA1 1AF')
            ->setCity('Carlisle')
            ->setLocalization('north-west');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Chris Hemsworth')
            ->setAddress('22 Kings Road')
            ->setZipcode('DH1 1AF')
            ->setCity('Durham')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Pedro Pascal')
            ->setAddress('1 DEA bld')
            ->setZipcode('NE10 0AH')
            ->setCity('Gateshad')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('José María Yazpik')
            ->setAddress('Netflix street')
            ->setZipcode('SR1 1AG')
            ->setCity('Sunderland')
            ->setLocalization('north-east');
        $manager->persist($farmer);

        $farmer= new Farmer();
        $farmer->setName('Pêpê Rapazote')
            ->setAddress('Season Two boulevard')
            ->setZipcode('NE1 1DF')
            ->setCity('Newcastle')
            ->setLocalization('north-east');
        $manager->persist($farmer);


        $manager->flush();
    }
}
