<?php

require_once __DIR__ . '/../../config/database.php';

class ModelProveedores
{
    private $conexion;

    public function __construct()
    {
        $database = new database();
        $this->conexion = $database->connect();
    }

public function listar()
{
    $sql = "SELECT * FROM proveedores";
    $stmt = $this->conexion->query($sql);
    $stmt->execute(); 
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
?>