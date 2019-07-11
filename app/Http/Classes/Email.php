<?php
namespace app\Http\Classes;

use App\Http\Interfaces\MensagemInterface;

class Email implements MensagemInterface
{
    /**
     * @param $mensagem
     * @return string
     */
    public function enviar ($mensagem)
    {
        return 'Enviando Email';
    }
}
