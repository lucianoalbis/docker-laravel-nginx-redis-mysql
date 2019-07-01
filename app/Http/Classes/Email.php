<?php
namespace app\Http\Classes;

use App\Http\Interfaces\MensagemInterface;

class Email implements MensagemInterface
{
    public function enviar ($mensagem)
    {
        return 'Enviando Email';
    }
}
