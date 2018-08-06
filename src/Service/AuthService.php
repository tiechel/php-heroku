<?php

namespace App\Service;

final class AuthService extends ServiceBase
{
    private $consumerKey;
    private $consumerKeySercret;
    private $accessToken;
    private $accessTokenSecret;

    public function __construct($consumerKey, $consumerKeySercret, $accessToken, $accessTokenSecret)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerKeySercret = $consumerKeySercret;
        $this->accessToken = $accessToken;
        $this->accessTokenSecret = $accessTokenSecret;
    }

    public function toString()
    {
        return print_r([
            $this->consumerKey,
            $this->consumerKeySercret,
            $this->accessToken,
            $this->accessTokenSecret
        ],true);
    }
}
