<p>Nuevo pais</p>

<form action='Controllers/pais_controller.php' method='post'>
    <input type='hidden' name='action' value='register'>
    <table>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type='text' name='nombre'></td>
            <td><label>Imagen: </label></td>
            <td><input type='file' name='imagen'></td>
        </tr>
    </table>
    <input type='submit' value='Guardar'>
</form>