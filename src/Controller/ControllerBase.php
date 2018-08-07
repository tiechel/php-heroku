<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

abstract class ControllerBase
{
    protected function noContent(): Response
    {
        return new Response('No content', 204);
    }

    protected function jsonResponse(array $jsonData = []): Response
    {
        $response = new Response();
        $response->setContent(json_encode($jsonData));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
