<?php

require_once __DIR__ . '/../models/Subscription.php';
require_once __DIR__ . '/../../config/database.php';

class SubscriptionController
{
    private $model;

    public function __construct()
    {
        $db = include __DIR__ . '/../../config/database.php';
        $this->model = new Subscription($db);
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->subscribe();
        } else {
            $this->showForm();
        }
    }

    private function subscribe()
    {
        if (
            !empty($_POST['name']) &&
            !empty($_POST['email']) &&
            !empty($_POST['plan'])
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $plan = trim($_POST['plan']);

            if ($this->model->subscribe($name, $email, $plan)) {
                $message = "Te has suscrito correctamente";
            } else {
                $message = "Ocurrió un error";
            }
        } else {
            $message = "Por favor, completa todos los campos";
        }

        include __DIR__ . '/../views/subscription/form.php';
    }

    private function showForm()
    {
        include __DIR__ . '/../views/subscription/form.php';
    }
}

?>
