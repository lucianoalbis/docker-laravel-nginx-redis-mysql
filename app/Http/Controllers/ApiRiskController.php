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

    public function read($params = null)
    {
        return $this->apiService->read($params);
    }

    public function create($params)
    {
        return $this->apiService->create($params);
    }

    public function update($params)
    {
        return $this->apiService->update($params);
    }
}
