<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
	private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {
    	$user = new User();
    	$user->setNom('dabre');
    	$user->setPrenom('adjaratou');
    	$user->setSexe('feminin');
    	$user->setDateNaissance(\DateTime::createFromFormat('Y-m-d', "2018-09-09"));
    	$user->setLieuNaissance('bianouan');
    	$user->setProfession('informaticienne');
    	$user->setTypePieceId(1);
    	$user->setNumPiece('123456789');
    	$user->setTel('06125572');
    	$user->setEmail('adjaratoudabre22@gmail.com');
    	$user->setAdresse('koumassi djekonan');
 	   	$user->setLogin('adjaratoudabre22@gmail.com');
 	   	$user->setPassword($this->passwordEncoder->encodePassword(
             $user,
             'adjaratoudabre22'
         ));
    	
        $manager->persist($user);

        // add more products

        $manager->flush();
    }
}
