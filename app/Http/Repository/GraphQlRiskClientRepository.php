<?php

namespace App\Http\Repository;

use App\Http\Repository\RiskApiRepositoryInterface;

class GraphQlRiskClientRepository implements RiskApiRepositoryInterface
{
    public function querie ()
    {
        return 'GraphQlRiskClientRepository::querie';
    }

    public function mutation ()
    {
        return 'GraphQlRiskClientRepository::mutation';
    }
}
