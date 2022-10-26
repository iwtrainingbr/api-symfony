<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TesteController extends AbstractController
{
    public function listar(): Response
    {
        $usuario = "Maria";
        $produtos = [
            'Sabao',
            'Arroz',
            'Cheiro verde',
        ];

        // return new Response("<h1>Ola mundo</h1>");
        return $this->render('teste/listar.html.twig', [
            'usuario' => $usuario,
            'produtos' => $produtos,
        ]);
    }

    public function cadastrar(): Response
    {
        // return new Response("Cadastrando");
        return $this->render('teste/cadastrar.html.twig');
    }
}