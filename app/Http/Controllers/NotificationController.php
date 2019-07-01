<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\MensagemInterface;

class NotificationController extends Controller
{
    private $mensagem;

    public function __construct(MensagemInterface $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function enviar($mensagem = null)
    {
        return $this->mensagem->enviar($mensagem);
    }
}
