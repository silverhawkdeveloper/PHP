<p>Modificación de país</p>
<form action='pais_controller.php' method='post'>
    <input type='hidden' name='action' value='update'>
    <table>
        <input type='hidden' name='id' value='<?php echo $pais->id; ?>'>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type='text' name='nombre' value='<?php echo $pais->nombre; ?>'></td>
            <td><label>Imagen: </label></td>
            <td><input type='file' name='imagen'/></td>
        </tr>
    </table>
    <input type='submit' value='Actualizar'>
</form>