<?

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;
use App\Models\Producto_Model;

class carrito_controller extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'cart']);

        $session = session();
        $cart = \Config\Services::cart();
        $cart->contents();
    }

    public function catalogo()
    {
        $session = session();
        $dato = array('titulo' => 'Todos los productos');
        $productoModel = new Producto_Model();
        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/prodctos_catalogo_view', $data);
        echo view('front/footer');
    }

    // AGREGA AL CARRITO
    public function add()
    {
        $cart = \Config\Services::cart();

        $request = \Config\Services::request();
        $cart->insert(array(
            'id' => $request->getPost('id'),
            'qty' => 1,
            'price' => $request->getPost('precio_vta'),
            'name' => $request->getPost('nombre_prod'),
        ));

        return redirect()->back()->withInput();
    }

    public function remove($rowid)
    {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        // Si $rowid es "all" destruye el carrito.

        if ($rowid === "all") {
            $cart->destroy();
        } else { // Sino destruye solo la fila seleccionada.
            $cart->remove($rowid);
        }

        // Redirige a la misma pagina que se encuentra.
        return redirect()->back()->withInput();
    }

    //muestro el carrito
    public function muestra() {
        $session = session();
        $cart = \Config\Services::cart();
        $cart = $cart->contents();

        $dato['titulo'] = 'Confirmar compra';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/carrito/carrito_parte_view');
        echo view('front/footer_view');
    }

    public function actualiza_carrito()
    {
        $cart = \Config\Services::cart();

        $request = \Config\Services::request();
        $cart->update(array(
            'id' => $request->getPost('id'),
            'qty' => 1,
            'price' => $request->getPost('precio_vta'),
            'name' => $request->getPost('nombre_prod'),
        ));

        return redirect()->back()->withInput();
    }

    public function comprar_carrito()
    {
        $cart = \Config\Services::cart();

        $productos = $cart->contents();
        $request = \Config\Services::request();
        $montoTotal = 0;

        foreach ($productos as $productos) {
            $montoTotal += $producto["price"] * $producto["qty"];
        }
        $ventaCabecera = new Venta_cabecera_model();
        $idcabecera = $ventaCabecera->insert(["total_venta" => $montoTotal, "usuario_id" => session()->id]);

        $ventaDetalle = new Venta_detalle_model();
        $productomodel = new Producto_model();

        foreach ($productos as $producto) {
            $ventaDetalle->instert([
                "venta_id" => $idcabecera, "producto_id" => $producto["id"],
                "stock" => $producto["qty"], "precio" => $producto["price"]
            ]);
            $productomodel->update($producto["id"], ["stock" => $producto["stock"] - $producto["qty"]]);
        }
    }
}
