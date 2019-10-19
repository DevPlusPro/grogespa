<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\Groupe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GroupeController extends AbstractController
{
    /**
     * @Route("/groupe/new", name="groupe.new")
     */
    public function new()
    {
        // creates a groupe object and initializes some data for this example
       return $this->render('admin/groupe/new.html.twig');
    }

    /**
     * @Route("/groupe/list", name="groupe.list")
     */
    public function list()
    {
        return $this->render('admin/groupe/new.html.twig');
    }
}