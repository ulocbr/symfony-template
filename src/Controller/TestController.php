<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 13/10/2018
 * Time: 15:20
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Uloc\ApiBundle\Controller\BaseController;

class TestController extends BaseController
{

    public function testPublic(){
        return new JsonResponse('Ok. Public route.');
    }

    public function testProtected(){
        return new JsonResponse('Ok. Protected route.');
    }

}