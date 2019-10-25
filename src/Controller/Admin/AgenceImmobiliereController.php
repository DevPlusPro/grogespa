<?php
namespace App\Controller\Admin;

use App\Form\Type\AgenceImmobiliereType;
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
        
        // creates a agence object and initializes some data for this example
        $agence = new AgenceImmobiliere();
        // $agence->setTitle('Abidjan');

        $form = $this->createForm(AgenceImmobiliereType::class, $agence);

        return $this->render('admin/agence_immobiliere/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/agence/list", name="agence.list")
     */
    public function list()
    {
        return $this->render('admin/agence_immobiliere/list.html.twig');
    }


}