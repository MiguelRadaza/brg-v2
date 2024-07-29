<?php

namespace App\Http\Service;

class BaseService {

    public function authUserId()
    {
        return auth()->user()->id;
    }
}