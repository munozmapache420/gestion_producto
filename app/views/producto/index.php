<table border="2">
    <h1 style="color: cyan;">VISTA DE LISTADO DE PRODUCTOS</h1>
    <tr>
        <th style="color:red;">id</th>
        <th style="color:red;">Nombre</th>
        <th style="color:red;">Precio</th>
        <th style="color:red;">Categoría</th>
        <th style="color:red;">id_proovedor</th>
    </tr>

    <?php foreach ($productos as $producto): ?>

    <tr>
        <td><?= $producto['id'] ?></td>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['categoria'] ?></td>
        <td><?= $producto['id_proovedores'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>