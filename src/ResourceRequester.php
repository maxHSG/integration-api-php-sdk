<?php

namespace TamoJuno;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use TamoJuno\Http\Client;

/**
 * Class ResourceRequester
 *
 * @package TamoJuno
 */
class ResourceRequester
{

    /**
     * @var Client
     */
    public $client;

    /**
     * @var ResponseInterface
     */
    public $lastResponse;

    /**
     * @var array
     */
    public $lastOptions;

    /**
     * ResourceRequester constructor.
     */
    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * @param $method
     * @param $endpoint
     * @param array $options
     *
     * @return object
     * @throws GuzzleException
     */
    public function request($method, $endpoint, array $options = [])
    {
        $this->lastOptions = $options;
        try {
            $response = $this->client->request($method, $endpoint, $options);
        } catch (ClientException $e) {
            $response = $e->getResponse();
        }

        return $this->response($response);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public function response(ResponseInterface $response)
    {
        $this->lastResponse = $response;

        $content = $response->getBody()->getContents();

        $data = json_decode($content);
        
        return $data;
    }
}
