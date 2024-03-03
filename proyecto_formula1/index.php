<?php
// Recuperamos la información de la sesión
session_start();

require_once('connection.php');
// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
//si la variable controller y action son pasadas por la url desde layout.php entran en el if
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'piloto';
    $action = 'init';
}
//carga la vista layout.php
//require_once('Views/layout.php');
?>
<html>
    <head>
        <title>Formula 1</title>
    </head>
    <body>
        <form action='layout.php' method='post'>
            <input type='submit' name='frontEnd' value='Front-End'>
        </form>
        <form action='Log/logoff.php' method='post'>
            <input type='submit' name='desconectar' value='Desconectar'>
        </form>
    </body>
</html>
