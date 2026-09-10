<h1>Categorías</h1>

<table border="2">

    <tr>
        <th>ID Categoría</th>
        <th>Nombre</th>
        <th>Descripción</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>

        <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Consulta de Categoría</h1>

<table border="2">

    <tr>
        <th>ID Categoría</th>
        <th>Nombre</th>
        <th>Descripción</th>
    </tr>

    <tr>
        <td><?= $categoriaSeleccionada['id_categoria'] ?></td>
        <td><?= $categoriaSeleccionada['nombre'] ?></td>
        <td><?= $categoriaSeleccionada['descripcion'] ?></td>
    </tr>

</table>