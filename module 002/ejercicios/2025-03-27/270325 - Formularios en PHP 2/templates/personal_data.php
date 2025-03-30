<table>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Edad</th>
        <th>Año de nacimiento</th>
    </tr>
    <tr>
        <td><?= $_POST["name"] ?></td>
        <td><?= $_POST["last_name"] ?></td>
        <td><?= $_POST["dir"] ?></td>
        <td><?= $_POST["tel"] ?></td>
        <td><?= $_POST["age"] ?></td>
        <td><?= $get_birth_year($_POST["age"]) ?></td>
    </tr>
</table>