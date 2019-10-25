<?php
namespace App\Controller\Admin;

use App\Form\Type\UserType;
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
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        return $this->render('admin/user/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/list", name="user.list")
     */
    public function list()
    {
       return $this->render('admin/user/list.html.twig');
    }
}