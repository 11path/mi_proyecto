<?php

class Subscription
{
    private $conex;

    public function __construct($db)
    {
        $this->conex = $db;
    }

    public function subscribe($name, $email, $plan)
    {
        $stmt = $this->conex->prepare("INSERT INTO subscriptions (name, email, plan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $plan);
        return $stmt->execute();
    }
}

?>
