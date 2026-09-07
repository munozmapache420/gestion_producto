<?php
require_once __DIR__ . '/../app/controller/productoController.php';
require_once __DIR__ . '/../app/controller/clienteController.php';
require_once __DIR__ . '/../app/controller/proveedoresController.php';


$productoController = new ProductoController();
$productoController->index();

$clienteController = new ClienteController();
$clienteController->index();

$controller = new ProveedoresController();
$controller->index();

?>