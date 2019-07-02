<?php

namespace App\Http\Controllers;

use App\Http\Services\NotificationService;

class NotificationController extends Controller
{
    private $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function enviar($mensagem = null)
    {
        return $this->notificationService->enviar($mensagem);
    }
}
