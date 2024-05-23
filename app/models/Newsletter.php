<?php

class Newsletter
{
    private $conex;

    public function __construct($db)
    {
        $this->conex = $db;
    }

    public function subscribe($email)
    {
        $stmt = $this->conex->prepare("INSERT INTO newsletter (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        return $stmt->execute();
    }
}

?>
