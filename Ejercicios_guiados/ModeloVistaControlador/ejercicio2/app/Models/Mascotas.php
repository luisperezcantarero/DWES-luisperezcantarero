<?php
require_once "DBAbstractModel.php";
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
public function get(){

}
public function edit() {

}
public function delete() {

}
}
?>