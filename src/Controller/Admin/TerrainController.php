<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\Terrain;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TerrainController extends AbstractController
{
    /**
     * @Route("/terrain/new", name="terrain.new")
     */
    public function new()
    {
        return $this->render('admin/terrain/new.html.twig');
    }

    /**
     * @Route("/terrain/list", name="terrain.list")
     */
    public function list()
    {
        return $this->render('admin/terrain/new.html.twig');
    }
}