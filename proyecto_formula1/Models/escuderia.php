<?php

include_once 'pais.php';
include_once 'piloto.php';

class Escuderia {

    //atributos
    public $id;
    public $nombre;
    public $constructor;
    public $chasis;
    public $imagen;
    public $pais;
    public $piloto;

    //constructor de la clase
    function __construct($id, $nombre, $constructor, $chasis, $imagen, $pais, $piloto) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->constructor = $constructor;
        $this->chasis = $chasis;
        $this->imagen = $imagen;
        $this->pais = $pais;
        $this->piloto = $piloto;
    }

    //función para obtener todos las escuderias
    public static function all() {
        $listaEscuderias = [];
        $db = Db::getConnect();
        $sql = $db->query('SELECT * FROM escuderia');

        //carga en la $listaEscuderias cada registro desde la base de datos
        foreach ($sql->fetchAll() as $escuderia) {
            $listaEscuderias[] = new Escuderia($escuderia['id'], $escuderia['nombre'], $escuderia['constructor'],
                    $escuderia['chasis'], $escuderia['imagen'], $escuderia['pais'], $escuderia['piloto']);
        }
        return $listaEscuderias;
    }

    //la función para registrar una escuderia
    public static function save($escuderia) {
        $db = Db::getConnect();
        $insert = $db->prepare('INSERT INTO escuderia VALUES(NULL,:nombre, :constructor, :chasis, :imagen, :pais, :piloto)');
        $insert->bindValue('nombre', $escuderia->nombre);
        $insert->bindValue('constructor', $escuderia->constructor);
        $insert->bindValue('chasis', $escuderia->chasis);
        $insert->bindValue('imagen', $escuderia->imagen);
        $insert->bindValue('pais', $escuderia->pais);
        $insert->bindValue('piloto', $escuderia->piloto);
        $insert->execute();
    }

    //la función para actualizar 
    public static function update($escuderia) {
        $db = Db::getConnect();
        $update = $db->prepare('UPDATE escuderia SET nombre=:nombre, constructor=:constructor, chasis=:chasis, imagen=:imagen, pais=:pais, piloto=:piloto WHERE id=:id');
        $update->bindValue('id', $escuderia->id);
        $update->bindValue('nombre', $escuderia->nombre);
        $update->bindValue('constructor', $escuderia->constructor);
        $update->bindValue('chasis', $escuderia->chasis);
        $update->bindValue('imagen', $escuderia->imagen);
        $update->bindValue('pais', $escuderia->pais);
        $update->bindValue('piloto', $escuderia->piloto);
        $update->execute();
    }

    //la función para eliminar por el id
    public static function delete($id) {
        $db = Db::getConnect();
        $delete = $db->prepare('DELETE FROM escuderia WHERE id=:id');
        $delete->bindValue('id', $id);
        $delete->execute();
    }

    //la función para obtener un usuario por el id
    public static function getById($id) {
        //buscar
        $db = Db::getConnect();
        $select = $db->prepare('SELECT * FROM escuderia WHERE id=:id');
        $select->bindValue('id', $id);
        $select->execute();
        //asignarlo al objeto
        $escuderiaDb = $select->fetch();
        $escuderia = new Escuderia($escuderiaDb['id'], $escuderiaDb['nombre'], $escuderiaDb['constructor'],
                $escuderiaDb['chasis'], $escuderiaDb['imagen'], $escuderiaDb['pais'], $escuderiaDb['piloto']);
        return $escuderia;
    }

}

?>