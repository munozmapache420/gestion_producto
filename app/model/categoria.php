<?php

class Categoria
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO(
            "mysql:host=localhost;dbname=gestion_producto",
            "root",
            ""
        );

        $this->connection->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }

    public function getAll()
    {
        $sql = "SELECT
                    id_categoria,
                    nombre,
                    descripcion
                FROM categoria";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id_categoria)
    {
        $sql = "SELECT
                    id_categoria,
                    nombre,
                    descripcion
                FROM categoria
                WHERE id_categoria = $id_categoria";

        $consulta = $this->connection->query($sql);

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
?>
