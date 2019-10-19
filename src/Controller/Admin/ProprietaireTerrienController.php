<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\ProprietaireTerrien;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProprietaireTerrienController extends AbstractController
{
    /**
     * @Route("/proprietaire/new", name="proprietaire.new")
     */
    public function new()
    {
       return $this->render('admin/proprietaire_terrien/new.html.twig');
    }

    /**
     * @Route("/proprietaire/list", name="proprietaire.list")
     */
    public function list()
    {
        return $this->render('admin/proprietaire_terrien/new.html.twig');
    }
}