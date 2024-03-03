<?php
// Recuperamos la información de la sesión
session_start();

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    header("Location: Log/login.php");
}

require_once('connection.php');
//la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
//si la variable controller y action son pasadas por la url desde layout.php entran en el if
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'piloto';
    $action = 'init';
}
?>
<html>
    <head>
        <title>Formula 1</title>
    </head>
    <body>
        <form action='Log/logoff.php' method='post'>
            <input type='submit' name='desconectar' value='Desconectar'>
        </form>
        <p>Usuario: <?php echo $_SESSION['usuario'] ?></p>
        <table border='1'>
            <tr>			
                <td colspan="2">Gestión pilotos</td>
            </tr>
            <tr>			
                <td><a href="?controller=piloto&action=register">Añadir piloto</a></td>
                <td><a href="?controller=piloto&action=index">Ver pilotos</a></td>
            </tr>
        </table>
        <table border='1'>
            <tr>			
                <td colspan="2">Gestión escuderías</td>
            </tr>
            <tr>			
                <td><a href="?controller=escuderia&action=register">Añadir escudería</a></td>
                <td><a href="?controller=escuderia&action=index">Ver escuderías</a></td>
            </tr>
        </table>
        <table border='1'>
            <tr>			
                <td colspan="2">Gestión paises</td>
            </tr>
            <tr>			
                <td><a href="?controller=pais&action=register">Añadir pais</a></td>
                <td><a href="?controller=pais&action=index">Ver paises</a></td>
            </tr>
        </table>
        <?php require_once('routes.php'); ?>
    </body>
</html>