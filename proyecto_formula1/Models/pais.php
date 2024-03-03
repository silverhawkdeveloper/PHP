<?php

class Pais {

    //atributos
    public $id;
    public $nombre;
    public $imagen;

    //constructor de la clase
    function __construct($id, $nombre, $imagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
    }

    //función para obtener todos los paises
    public static function all() {
        $listaPaises = [];
        $db = Db::getConnect();
        $sql = $db->query('SELECT * FROM pais');

        //carga en la $listaPaises cada registro desde la base de datos
        foreach ($sql->fetchAll() as $pais) {
            $listaPaises[] = new Pais($pais['id'], $pais['nombre'], $pais['imagen']);
        }
        return $listaPaises;
    }

    //la función para registrar un pais
    public static function save($pais) {
        $db = Db::getConnect();
        $insert = $db->prepare('INSERT INTO pais VALUES(NULL,:nombre, :imagen)');
        $insert->bindValue('nombre', $pais->nombre);
        $insert->bindValue('imagen', $pais->imagen);
        $insert->execute();
    }

    //la función para actualizar 
    public static function update($pais) {
        $db = Db::getConnect();
        $update = $db->prepare('UPDATE pais SET nombre=:nombre, imagen=:imagen WHERE id=:id');
        $update->bindValue('id', $pais->id);
        $update->bindValue('nombre', $pais->nombre);
        $update->bindValue('imagen', $pais->imagen);
        $update->execute();
    }

    //la función para eliminar por el id
    public static function delete($id) {
        $db = Db::getConnect();
        $delete = $db->prepare('DELETE FROM pais WHERE id=:id');
        $delete->bindValue('id', $id);
        $delete->execute();
    }

    //la función para obtener un pais por el id
    public static function getById($id) {
        //buscar
        $db = Db::getConnect();
        $select = $db->prepare('SELECT * FROM pais WHERE id=:id');
        $select->bindValue('id', $id);
        $select->execute();
        //asignarlo al objeto
        $paisDb = $select->fetch();
        $pais = new Pais($paisDb['id'], $paisDb['nombre'], $paisDb['imagen']);
        return $pais;
    }

}

?>