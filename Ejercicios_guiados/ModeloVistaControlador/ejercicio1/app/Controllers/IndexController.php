<?php
namespace App\Controllers;
require_once "BaseController.php";

// Definimos la clase que extiende de base controller
class IndexController extends BaseController{
    public function IndexAction()
    {
        $data = array('message' => 'Hola Mundo');
        $this->renderHTML('../app/views/index_view.php', $data);
    }
    public function saludoAction($nombre = null)
    {
        $resquest = explode("/", $resquest);
        $resquest = end($nombre);
        $data = array('message' => 'Hola ' . $nombre);
        $this->renderHTML('../app/views/saludo_view.php', $data);
    }
}
?>