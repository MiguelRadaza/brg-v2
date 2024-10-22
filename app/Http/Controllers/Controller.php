<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function validateApiKey()
    {
        $validApiKey = env('API_KEY');

        $headers = getallheaders();
        $apiKeyHeaderKey = 'X-Brg-Api-Key';

        // Check the header key in a case-insensitive manner
        $headerKeyExists = array_filter(array_keys($headers), function ($key) use ($apiKeyHeaderKey) {
            return strtolower($key) === strtolower($apiKeyHeaderKey);
        });

        if (empty($headerKeyExists)) {
            throw new \Exception("Unauthorize", 401);
        }

        // Retrieve the actual key used
        $actualHeaderKey = array_values($headerKeyExists)[0];
        $apiKey = $headers[$actualHeaderKey];

        if ($apiKey !== $validApiKey) {
            throw new \Exception("Unauthorize", 403);
        }

        return true;
    }

}
