<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ControllerDefaultController extends AbstractController
{

    /**
     * @Route("/", name="controller_default")
     */
    public function index(Request $request)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->render('controller_default/index.html.twig', [
            'posts' => $posts,
        ]);
    }

}
