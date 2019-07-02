<?php

namespace App\Http\Services;

use App\Http\Interfaces\MensagemInterface;

class NotificationService
{
    private $mensagem;

    public function __construct(MensagemInterface $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function enviar($data)
    {
        return $this->mensagem->enviar($data);
    }
}
