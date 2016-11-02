<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 18/10/16
 * Time: 10:22 م
 */

namespace Blog\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Author;
/**
 *  Fixture forAuthor Entity
 */

class Author_10 extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $a1= new Author();
        $a1->setName('David');
        $a2= new Author();
        $a2->setName('Eddie');
        $a3= new Author();
        $a3->setName('Elsa');

        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);
        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 10;
    }
}