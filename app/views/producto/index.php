<h1 style="color: cyan;">VISTA DE LISTADO DE PRODUCTOS</h1>

<table border="2">

    <tr>
        <th style="color:red;">ID</th>
        <th style="color:red;">Nombre</th>
        <th style="color:red;">Precio</th>
        <th style="color:red;">Categoría</th>
        <th style="color:red;">Proveedor</th>
        <th style="color:red;">ID Proveedor</th>
        <th style="color:red;">ID Categoría</th>
        <th style="color:red;">Descripción Categoría</th>
    </tr>

    <?php foreach ($productos as $producto): ?>

        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['valor'] ?></td>
            <td><?= $producto['categoria'] ?></td>
            <td><?= $producto['proveedor'] ?></td>
            <td><?= $producto['id_proveedor'] ?></td>
            <td><?= $producto['id_categoria'] ?></td>
            <td><?= $producto['descripcion_categoria'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Consulta</h1>

<table border="2">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Valor</th>
        <th>ID Categoría</th>
        <th>Categoría</th>
        <th>Descripción Categoría</th>
    </tr>

    <tr>
        <td><?= $productoConsultado['id'] ?></td>
        <td><?= $productoConsultado['nombre'] ?></td>
        <td><?= $productoConsultado['valor'] ?></td>
        <td><?= $productoConsultado['id_categoria'] ?></td>
        <td><?= $productoConsultado['categoria'] ?></td>
        <td><?= $productoConsultado['descripcion_categoria'] ?></td>
    </tr>

</table>
