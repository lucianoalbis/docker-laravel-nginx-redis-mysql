<?php
namespace app\Http\Classes;

use App\Http\Interfaces\MensagemInterface;

class Sms implements MensagemInterface
{
    /**
     * @param $mensagem
     * @return string
     */
    public function enviar ($mensagem)
    {
        return 'Enviando SMS';
    }
}
