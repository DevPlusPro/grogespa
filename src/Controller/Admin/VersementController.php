<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\Versement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VersementController extends AbstractController
{
    /**
     * @Route("/versement/new", name="versement.new")
     */
    public function new()
    {
        return $this->render('admin/versement/new.html.twig');
    }

    /**
     * @Route("/versement/list", name="versement.list")
     */
    public function list()
    {
       return $this->render('admin/versement/new.html.twig');
    }
}