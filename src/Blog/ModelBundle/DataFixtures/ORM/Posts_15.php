<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 18/10/16
 * Time: 10:22 م
 */

namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 *  Fixture forAuthor Entity
 */

class Posts_10 extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $p1= new Post();
        $p1->setTitle(' The ServerName directive sets the request scheme,');
        $p1->setBody('
	# For most configuration files from conf-available/, which are
	# enabled or disabled at a global level, it is possible to
	# include a line for only one particular virtual host. For example the
	# following line enables the CGI configuration for this');
        $p1->setAuthor($this->getAuthor($manager,'David'));
        $p2= new Post();
        $p2->setTitle('kernel request');
        $p2->setBody('Lors de l evenemet kernel request les ecoutes se greffent
       sur la requête et l enrichissent d information cest le moment par exemple ou les systeme de routage fait correspondre
        url avec un bom de route et ses parametres toutes les information non normalisee sur la requete sont stockee dans la 
        propriete attributes de l objet request');
        $p2->setAuthor($this->getAuthor($manager,'Eddie'));

        $p3= new Post();
        $p3->setTitle('Download the Bundle');
        $p3->setBody('Doctrine2 fixtures are PHP classes where you can create objects and persist them to the database. 
        Like all classes in Symfony, fixtures should live inside one of your application bundles.');
        $p3->setAuthor($this->getAuthor($manager,'Elsa'));
        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);

        $manager->flush();
    }
    public function  getAuthor(ObjectManager $manager,$name){
        return $manager->getRepository('ModelBundle:Author')
            ->findOneBy(array('name'=>$name));
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 10;
    }
}