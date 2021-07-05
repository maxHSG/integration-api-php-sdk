<?php

namespace TamoJuno\Http;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use TamoJuno\Config;

/**
 * Class Client
 *
 * @package TamoJuno\Http
 */
class Client extends Guzzle
{

    /**
     * Client constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        try {
            $config = array_merge([
                'base_uri' => Config::getResourceUrl(),
                'headers' => [
                    'Content-Type' => 'application/json;charset=utf-8',
                    'X-Api-Version' => '2',
                    'X-Resource-Token' => Config::getPrivateToken(),
                    'Authorization' => 'Bearer ' . $this->generateAuthenticationCurl(),
                ],
            ], $config);

            if (
                null !== Config::getXIdempotencyKey()
                && ! array_key_exists('X-Idempotency-Key', $config['headers'])
            ) {
                $config['headers']['X-Idempotency-Key'] = Config::getXIdempotencyKey();
            }
        } catch (GuzzleException $e) {
            // print_r($e->getResponse()->getBody()->getContents());
        }
        parent::__construct($config);
    }

    /**
     * @return string|null
     */
    private function generateAuthenticationCurl(): ?string
    {

        $curl = curl_init();

        $credentials = base64_encode(Config::getClientId() . ":" . Config::getClientSecret());

        curl_setopt_array($curl, [
            CURLOPT_URL => Config::getAuthUrl() . '/oauth/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "grant_type=client_credentials",
            CURLOPT_HTTPHEADER => [
                'Authorization: Basic ' . $credentials,
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return $response['access_token'];
    }
}
