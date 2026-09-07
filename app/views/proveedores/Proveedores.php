<body>
    <table border="2">
           <h1 style="color: cyan;">VISTA DE LISTADO DE PROVEEDORES</h1>

        <tr>
            <th style="color:red;">id</th>
            <th style="color:red;">Nombre</th>
            <th style="color:red;">Cuidad</th>
            <th style="color:red;">Dirección</th>
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