<?php

namespace App\Http\Repository;

use App\Http\Interfaces\RiskApiRepositoryInterface;
use GuzzleHttp\Client;

class GraphQlRiskClientRepository implements RiskApiRepositoryInterface
{
    public function read ($params)
    {
        $query = 'query {
                        sherlockRecommendation (
                            sessionId: "XWnLbYQI9p0huhmkJnp5WfhLJa"
                            eventId: 159753
                            orderId: "B123SM45"
                            email: "thomaz.mueller@sympla.com.br"
                        ) {
                            email
                            approve
                        }
                    }
                ';

        $client = new Client(['base_uri' => 'http://172.25.0.4', 'timeout' => 30]);
        $response = $client->post('/graphql', [
            'query' => $query,
            'variables' => ''
        ]);

        return $response;
    }

    public function create ($data)
    {
        return 'GraphQlRiskClientRepository::create';
    }

    public function update ($params)
    {
        return 'GraphQlRiskClientRepository::update';
    }

    public function delete ($params)
    {
        return 'GraphQlRiskClientRepository::delete';
    }
}
