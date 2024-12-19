<?php
namespace App\Models;
use App\Models\DBAbstractModel;
use \DateTime;


class Mascotas extends DBAbstractModel {
    private static $instancia;
    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase();
    }
    return self::$instancia;
}
public function __clone() {
    trigger_error('La clonación no es permitida!.', E_USER_ERROR);
}

public function getAll() {
    $this->query = "SELECT * FROM perros";
    $this->get_results_from_query();
    return $this->rows;
}

private $id;
private $nombre;
private $raza;
private $peso;
private $created_at;
private $updated_at;

public function setNombre($nombre) {
    $this->nombre = $nombre;
}
public function setRaza($raza) {
    $this->raza = $raza;
}
public function setPeso($peso) {
    $this->peso = $peso;
}
public function getMensaje() {
    return $this->mensaje;
}
public function set() {
    $this->query = "INSERT INTO perros(nombre, raza, peso) VALUES(:nombre, :raza, :peso)";
    $this->parametros['nombre'] = $this->nombre;
    $this->parametros['raza'] = $this->raza;
    $this->parametros['peso'] = $this->peso;
    $this->get_results_from_query();
    $this->mensaje = 'Perro añadido';
}
public function get($id = ''){
    if ($id != '') {
        $this->query = "SELECT * FROM perros WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        $this->mensaje = $id;
        if (count($this -> rows) == 1){
            foreach ($this -> rows[0] as $campo => $valor) {
                $this -> $campo = $valor;
            }
            echo 'ID: ' . $this->id . '<br>';
            echo 'Nombre: ' . $this->nombre . '<br>';
            echo 'Raza: ' . $this->raza . '<br>';
            echo 'Peso: ' . $this->peso . '<br>';
            echo 'Creado en: ' . $this->created_at . '<br>';
            echo 'Actualizado en: ' . $this->updated_at . '<br>';
        } else {
            echo 'Perro no encontrado';
        }
        return $this -> rows[0]??null;
    }
}
public function edit() {
    $fecha = new DateTime();
    $this->query = "UPDATE perros SET nombre = :nombre, raza = :raza, peso = :peso, 
                                    updated_at = :updated_at 
                                    WHERE id = :id"; // now() en MySQL
    $this->parametros['id'] = $this->id;
    $this->parametros['nombre'] = $this->nombre;
    $this->parametros['raza'] = $this->raza;
    $this->parametros['peso'] = $this->peso;
    $this->parametros['updated_at'] = date('Y-m-d H:i:s', $fecha->getTimestamp());
    $this->get_results_from_query();
    $this->mensaje = 'Perro modificado';
}
public function delete() {
    $this->query = 'DELETE FROM perros WHERE id = :id';
    $this->parametros['id'] = $this->id;
    $this->get_results_from_query();
    $this->mensaje = 'Perro eliminado';
}
}
?>