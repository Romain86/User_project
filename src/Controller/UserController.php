<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * 
 * @IsGranted("ROLE_ADMIN")
 */
class UserController extends AbstractController {

    /**
     * @Route("/index", name="user_index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
    /**
     * @Route("/user/add", name="user_add")
     */
    public function addForm(EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $roles = $user->getRoles();
        return $this->render('index.html.twig');
    }
}