<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 21.02.21
 * Time: 20:16
 */

namespace App\Controller\Main;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function renderDefault(){
        return [
          'title' => 'Значение по умолчанию'
        ];
    }
}