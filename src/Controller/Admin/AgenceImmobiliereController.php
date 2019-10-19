<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\AgenceImmobiliere;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AgenceImmobiliereController extends AbstractController
{
    /**
     * @Route("/agence/new", name="agence.new")
     */
    public function new()
    {
        

        return $this->render('admin/agence_immobiliere/new.html.twig');
    }

    /**
     * @Route("/agence/list", name="agence.list")
     */
    public function list()
    {
        return $this->render('admin/agence_immobiliere/list.html.twig');
    }


}