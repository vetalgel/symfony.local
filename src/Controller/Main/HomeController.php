<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 21.02.21
 * Time: 20:05
 */

namespace App\Controller\Main;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response{

        $forRender= parent::renderDefault();
       return $this->render('main/index.html.twig', $forRender
        );
}
}