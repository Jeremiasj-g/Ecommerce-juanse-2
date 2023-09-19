<?php 
namespace App\Controllers;
use App\Models\Usuarios_model;
use App\Models\consulta_Model;
use CodeIgniter\Controller;

class Usuario_crud_controller extends Controller
{
    // show users list
    public function principal(){
        $userModel = new Usuarios_model();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
       
         $dato['titulo']='Crud_usuarios'; 

         
         echo view('front/head_view', $dato);
         echo view('front/nav_view');
         echo view('back/usuario/usuario_nuevo_view',$data);
         echo view('front/footer');
    }

    public function eliminados(){
        $userModel = new Usuarios_model();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
       
         $dato['titulo']='Crud_usuarios'; 

         
         echo view('front/head_view', $dato);
         echo view('front/nav_view');
         echo view('back/usuario/usuario_eliminado_view',$data);
         echo view('front/footer');
    }
    // add user form
    public function create(){
        $userModel = new Usuarios_model();
        $data['user_obj'] = $userModel->orderBy('id', 'DESC')->findAll();
      
         $dato['titulo']='Alta Usuario'; 
        echo view('front/head_view',$dato);
        echo view('front/nav_view');
         echo view('back/usuario/usuario_crud_view',$data);
          echo view('front/footer');
    }
 
    // insert data
    public function store() {
        //$userModel = new Usuarios_Model();

        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'pass'     => 'required|min_length[3]|max_length[10]'
        ]);
        $userModel = new Usuarios_model();
 
        if (!$input) {
               $data['titulo']='Modificacion'; 
                echo view('front/head_view',$data);
                echo view('front/nav_view');
                echo view('back/usuario/usuario_crud_view', [
                'validation' => $this->validator
            ]);
        } else {
           
        $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email'  => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
               
              //  'pass'  => $this->request->getVar('pass'),
            ];  
             $userModel->insert($data);
             return $this->response->redirect(site_url('users-list'));
        }
    
   }
    // show single user
    public function singleUser($id = null){
         $userModel = new Usuarios_model();
         $data['user_obj'] = $userModel->where('id', $id)->first();
        
        $dato['titulo']='Crud_usuarios'; 
         echo view('front/head_view', $dato);
         echo view('front/nav_view');
         echo view('back/usuario/edit_usuarios_view', $data);
         echo view('front/footer');
    }
    // update user data
    public function update(){
        $userModel = new Usuarios_model();
        $id = $this->request->getVar('id');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email'  => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            'perfil_id' => $this->request->getVar('perfil_id'),
            'baja'=> $this->request->getVar('baja'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('users-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new Usuarios_model();
        $data['usuario'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('users-list'));
    } 
    //delete lógico (cambia el estado del campo baja)   
    public function deletelogico($id = null)
    {
        $userModel = new Usuarios_model();
        $data['baja'] = $userModel->where('id', $id)->first();
        $data['baja'] = 'SI';
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('usuarios'));
    }    
    public function activarlogico($id = null)
    {
        $userModel = new Usuarios_model();
        $data['baja'] = $userModel->where('id', $id)->first();
        $data['baja'] = 'NO';
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('dadosbaja'));
    }    

    public function listar_consultas(){
        // instancio el modelo de consultas
        $consultas = new consulta_model();
        // traer todos los consultas activas desde la db
        $data['consultas'] = $consultas->getConsultas();
            $dato['titulo']='Gestion-Consultas'; 
    
        echo view('front/head_view', $dato);
         echo view('front/nav_view');
         echo view('back/consultas/listar_consultas', $data);
         echo view('front/footer');

            }

    public function atender_consulta($id = null){
       
        $consultasM = new consulta_model();
        // traigo consulta por id
        $consultasM->getConsulta($id);
        // actualizo el estado de la consulta
        $consultasM->update($id, ['respuesta' => 'SI']);
        // redirecciona al metodo de el controllador
        return redirect()->to(base_url('listar_consultas'));
    }

    public function eliminar_consulta($id = null){
        // instancio el modelo de consultas
        $model = new consulta_model();
        // traigo consulta por id
        $model->getConsulta($id);
        // elimino la consulta
        $model->delete($id);
        // redirecciona al metodo de el controllador
        return redirect()->to(base_url('listar_consultas'));
    }
}