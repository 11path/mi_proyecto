<?php


require_once __DIR__ . '/../models/Contact.php';


class ContactController
{
    private $model;

    public function __construct()
    {
        $this->model = new Contact();
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->saveContact();
        } else {
            $this->showForm();
        }
    }

    private function saveContact()
    {
        if (
            !empty($_POST['name']) &&
            !empty($_POST['email']) &&
            !empty($_POST['direction']) &&
            !empty($_POST['phone']) &&
            !empty($_POST['message'])
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $message = trim($_POST['message']);

            if ($this->model->save($name, $email, $direction, $phone, $message)) {
                $message = "Tu registro se ha completado";
            } else {
                $message = "Ocurrió un error";
            }
        } else {
            $message = "Llena todos los campos";
        }

        include __DIR__ . '/../views/contact/form.php';
    }

    private function showForm()
    {
        include __DIR__ . '/../views/contact/form.php';
    }
}

?>
