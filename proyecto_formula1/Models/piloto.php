<?php

include_once 'pais.php';
include_once 'escuderia.php';

class Piloto {

    //atributos
    public $id;
    public $nombre;
    public $dorsal;
    public $imagen;
    public $pais;
    public $escuderia;

    //constructor de la clase
    function __construct($id, $nombre, $dorsal, $imagen, $pais, $escuderia) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->dorsal = $dorsal;
        $this->imagen = $imagen;
        $this->pais = $pais;
        $this->escuderia = $escuderia;
    }

    //función para obtener todos los pilotos
    public static function all() {
        $listaPilotos = [];
        $db = Db::getConnect();
        $sql = $db->query('SELECT * FROM piloto');

        // carga en la $listaPilotos cada registro desde la base de datos
        foreach ($sql->fetchAll() as $piloto) {
            $listaPilotos[] = new Piloto($piloto['id'], $piloto['nombre'], $piloto['dorsal'], $piloto['imagen'], $piloto['pais'], $piloto['escuderia']);
        }
        return $listaPilotos;
    }

    //la función para registrar un piloto
    public static function save($piloto) {
        $db = Db::getConnect();
        $insert = $db->prepare('INSERT INTO piloto VALUES(NULL,:nombre, :dorsal, :imagen, :pais, :escuderia)');
        $insert->bindValue('nombre', $piloto->nombre);
        $insert->bindValue('dorsal', $piloto->dorsal);
        $insert->bindValue('imagen', $piloto->imagen);
        $insert->bindValue('pais', $piloto->pais);
        $insert->bindValue('escuderia', $piloto->escuderia);
        $insert->execute();
    }

    //la función para actualizar 
    public static function update($piloto) {
        $db = Db::getConnect();
        $update = $db->prepare('UPDATE piloto SET nombre=:nombre, dorsal=:dorsal, imagen=:imagen, pais=:pais, escuderia=:escuderia WHERE id=:id');
        $update->bindValue('id', $piloto->id);
        $update->bindValue('nombre', $piloto->nombre);
        $update->bindValue('dorsal', $piloto->dorsal);
        $update->bindValue('imagen', $piloto->imagen);
        $update->bindValue('pais', $piloto->pais);
        $update->bindValue('escuderia', $piloto->escuderia);
        $update->execute();
    }

    //la función para eliminar por el id
    public static function delete($id) {
        $db = Db::getConnect();
        $delete = $db->prepare('DELETE FROM piloto WHERE ID=:id');
        $delete->bindValue('id', $id);
        $delete->execute();
    }

    //la función para obtener un usuario por el id
    public static function getById($id) {
        //buscar
        $db = Db::getConnect();
        $select = $db->prepare('SELECT * FROM piloto WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        //asignarlo al objeto usuario
        $pilotoDb = $select->fetch();
        $piloto = new Piloto($pilotoDb['id'], $pilotoDb['nombre'], $pilotoDb['dorsal'], $pilotoDb['imagen'], $pilotoDb['pais'], $pilotoDb['escuderia']);
        return $piloto;
    }

}

?>