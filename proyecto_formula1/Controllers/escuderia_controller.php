<?php

/**
 * Descripción: Controlador para la entidad escuderia
 */
class EscuderiaController {

    public function __construct() {
        
    }

    public function index() {
        $escuderias = Escuderia::all();
        $paises = Pais::all();
        $pilotos = Piloto::all();
        require_once('Views/Escuderia/index.php');
    }

    public function init() {
        //$escuderias=Escuderia::all();
        //require_once('Views/Escuderia/index.php');
    }

    public function register() {
        $paises = Pais::all();
        $pilotos = Piloto::all();
        require_once('Views/Escuderia/register.php');
    }

    //guardar
    public function save($escuderia) {
        Escuderia::save($escuderia);
        header('Location: ../layout.php');
    }

    public function update($escuderia) {
        Escuderia::update($escuderia);
        header('Location: ../layout.php');
    }

    public function delete($id) {
        //se está de dentro del directorio Controllers y se debe salir con ../
        require_once('../Models/escuderia.php');
        Escuderia::delete($id);
        header('Location: ../layout.php');
    }

    public function error() {
        require_once('Views/Escuderia/error.php');
    }

}

//obtiene los datos del escuderia desde la vista y redirecciona a EscuderiaController.php
if (isset($_POST['action'])) {
    $escuderiaController = new EscuderiaController();
    //se añade el archivo escuderia.php
    require_once('../Models/escuderia.php');

    //se añade el archivo para la conexion
    require_once('../connection.php');

    if ($_POST['action'] == 'register') {
        $pilotosArray = $_POST['piloto'];
        $pilotosString = implode(',', $pilotosArray);
        
        $escuderia = new Escuderia(null, $_POST['nombre'], $_POST['constructor'], $_POST['chasis'], $_POST['imagen'], $_POST['pais'], $pilotosString);
        $escuderiaController->save($escuderia);
    } elseif ($_POST['action'] == 'update') {
        $pilotosArray = $_POST['piloto'];
        $pilotosString = implode(',', $pilotosArray);
        
        $escuderia = new Escuderia($_POST['id'], $_POST['nombre'], $_POST['constructor'], $_POST['chasis'], $_POST['imagen'], $_POST['pais'], $pilotosString);
        //$paises=Pais::all();
        $escuderiaController->update($escuderia);
    }
}

//se verifica que action esté definida
if (isset($_GET['action'])) {
    if ($_GET['action'] != 'register' & $_GET['action'] != 'index') {
        require_once('../connection.php');
        $escuderiaController = new EscuderiaController();
        //para eliminar
        if ($_GET['action'] == 'delete') {
            $escuderiaController->delete($_GET['id']);
        } elseif ($_GET['action'] == 'update') {
            //mostrar la vista update con los datos del registro actualizar
            require_once('../Models/escuderia.php');
            $escuderia = Escuderia::getById($_GET['id']);
            //var_dump($escuderia);
            //$escuderiaController->update();
            $paises = Pais::all();
            $pilotos = Piloto::all();
            require_once('../Views/Escuderia/update.php');
        }
    }
}
?>