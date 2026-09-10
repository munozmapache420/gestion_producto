<?php

require_once __DIR__ . '/../model/Proveedores.php';

class proveedoresController
{
    public function index()
    {
        $modelo = new ModelProveedores();

        $proveedores = $modelo->listar();

        require_once __DIR__ . '/../views/proveedores/Proveedores.php';
    }
}