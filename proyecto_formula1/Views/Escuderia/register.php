<p>Nueva escudería</p>
<form action='Controllers/escuderia_controller.php' method='post'>
    <input type='hidden' name='action' value='register'>
    <table>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type='text' name='nombre'></td>
            <td><label>Constructor: </label></td>
            <td><input type='text' name='constructor'></td>
            <td><label>Chasis: </label></td>
            <td><input type='text' name='chasis'></td>
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
            <td><label>Piloto:</label></td><td><?php
                $seleccionado = "";
                include 'Views\Piloto\select.php'
                ?></td>
        </tr>
    </table>

    <input type='submit' value='Guardar'>
</form>