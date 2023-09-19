<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Producto_model;

class Producto_controller extends Controller {
    public function __construct() {
        helper(['url', 'form']);
        // $db = \Config\Database::connect();
    }

    // MOSTRAR LOS PRODUCTOS EN LISTA
    public function index() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_nuevo_view', $data);
        echo view('front/footer');
    }
    
    public function secciones() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_secciones_view', $data);
        echo view('front/footer');
    }

    public function bebidas() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_bebidas_view', $data);
        echo view('front/footer');
    }

    public function golosinas() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_golosinas_view', $data);
        echo view('front/footer');
    }

    public function almacen() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_almacen_view', $data);
        echo view('front/footer');
    }

    public function lacteos() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_lacteos_view', $data);
        echo view('front/footer');
    }

    public function creaProducto() {
        $productoModel = new Producto_Model();
        $data['obj'] = $productoModel->orderBy('id', 'DESC')->findAll(); 

        $dato['titulo'] = 'Alta producto';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/alta_productos_view', $data);
        echo view('front/footer');
    }

    public function store() {
        $input = $this->validate 
        ([
            'nombre_prod'     => 'required|min_length[2]',
            'categoria_id'    => 'is_not_unique[categorias.id]',
            'precio'          => 'required',
            'precio_vta'      => 'required',
            'stock'           => 'required',
            'stock_min'       => 'required',
            'imagen'          => 'mime_in[imagen,image/jpg,image/jpeg,image/png,image/webp,image/ico]'
        ]);

        
        $productoModel = new Producto_Model();
    
        if (!$input) {
            session()->setFlashdata('warning', '¡Datos no validos!');

            $dato ['titulo'] = 'Alta';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/productos/alta_productos_view', ['validation' => $this->validator]);
        } else {

            if (!$this->request->getFile('imagen')->isValid()) {
                // El usuario no ha seleccionado un archivo de imagen válido
                session()->setFlashdata('warning', '¡Imagen no valida!');
                return redirect()->to(base_url('/product-form'));
            }

            /* if ($this->request->getVar('categoria') == 0) {
                session()->setFlashdata('danger', '¡Ingrese una categoria valida!');
                return redirect()->to(base_url('/product-form'));
            } */

            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio);

            if ($this->request->getVar('precio') < 0 || $this->request->getVar('precio_vta') < 0) {
                session()->setFlashdata('warning-2', '¡Ingrese un precio mayor a 0!');
                return redirect()->to(base_url('product-form'));
    
            } else {
                $data = [
                    'nombre_prod'  => $this->request->getVar('nombre_prod'),
                    'imagen'       => $img->getName(),
                    
                    // COMPLETAR CON LOS DEMAS CAMPOS
        
                    'categoria_id' => $this->request->getVar('categoria_id'),
                    'precio'       => $this->request->getVar('precio'),
                    'precio_vta'   => $this->request->getVar('precio_vta'),
                    'stock'        => $this->request->getVar('stock'),
                    'stock_min'    => $this->request->getVar('stock_min'),
        
                    /* 'eliminado'    => 'NO', */ /* NO SE */
                ];
            }
    
    
            $productoModel->insert($data);
            return $this->response->redirect(base_url('crear'));

            /* VALIDACION PARA IMAGEN */
/*             $extension = pathinfo($this->request->getVar('imagen'), PATHINFO_EXTENSION);

            if ($extension!='jpg' || $extension!='jpeg' || $extension!='png') {
                return redirect()->to(base_url('/product-form'))->with('warning', 'Imagen no valida');
            } */
        }
    }


    public function singleProducto($id = null) {
        $productoModel = new Producto_Model();
        $data['old'] = $productoModel->where('id', $id)->first();

        $dato ['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/edit', $data);
        echo view('front/footer');
    }

    public function eliminados() {
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/producto_eliminado', $data);
        echo view('front/footer');
    }

    // UPDATE DE PRODUCTOS (MODIFICACION)

    public function modificar($id)
{
    $productoModel = new Producto_Model();
    $producto = $productoModel->where('id', $id)->first();

    if (empty($producto)) {
        session()->setFlashdata('warning', '¡El producto no existe!');
        return redirect()->to(base_url('editar/' . $id));
    }

    if ($this->request->getVar('categoria_id') == 0) {
        session()->setFlashdata('warning', '¡Ingrese una categoría válida!');
        return redirect()->to(base_url('editar/' . $id));
    } elseif ($this->request->getVar('precio') < 0 || $this->request->getVar('precio_vta') < 0) {
        session()->setFlashdata('warning-2', '¡Ingrese un precio mayor a 0!');
        return redirect()->to(base_url('editar/' . $id));
    }

    $data = [
        'nombre_prod'  => $this->request->getVar('nombre_prod'),
        'categoria_id' => $this->request->getVar('categoria_id'),
        'precio'       => $this->request->getVar('precio'),
        'precio_vta'   => $this->request->getVar('precio_vta'),
        'stock'        => $this->request->getVar('stock'),
        'stock_min'    => $this->request->getVar('stock_min'),
    ];

    $productoModel->update($id, $data);

    return redirect()->to(base_url('agregar'));
}


	public function deleteproducto($id = null) {
		$productoModel = new Producto_Model();
		$data['producto'] = $productoModel->where('id', $id)->delete($id);
		return $this->response->redirect(base_url('eliminados'));
	}


/*     public function deletelogico($id = null) {
        $ProductoModel = new Producto_Model();
    
        // Obtener el producto actual
        $producto = $ProductoModel->where('id', $id)->first();
    
        // Verificar si se encontró el producto
        if ($producto) {
            // Guardar el valor actual de la categoría
            $categoria = $producto['categoria_id'];
    
            // Realizar el borrado lógico
            $data['eliminado'] = 'SI';
            $ProductoModel->update($id, $data);
    
            // Restaurar el valor de la categoría
            $data['categoria_id'] = $categoria;
            $ProductoModel->update($id, $data);
        }
    
        return $this->response->redirect(base_url('crear'));
    } */

	public function deletelogico($id = null) {
		$ProductoModel = new Producto_Model();

		$data['eliminado'] = $ProductoModel->where('id', $id)->first();
		$data['eliminado'] = 'SI';
		$ProductoModel->update($id, $data);
		return $this->response->redirect(base_url('crear'));
	}

    public function activarproducto($id = null) {
		$ProductoModel = new Producto_Model();

		$data['eliminado'] = $ProductoModel->where('id', $id)->first();
		$data['eliminado'] = 'NO';
		$ProductoModel->update($id, $data);
		return $this->response->redirect(base_url('eliminados'));
	}

}




