<p>Nuevo piloto</p>
<form action='Controllers/piloto_controller.php' method='post'>
    <input type='hidden' name='action' value='register'>
    <table>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type='text' name='nombre'></td>
            <td><label>Dorsal: </label></td>
            <td><input type='text' name='dorsal'></td>
            <td><label>Imagen: </label></td>
            <td><input type='file' name='imagen'></td>
        </tr>
        <tr>
            <td><label>Pais:</label></td><td><?php
                $seleccionado = "";
                include 'Views\Pais\select.php'
                ?></td>
        </tr>
        <tr>
            <td><label>Escudería:</label></td><td><?php
                $seleccionado = "";
                include 'Views\Escuderia\select.php'
                ?></td>
        </tr>
    </table>
    <input type='submit' value='Guardar'>
</form>