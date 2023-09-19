<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use CodeIgniter\Email\Email;

class Consultas_controller extends BaseController {

    public function __construct() {
        helper(['url', 'form']);
        // $db = \Config\Database::connect();
    }

    public function principal() {
        $consultaModel = new Consulta_Model();
        $data['consulta'] = $consultaModel->orderBy('id_consulta', 'DESC')->findAll();

        $dato['titulo'] = 'Consultas';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/usuario/consultas', $data);
        echo view('front/footer');
    }

    public function noLeidos() {
        $consultaModel = new Consulta_Model();
        $data['consulta'] = $consultaModel->orderBy('id_consulta', 'DESC')->findAll();

        $dato['titulo'] = 'Consultas';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/usuario/consultas_no_leidas', $data);
        echo view('front/footer');
    }


    public function reply($consultaId) {
        // Obtener los datos de la consulta utilizando el ID
        $consultaModel = new Consulta_model();
        $consulta = $consultaModel->find($consultaId);

        if ($consulta) {
            // Pasar los datos de la consulta a la vista
            $data['consulta'] = $consulta;

            // Cargar la vista 'consulta_reply_form' y pasar los datos
            return view('back/usuario/consulta_reply_form', $data);
        } else {
            // La consulta no existe, manejar el caso adecuadamente
            return redirect()->to('/consulta_contactos'); // Ejemplo de redirección a una página de error
        }
    }

    public function enviarRespuesta() {
        // Obtener los datos del formulario
        $consultaId = $this->request->getPost('consulta_id');
        $email = $this->request->getPost('email');
        $respuesta = $this->request->getPost('respuesta');
    
        // Realizar las acciones necesarias, como enviar la respuesta por correo electrónico
    
        // Configurar la biblioteca de correo electrónico
        $emailConfig = [
            'mailType' => 'html',
        ];
        $emailLib = new Email($emailConfig);
    
        // Configurar los detalles del correo electrónico
        $emailLib->setTo($email);
        $emailLib->setSubject('Respuesta a su consulta');
        $emailLib->setMessage($respuesta);

        $resultado = mail($email, 'respuesta a su consulta', $respuesta);

    
        // Enviar el correo electrónico
        if ($emailLib->send()) {
            // El correo electrónico se envió correctamente
    
            // Realizar otras acciones necesarias, como almacenar la respuesta en la base de datos
    
            // Redireccionar a una página de confirmación o a donde sea necesario
            return redirect()->to('/consulta_contactos');
        } else {
            // Error al enviar el correo electrónico
    
            // Realizar acciones para manejar el error, como mostrar un mensaje de error al usuario
    
            // Redireccionar a una página de error o a donde sea necesario
            return redirect()->to('/aaa');
        }
    }
    

    public function registrar_consulta(){
        $request = \Config\Services::request();
        if($request->getMethod(true)){
            $rules=[
                'nombre' => 'required',
                'apellido' => 'required',
                'email'=>'required|valid_email',
                'telefono'=>'required',
                'mensaje'=> 'required'
            ];

            $validations=$this->validate($rules);
            if($validations){
                $data=[
                    'nombre'=>$request->getPost('nombre'),
                    'apellido'=>$request->getPost('apellido'),
                    'email'=>$request->getPost('email'),
                    'telefono'=>$request->getPost('telefono'),
                    'mensaje'=>$request->getPost('mensaje')
                ];
                $userConsulta=new Consulta_model();
                $userConsulta->insert($data);
                return redirect()->to('contacto')->with('msg','Se registro tu consulta!.');

            }else{
                $data['validation']=$this->validator;
            }
            $data ['titulo']='contacto';
            return view('front\head_view', $data).
            view('front\nav_view').
            view('front\contacto').
            view('front\footer');
        }

    }

    public function leido($idConsulta)
    {
        $consultaModel = new Consulta_model();
    
        $data = [
            'leido' => 'SI'
        ];
    
        $consultaModel->update($idConsulta, $data);
        return redirect()->to('/consulta_contactos'); // Redirige a la página de consultas leídas después de marcar como leída
    }
    
    public function borrarConsulta($idConsulta)
    {
        $consultaModel = new Consulta_model();
        $consultaModel->delete($idConsulta);
        return redirect()->to('/consulta_no_leidos')->with('msgc', 'Consulta borrada exitosamente');
    }
    

}