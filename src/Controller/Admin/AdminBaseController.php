<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 21.02.21
 * Time: 20:19
 */

namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBaseController extends AbstractController
{
    public function renderDefault(){
        return [
            'title' => 'Значение по умолчанию админка'
        ];
    }
}