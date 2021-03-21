<?php

namespace App\Controller;

use App\Util\PrintList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Util\PrintListController;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/", name="principal")
     * 
     */
    public function index(): Response
    {       
        $list = new PrintList();
        return $this->json([
            $list->mountList()
        ]);
    }
    
    

}
