<?php

namespace App\Controller;

use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ProductoRepository $productoRepository)
    {
        return $this->render('index.html.twig', [
            'productos' => $productoRepository->findAll()
        ]);
    }
}
