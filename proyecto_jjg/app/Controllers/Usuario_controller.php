<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        /* echo view('front/nav_view', $data); */
        echo view('back/usuario/registro');
        /* echo view('front/footer'); */
    }

    public function formValidation()
    {
        $validationRules = [
            'nombre'        => 'required|min_length[3]',
            'apellido'      => 'required|min_length[3]|max_length[25]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'       => 'required|min_length[3]|is_unique[usuarios.usuario]',
            'pass'          => 'required|min_length[3]|max_length[10]',
            'pass_confirm'  => 'required|min_length[3]|max_length[10]'
        ];

        $input = $this->validate($validationRules);

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('back/usuario/registro', ['validation' => $this->validator]);
        } else {
            $formModel = new Usuarios_model();

            $usuario = $this->request->getVar('usuario');
            $existingUser = $formModel->where('usuario', $usuario)->first();

            if ($existingUser) {
                session()->setFlashdata('warning', 'Ya existe nombre de usuario');
                return redirect()->to(base_url('/registro'));
            }

            if ($this->request->getVar('pass') != $this->request->getVar('pass_confirm')) {
                session()->setFlashdata('warning', 'Contraseñas no coinciden');
                return redirect()->to(base_url('/registro'));
            }

            $formModel->save([
                'nombre'    => $this->request->getVar('nombre'),
                'apellido'  => $this->request->getVar('apellido'),
                'usuario'   => $usuario,
                'email'     => $this->request->getVar('email'),
                'pass'      => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return redirect()->to(base_url('/registro'));
        }
    }
}
