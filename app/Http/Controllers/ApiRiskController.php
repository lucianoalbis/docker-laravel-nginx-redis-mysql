<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiRiskService;

class ApiRiskController extends Controller
{
    private $apiService;

    public function __construct(ApiRiskService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function querie()
    {
        return $this->apiService->querie();
    }

    public function mutation()
    {
        return $this->apiService->mutation();
    }
}
