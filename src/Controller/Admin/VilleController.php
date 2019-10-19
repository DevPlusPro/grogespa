<?php
namespace App\Controller\Admin;

use App\Form\Type\VilleType;
use App\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VilleController extends AbstractController
{
    /**
     * @Route("/ville/new", name="ville.new")
     */
    public function new()
    {
        // creates a ville object and initializes some data for this example
        $ville = new Ville();
        $ville->setTitle('Abidjan');

        $form = $this->createForm(VilleType::class, $ville);

        return $this->render('admin/ville/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ville/list", name="ville.list")
     */
    public function list()
    {
       return $this->render('admin/ville/list.html.twig');
    }
}