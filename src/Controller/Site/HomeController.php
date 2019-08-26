<?php 
namespace App\Controller\Site;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

	/**
     * @Route("/")
    */
    public function index()
    {
        
    	$number=1000;
        return $this->render('/site/index.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/about-us", name="about-us", methods={"GET"})
    */
    public function about()
    {
        
        $number=1000;
        return $this->render('/site/about-us.html.twig');
    }
}