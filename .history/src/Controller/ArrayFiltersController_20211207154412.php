<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArrayFiltersController extends AbstractController
{
    /**
     * @Route("/array/filters", name="array_filters")
     */
    public function index(): Response
    {
        return $this->render('array_filters/index.html.twig', [
            'controller_name' => 'ArrayFiltersController',
        ]);
    }
}