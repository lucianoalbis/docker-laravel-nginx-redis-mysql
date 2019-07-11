<?php

namespace App\Http\Interfaces;

interface RiskApiRepositoryInterface
{
    /**
     * @param $params
     * @return mixed
     */
    public function read($params);

    /**
     * @param $params
     * @return mixed
     */
    public function create($params);

    /**
     * @param $params
     * @return mixed
     */
    public function update($params);

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params);
}
