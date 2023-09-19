<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Login_controller extends BaseController {

    public function index(){
        helper(['form', 'url']);

        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('back/login/login');
    }

    public function auth(){
        $session = session();
        $model = new Usuarios_model();

        /* Ahora traemos los datos del formulario */
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        // Verificar si los campos están vacíos
        if (empty($email) || empty($password)) {
            $session->setFlashdata('msg', 'Por favor, completa todos los campos');
            return redirect()->to(base_url('/Login_controller'));
        }

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            /* Se comprueba si el usuario quiere darse de baja */
            $ba = $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to(base_url('/Login_controller'));
            }
            /* Se verifican los datos ingresados para iniciar, y si cumple la verificación, inicial la sesión */
            $verify_pass = password_verify($password, $pass);
            /* password_verify determina los requisitos de configuración de la contraseña */
            if($verify_pass){
                $ses_data = [
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'], 
                    'usuario' => $data['usuario'],
                    'email' => $data['email'],
                    'pass' => $data['pass'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                /* Si se cumple la verificación de iniciar la sesión */
                $session->set($ses_data);

                session()->setFlashdata('success', '¡Bienvenido!');
                return redirect()->to(base_url('/'));
            } else {
                /* Si no pasa la validación del password */
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to(base_url('/Login_controller'));
            }
        } else {
            $session->setFlashdata('msg', 'No existe el email, o es incorrecto');
            return redirect()->to(base_url('/Login_controller'));
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}

