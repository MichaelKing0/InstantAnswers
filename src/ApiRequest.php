<?php

namespace MichaelKing0\InstantAnswers;

use GuzzleHttp\Client;

class ApiRequest
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function makeRequest($url, $params)
    {
        $options['query'] = $params;

        return json_decode($this->client->request('GET', $url, $options)->getBody());
    }
}