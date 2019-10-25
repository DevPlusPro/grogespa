<?php
namespace App\Controller\Admin;

use App\Form\Type\SiteType;
use App\Entity\Site;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site/new", name="site.new")
     */
    public function new()
    {
        // creates a groupe object and initializes some data for this example
        $site = new Site();

        $form = $this->createForm(SiteType::class, $site);
       return $this->render('admin/groupe/new.html.twig',[
            'form' => $form->createView(),
        ]);
       return $this->render('admin/site/new.html.twig');
    }
    /**
     * @Route("/site/list", name="site.list")
     */
    public function list()
    {
       return $this->render('admin/site/list.html.twig');
    }
}