<?php

class Contact
{
    private $db;

    public function __construct()
    {
        $this->db= include __DIR__ . '/../../config/database.php' ;
    }

    public function save($name, $email, $direction, $phone, $message)
    {
        $query = "INSERT INTO datos (nombre, email, direccion, telefono, mensaje) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($this->db, $query);
        mysqli_stmt_bind_param($stmt, 'sssss', $name, $email, $direction, $phone, $message);

        return mysqli_stmt_execute($stmt);
    }
}

?>
