<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\Quartier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuartierController extends AbstractController
{
    /**
     * @Route("/quartier/new", name="quartier.new")
     */
    public function new()
    {
       return $this->render('admin/quartier/new.html.twig');
    }

    /**
     * @Route("/quartier/list", name="quartier.list")
     */
    public function list()
    {
        return $this->render('admin/quartier/new.html.twig');
    }
}