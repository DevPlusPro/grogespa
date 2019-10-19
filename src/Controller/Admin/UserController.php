<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user/new", name="user.new")
     */
    public function new()
    {
        return $this->render('admin/user/new.html.twig');
    }

    /**
     * @Route("/user/list", name="user.list")
     */
    public function list()
    {
       return $this->render('admin/user/new.html.twig');
    }
}