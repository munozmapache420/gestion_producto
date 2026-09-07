<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proveedores</title>
</head>

<body>

    <h1>Lista de Proveedores</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cuidad</th>
            <th>Dirección</th>
        </tr>

        <?php foreach ($proveedores as $proveedor): ?>

            <tr>
                <td>
                    <?= $proveedor['id'] ?>
                </td>

                <td>
                    <?= $proveedor['nombre'] ?>
                </td>

                <td>
                    <?= $proveedor['cuidad'] ?>
                </td>

                <td>
                    <?= $proveedor['direccion'] ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>