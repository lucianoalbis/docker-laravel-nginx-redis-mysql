<?php

namespace App\Http\Interfaces;

interface MensagemInterface
{
    /**
     * @param $mensagem
     * @return mixed
     */
    public function enviar($mensagem);
}
