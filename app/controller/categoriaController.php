<?php

require_once __DIR__ . '/../model/categoria.php';

class CategoriaController
{
    public function index()
    {
        $categoria = new Categoria();

        $categorias = $categoria->getAll();

        $categoriaSeleccionada = $categoria->getById(1);

        require_once __DIR__ . '/../views/categorias/index.php';
    }
}

?>