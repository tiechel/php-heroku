<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\AuthService;

final class WebhookController extends ControllerBase
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function get(Request $request)
    {
        $crcToken = $request->get('crc_token');
        if ($crcToken === null) {
            return $this->noContent();
        }

        return $this->jsonResponse([
            'response_token' => $this->authService->responseToken($crcToken),
        ]);
    }
}
