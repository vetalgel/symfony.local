<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 21.02.21
 * Time: 20:20
 */

namespace App\Controller\Admin;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class AdminHomeController extends AdminBaseController
{

    /**
     * @Route("/admin", name="admin_home")
     * @return Response
     *
     */

    public function index(): Response
    {
        $forRender = parent::renderDefault();
        return $this->render('admin/index.html.twig',$forRender);
    }
}