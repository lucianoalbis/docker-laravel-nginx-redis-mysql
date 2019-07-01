<?php

namespace App\Http\Services;

use App\Http\Interfaces\RiskApiRepositoryInterface;

class ApiRiskService
{
    private $riskClientRepository;

    public function __construct(RiskApiRepositoryInterface $riskClientRepository)
    {
        $this->riskClientRepository = $riskClientRepository;
    }

    public function read($params)
    {
        return $this->riskClientRepository->read($params);
    }

    public function create($params)
    {
        return $this->riskClientRepository->create($params);
    }

    public function update($params)
    {
        return $this->riskClientRepository->update($params);
    }
}
