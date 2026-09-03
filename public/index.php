<?php
require_once __DIR__ . '/../app/controller/productoController.php';
require_once __DIR__ . '/../app/controller/clienteController.php';

$productoController = new ProductoController();
$productoController->index();

$clienteController = new ClienteController();
$clienteController->index();

?>