<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

abstract class ControllerBase
{
    protected function response($content = '', $httpStatusCode = 200): Response
    {
        return new Response($content, $httpStatusCode);
    }

    protected function noContent(): Response
    {
        return $this->response('No content', 204);
    }

    protected function jsonResponse(array $jsonData = []): Response
    {
        $response = new Response();
        $response->setContent(json_encode($jsonData));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
