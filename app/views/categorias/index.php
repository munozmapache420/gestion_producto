<h1 style="color: cyan;">CATEGORIAS</h1>

<table border="2">

    <tr>
        <th style="color:red;">ID Categoría</th>
        <th style="color:red;">Nombre</th>
        <th style="color:red;">Descripción</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>

        <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1 style="color: cyan;">CONSULTA DE CATEGORIA</h1>

<table border="2">

    <tr>
        <th style="color:red;">ID Categoría</th>
        <th style="color:red;">Nombre</th>
        <th style="color:red;">Descripción</th>
    </tr>

    <tr>
        <td><?= $categoriaSeleccionada['id_categoria'] ?></td>
        <td><?= $categoriaSeleccionada['nombre'] ?></td>
        <td><?= $categoriaSeleccionada['descripcion'] ?></td>
    </tr>

</table>