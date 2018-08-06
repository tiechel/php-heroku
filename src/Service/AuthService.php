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

    public function responseToken(string $crcToken)
    {
        // - A base64 encoded HMAC SHA-256 hash created from the crc_token and your app Consumer Secret
        // - Valid response_token and JSON format.
        // - Latency less than 3 seconds.
        // - 200 HTTP response code.
        // {
        // 'response_token': 'sha256=' + base64.b64encode(sha256_hash_digest)
        // }

        // $this->consumerKeyを使って$crcTokenをHMAC SHA-256でハッシュ化
        // ハッシュ値をbase64に変換
        // response_tokenとしてJSONを返す(Controllerの仕事)
    }
}
