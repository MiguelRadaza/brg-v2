<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function validateApiKey()
    {
        $validApiKey = env('API_KEY');

        $headers = getallheaders();
        if (!isset($headers['X-Brg-Api-Key'])) {
            throw new \Exception("Unauthorize", 401);
        }

        $apiKey = $headers['X-Brg-Api-Key'];

        if ($apiKey !== $validApiKey) {
            throw new \Exception("Unauthorize", 403);
        }

        return true;
    }
}