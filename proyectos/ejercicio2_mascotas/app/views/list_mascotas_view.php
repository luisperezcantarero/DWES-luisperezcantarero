<?php
echo "<table>
<tr>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Color</th>
    <th>Raza</th>
</tr>";
foreach ($data['mascotas'] as $mascota) {
    echo "<tr>
    <td>" . $mascota['nombre'] . "</td>
    <td>" . $mascota['edad'] . "</td>
    <td>" . $mascota['color'] . "</td>
    <td>" . $mascota['raza'] . "</td>
    </tr>";
}
echo "</table>";
?>