<?php  

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PruebaController extends AbstractController
{
    /**
     * @Route("/prueba", name="pruebas")
     */
    public function prueba(): Response
    {
        $number = random_int(0, 100);

        return $this->render('prueba/prueba.html.twig', [
            'variable' => 'si',
        ]);
    }


    /**
     * @Route("/vista1", name="vista1")
     */
    public function vista1(): Response
    {
        $number = random_int(0, 100);

        return $this->render('prueba/vista1.html.twig', [
            'titulo' => 'Vista 1',
            'contenido' => 'contenido contenido contenido',
        ]);
    }

    /**
     * @Route("/vista2", name="vista2")
     */
    public function vista2(): Response
    {
        $number = random_int(0, 100);

        return $this->render('prueba/vista2.html.twig', [
            'titulo' => 'Vista 2',
            'contenido' => 'contenido contenido contenidocontenido contenido contenidocontenido contenido contenidocontenido contenido contenidocontenido contenido contenido',
        ]);
    }
}




?>