<p>Modificación de escudería</p>
<form action='escuderia_controller.php' method='post'>
    <input type='hidden' name='action' value='update'>
    <table>
        <input type='hidden' name='id' value='<?php echo $escuderia->id; ?>'>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type='text' name='nombre'  value='<?php echo $escuderia->nombre; ?>'></td>
            <td><label>Constructor: </label></td>
            <td><input type='text' name='constructor'  value='<?php echo $escuderia->constructor; ?>'></td>
            <td><label>Chasis: </label></td>
            <td><input type='text' name='chasis'  value='<?php echo $escuderia->chasis; ?>'></td>
            <td><label>Imagen: </label></td>
            <td><input type='file' name='imagen'></td>
        </tr>
        <tr>
            <td><label>País:</label></td><td><?php
                $seleccionado = $escuderia->pais;
                include '..\Views\Pais\select.php'
                ?></td>
        </tr>
        <tr>
            <td><label>Pilotos:</label></td><td><?php
                $seleccionado = $escuderia->piloto;
                include '..\Views\Piloto\select.php'
                ?></td>
        </tr>
    </table>

    <input type='submit' value='Actualizar'>
</form>