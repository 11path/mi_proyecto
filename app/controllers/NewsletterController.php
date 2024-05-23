<?php

require_once __DIR__ . '/../models/Newsletter.php';
require_once __DIR__ . '/../../config/database.php';


class NewsletterController
{
    private $model;

    public function __construct()
    {
        $db = include __DIR__ . '/../../config/database.php';
        $this->model = new Newsletter($db);
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
        if (!empty($_POST['email'])) {
            $email = trim($_POST['email']);

            if ($this->model->subscribe($email)) {
                $message = "Te has suscrito correctamente";
            } else {
                $message = "Ocurrió un error";
            }
        } else {
            $message = "Por favor, proporciona un correo electrónico";
        }

        include __DIR__ . '/../views/newsletter/form.php';
    }

    private function showForm()

    {
        include __DIR__ . '/../views/newsletter/form.php';
    }
}

?>
