<?php

/**
 * Descripción: Controlador para la entidad piloto
 */
class PilotoController {

    public function __construct() {
        
    }

    public function index() {
        $pilotos = Piloto::all();
        $paises = Pais::all();
        $escuderias = Escuderia::all();
        require_once('Views/Piloto/index.php');
    }

    public function init() {
        //$pilotos=Piloto::all();
        //require_once('Views/Piloto/index.php');
    }

    public function register() {
        $paises = Pais::all();
        $escuderias = Escuderia::all();
        require_once('Views/Piloto/register.php');
    }

    //guardar
    public function save($piloto) {
        Piloto::save($piloto);
        header('Location: ../layout.php');
    }

    public function update($piloto) {
        Piloto::update($piloto);
        header('Location: ../layout.php');
    }

    public function delete($id) {
        //se está de dentro del directorio Controllers y se debe salir con ../
        require_once('../Models/piloto.php');
        Piloto::delete($id);
        header('Location: ../layout.php');
    }

    public function error() {
        require_once('Views/Piloto/error.php');
    }

}

//obtiene los datos del piloto desde la vista y redirecciona a PilotoController.php
if (isset($_POST['action'])) {
    $pilotoController = new PilotoController();
    //se añade el archivo piloto.php
    require_once('../Models/piloto.php');

    //se añade el archivo para la conexion
    require_once('../connection.php');

    if ($_POST['action'] == 'register') {
        $piloto = new Piloto(null, $_POST['nombre'], $_POST['dorsal'], $_POST['imagen'], $_POST['pais'], $_POST['escuderia']);
        $pilotoController->save($piloto);
    } elseif ($_POST['action'] == 'update') {
        $piloto = new Piloto($_POST['id'], $_POST['nombre'], $_POST['dorsal'], $_POST['imagen'], $_POST['pais'], $_POST['escuderia']);
        //$paises=Pais::all();
        $pilotoController->update($piloto);
    }
}

//se verifica que action esté definida
if (isset($_GET['action'])) {
    if ($_GET['action'] != 'register' & $_GET['action'] != 'index') {
        require_once('../connection.php');
        $pilotoController = new PilotoController();
        //para eliminar
        if ($_GET['action'] == 'delete') {
            $pilotoController->delete($_GET['id']);
        } elseif ($_GET['action'] == 'update') {
            //mostrar la vista update con los datos del registro actualizar
            require_once('../Models/piloto.php');
            $piloto = Piloto::getById($_GET['id']);
            //var_dump($piloto);
            //$pilotoController->update();
            $paises = Pais::all();
            $escuderias = Escuderia::all();
            require_once('../Views/Piloto/update.php');
        }
    }
}
?>