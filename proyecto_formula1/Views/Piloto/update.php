<p>Modificación de piloto</p>
<form action='piloto_controller.php' method='post'>
    <input type='hidden' name='action' value='update'>
    <table>
        <input type='hidden' name='id' value='<?php echo $piloto->id; ?>'>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type='text' name='nombre'  value='<?php echo $piloto->nombre; ?>'></td>
            <td><label>Dorsal: </label></td>
            <td><input type='text' name='dorsal'  value='<?php echo $piloto->dorsal; ?>'></td>
            <td><label>Imagen: </label></td>
            <td><input type='file' name='imagen'></td>
        </tr>
        <tr>
            <td><label>Pais:</label></td><td><?php
                $seleccionado = $piloto->pais;
                include '..\Views\Pais\select.php'
                ?></td>
        </tr>
        <tr>
            <td><label>Escudería:</label></td><td><?php
                $seleccionado = $piloto->escuderia;
                include '../Views\Escuderia\select.php'
                ?></td>
        </tr>
    </table>
    <input type='submit' value='Actualizar'>
</form>