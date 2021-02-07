<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Post;
use App\Form\PostFormType;
use App\Security\LoginAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Carbon\Carbon;

class DefaultController extends AbstractController
{
 	/**
     * @Route("/dashboard", name="app_dashboard")
     */
 	public function dashboard(Request $request, GuardAuthenticatorHandler $guardHandler, LoginAuthenticator $authenticator)
 	{
 		$post = new Post();
        $form = $this->createForm(PostFormType::class, $post);
        $form->handleRequest($request);

        // Handle POST requests
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $post->setTitle($form->get('title')->getData());
            $post->setText($form->get('text')->getData());

            // $date = date('H:i:s d/m/Y');
            $post->setCreatedAt(Carbon::now());
            $post->setUserId($this->getUser());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            return $guardHandler->authenticateUserAndHandleSuccess(
                $this->getUser(),
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        // Handle GET requests

        // Get 10 most recent posts
        $repository = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repository->createQueryBuilder('p')
        	->leftJoin('p.user_id', 'u')
        	->orderBy('p.created_at', 'DESC')
        	->setMaxResults(10)
        	->getQuery()
        	->getResult();

 		return $this->render('dashboard/index.html.twig', [ 'posts' => $posts, 'postForm' => $form->createView() ]);
 	}
}