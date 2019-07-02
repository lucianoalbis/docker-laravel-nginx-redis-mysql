<?php
namespace app\Http\Classes;

use App\Http\Interfaces\MensagemInterface;

class Sms implements MensagemInterface
{
    public function enviar ($mensagem)
    {
        return 'Enviando SMS';
    }
}
