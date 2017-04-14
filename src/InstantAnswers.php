<?php

namespace MichaelKing0\InstantAnswers;

class InstantAnswers extends ApiRequest
{
    const BASE = 'http://api.duckduckgo.com';

    public function search($phrase)
    {
        return $this->makeRequest(self::BASE, [
            'q' => $phrase,
            'format' => 'json',
            'pretty' => true,
        ]);
    }
}