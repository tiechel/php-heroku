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

    // - A base64 encoded HMAC SHA-256 hash created from the crc_token and your app Consumer Secret
    // - Valid response_token and JSON format.
    // - Latency less than 3 seconds.
    // - 200 HTTP response code.
    // {
    // 'response_token': 'sha256=' + base64.b64encode(sha256_hash_digest)
    // }
    public function responseToken(string $crcToken): string
    {
        $responseToken = base64_encode(
            hash_hmac('sha256', $crcToken, $this->consumerKey)
        );

        return 'sha256='.$responseToken;
    }
}
