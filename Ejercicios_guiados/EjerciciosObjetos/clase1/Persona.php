<?php
/**
 * 
 * @author Luis Pérez
 * 
 */
// Documentación de la clase Persona
 class Persona {
  // Declaración de las variables privadas
    private $_nombre;
    private $_apellido1;
    private $_apellido2;

    public function __construct($nombre, $apellido1, $apellido2) {
      $this->_nombre = $nombre; // $this es pseudovariable
      $this->_apellido1 = $apellido1;
      $this->_apellido2 = $apellido2;
    }

    /**
     * Función que devuelve el nombre completo
     * 
     * @return string
     */
    public function nombre() {
      return $this->_nombre . " " . $this->_apellido1 . " " . $this->_apellido2;
    }

    public function Saludo() {
      echo "Hola mundo";
    }

 }
?>