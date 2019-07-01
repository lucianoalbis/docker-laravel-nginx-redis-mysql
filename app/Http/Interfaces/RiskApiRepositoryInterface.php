<?php

namespace App\Http\Interfaces;

interface RiskApiRepositoryInterface
{
    public function read($params);
    public function create($params);
    public function update($params);
    public function delete($params);
}
