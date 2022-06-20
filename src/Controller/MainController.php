<?php

namespace App\Controller;

use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(FlasherInterface $flasher): Response
    {

        $flasher->addSuccess('Book saved successfully');

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
