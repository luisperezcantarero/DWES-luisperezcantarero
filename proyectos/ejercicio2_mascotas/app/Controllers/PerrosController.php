<?php
namespace App\Controllers;
use App\Models\Mascotas;
class PerrosController extends BaseController{
    public function IndexAction() {
        $mascotas = Mascotas::getInstancia();
 
        $data['mascotas'] = $mascotas->getAll();

        $this->renderHTML('../views/index_view.php', $data);
    }

    public function addMascotasAction() {
        $lprocesaFormulario = false;
        $data = array();
        $data['nombre'] = $data['raza'] = $data['peso'] = '';
        $data['nombreErrorMensaje'] = $data['razaErrorMensaje'] = $data['pesoErrorMensaje'] = '';

        if (!empty($_POST)) {
            $data['nombre'] = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
            $data['raza'] = filter_input(INPUT_POST, 'raza', FILTER_SANITIZE_STRING);
            $data['peso'] = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_STRING);
            $lprocesaFormulario = true;

            if (empty($data['nombre'])) {
                $data['nombreErrorMensaje'] = 'Por favor, introduzca el nombre';
                $lprocesaFormulario = false;
            }
            if (empty($data['raza'])) {
                $data['razaErrorMensaje'] = 'Por favor, introduzca la raza';
                $lprocesaFormulario = false;
            }
            if (empty($data['peso'])) {
                $data['pesoErrorMensaje'] = 'Por favor, introduzca el peso';
                $lprocesaFormulario = false;
            }
            if ($lprocesaFormulario) {
                $mascotas = Mascotas::getInstancia();
                $mascotas->setNombre($data['nombre']);
                $mascotas->setRaza($data['raza']);
                $mascotas->setPeso($data['peso']);
                $mascotas->set();
                header('Location:' . DIRBASEURL . '/');
                return;
            } else {
                $this->renderHTML('../views/addMacotas_view.php', $data);
            }
        }
    }
}
?>