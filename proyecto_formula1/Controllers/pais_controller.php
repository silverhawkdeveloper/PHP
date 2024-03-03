<?php

/**
 * Descripción: Controlador para la entidad pais
 */
class PaisController {

    public function __construct() {
        
    }

    public function index() {
        $paises = Pais::all();
        require_once('Views/Pais/index.php');
    }

    public function init() {
        
    }

    public function register() {
        require_once('Views/Pais/register.php');
    }

    //guardar
    public function save($pais) {
        Pais::save($pais);
        header('Location: ../layout.php');
    }

    public function update($pais) {
        Pais::update($pais);
        header('Location: ../layout.php');
    }

    public function delete($id) {
        //se está de dentro del directorio Controllers y se debe salir con ../
        require_once('../Models/pais.php');
        Pais::delete($id);
        header('Location: ../layout.php');
    }

    public function error() {
        require_once('Views/Pais/error.php');
    }

}

//obtiene los datos del pais desde la vista y redirecciona a PaisController.php
if (isset($_POST['action'])) {
    $paisController = new PaisController();
    //se añade el archivo pais.php
    require_once('../Models/pais.php');

    //se añade el archivo para la conexion
    require_once('../connection.php');

    if ($_POST['action'] == 'register') {
        $pais = new Pais(null, $_POST['nombre'], $_POST['imagen']);
        $paisController->save($pais);
    } elseif ($_POST['action'] == 'update') {
        $pais = new Pais($_POST['id'], $_POST['nombre'], $_POST['imagen']);
        $paisController->update($pais);
    }
}

//se verifica que action esté definida
if (isset($_GET['action'])) {
    if ($_GET['action'] != 'register' & $_GET['action'] != 'index') {
        require_once('../connection.php');
        $paisController = new PaisController();
        //para eliminar
        if ($_GET['action'] == 'delete') {
            $paisController->delete($_GET['id']);
        } elseif ($_GET['action'] == 'update') {
            //mostrar la vista update con los datos del registro actualizar
            require_once('../Models/pais.php');
            $pais = Pais::getById($_GET['id']);
            //var_dump($pais);
            //$paisController->update();
            require_once('../Views/Pais/update.php');
        }
    }
}
?>