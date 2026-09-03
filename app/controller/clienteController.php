<?php
require_once __DIR__ . '/../model/cliente.php';

class clienteController {
 public function index() {

    $cliente = new cliente();
    $clientes = $cliente->getAll();

    require_once __DIR__ . '/../views/clientes/index.php';
}
};