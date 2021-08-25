<?php

namespace Tiny\CommerceApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends AbstractController{

    /**
     * @Route("/health")
     * @return JsonResponse
     */
    public function getHealth(): JsonResponse
    {
        return$this->json(['status' => true], 200);
    }
}
