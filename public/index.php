<?php

require_once '../app/controllers/ContactController.php';
require_once '../app/controllers/NewsletterController.php';
require_once '../app/controllers/SubscriptionController.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'contact':
        $controller = new ContactController();
        break;
    case 'newsletter':
        $controller = new NewsletterController();
        break;
    case 'subscribe':
        $controller = new SubscriptionController();
        break;
    default:
        $controller = null;
        break;
}

if ($controller) {
    $controller->handleRequest();
} else {
    include '../app/views/home.php';
}

?>
