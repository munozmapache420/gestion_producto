<table border="2">
<h1 style="color: cyan;">VISTA DE LISTADO DE CLIENTES</h1>
    <tr>
        <th style="color:red;">id</th>
        <th style="color:red;">Nombre</th>
        <th style="color:red;">documento</th>
        <th style="color:red;">Correo</th>
        <th style="color:red;">telefono</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>

    <tr>
        <td><?= $cliente['id_cliente'] ?></td>
        <td><?= $cliente['nombre'] ?></td>
        <td><?= $cliente['documento'] ?></td>
        <td><?= $cliente['correo'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>