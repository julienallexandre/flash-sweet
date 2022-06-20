<?php

namespace App\Controller;

use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SweetController extends AbstractController
{
    #[Route('/sweet', name: 'app_sweet')]
    public function index(SweetAlertFactory $flasher): Response
    {

        $flasher->addSuccess('Data has been saved successfully!');

        return $this->render('sweet/index.html.twig', [
            'controller_name' => 'SweetController',
        ]);
    }
}
