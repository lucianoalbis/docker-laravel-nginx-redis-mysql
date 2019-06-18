<?php

namespace App\Http\Services;

use App\Http\Repository\RiskApiRepositoryInterface;

class ApiRiskService
{
    private $riskClientRepository;

    public function __construct(RiskApiRepositoryInterface $riskClientRepository)
    {
        $this->riskClientRepository = $riskClientRepository;
    }

    public function querie()
    {
        return $this->riskClientRepository->querie();
    }

    public function mutation()
    {
        return $this->riskClientRepository->mutation();
    }
}
