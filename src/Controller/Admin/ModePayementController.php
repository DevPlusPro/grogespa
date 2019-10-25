<?php
namespace App\Controller\Admin;

use App\Form\Type\ModePayementType;
use App\Entity\ModePayement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ModePayementController extends AbstractController
{
    /**
     * @Route("/payement/new", name="payement.new")
     */
    public function new()
    {
         $mode_payement = new ModePayement();
        $form = $this->createForm(ModePayementType::class, $mode_payement);
       return $this->render('admin/mode_payement/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/payement/list", name="payement.list")
     */
    public function list()
    {
        return $this->render('admin/mode_payement/new.html.twig');
    }
}