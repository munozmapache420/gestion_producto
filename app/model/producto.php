
<?php

class Producto
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
                p.id,
                p.nombre,
                p.valor,
                p.id_categoria,
                c.nombre AS categoria,
                c.descripcion AS descripcion_categoria,
                p.id_proveedor,
                pr.nombre AS proveedor
            FROM productos p
            INNER JOIN categoria c ON p.id_categoria = c.id_categoria
            INNER JOIN proveedores pr ON p.id_proveedor = pr.id";

    $consulta = $this->connection->query($sql);

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

public function getById($id)
{
    $sql = "SELECT * FROM productos WHERE id = :id";
    
    $productoConsultado = $this->connection->prepare($sql);
    $productoConsultado->bindParam(":id", $id, PDO::PARAM_INT);
    $productoConsultado->execute();

    return $productoConsultado->fetch(PDO::FETCH_ASSOC);

}
}