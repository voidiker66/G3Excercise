<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
 	/**
     * @Route("/dashboard", name="app_dashboard")
     */
 	public function dashboard(Request $request)
 	{
 		return $this->render('dashboard/index.html.twig');
 	}
}