<BR>
<h1>VISTA DE LISTADO DE CLIENTES</h1>
</BR>

<table>
    <tr>
        <th>Nombre</th>
        <th>documento</th>
        <th>Correo</th>
        <th>telefono</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>

    <tr>
        <td><?= $cliente['nombre'] ?></td>
        <td><?= $cliente['documento'] ?></td>
        <td><?= $cliente['correo'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>