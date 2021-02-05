<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
	/**
     * @Route("/", name="app_homepage", methods={"GET"})
     */
    public function index(): Response
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig', [
        	'number' => $number
        ]);
    }
}