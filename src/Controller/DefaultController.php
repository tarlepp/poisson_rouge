<?php

namespace App\Controller;

use App\Service\BarService;
use App\Service\FooService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @var \App\Service\FooService
     */
    private $fooService;

    public function __construct(FooService $fooService)
    {
        $this->fooService = $fooService;
    }

    /**
     * @Route("/", name="default")
     *
     * @param BarService $barService
     *
     * @return Response
     */
    public function index(BarService $barService): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'foo' => $this->fooService->foo(),
            'bar' => $barService->bar(),
        ]);
    }
}
