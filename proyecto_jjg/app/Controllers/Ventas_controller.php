<?php

namespace App\Controllers;

use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;
use App\Models\Producto_model;
use App\Models\Usuarios_model;

class Ventas_controller extends BaseController
{
    public function comprarCarrito()
{
    $idSession = session();
    $cart = \Config\Services::cart();
    $productos = $cart->contents();
    $montoTotal = 0;
    $excedeStock = false; // Variable para verificar si se excede el stock
    $nombreProducto = '';

    foreach ($productos as $producto) {
        $montoTotal += $producto["price"] * $producto["qty"];

        $ventaCabecera = new Ventas_cabecera_model();
        $idSession = intval(session()->id);

        $fechaActual = date('Y-m-d'); // Obtener la fecha actual en el formato deseado

        $idCabecera = $ventaCabecera->insert([
            "total_venta" => $montoTotal,
            "usuario_id" => $idSession,
            "fecha" => $fechaActual // Agregar la fecha actual al array de datos
        ]);

        $ventaDetalle = new Ventas_detalle_model();
        $productModel = new Producto_model();

        $productStock = $productModel->find($producto["id"]); // Obtener los detalles del producto
        $stock = $productStock["stock"]; // Obtener el stock del producto

        if ($stock >= $producto["qty"]) {
            // Actualizar el stock del producto
            $newStock = $stock - $producto["qty"];
            $productModel->update($producto["id"], ['stock' => $newStock]);

            // Insertar en la tabla de ventas detalle
            $ventaDetalle->insert([
                "venta_id" => $idCabecera,
                "producto_id" => $producto['id'],
                "cantidad" => $producto["qty"],
                "precio" => $producto["price"]
            ]);
        } else {
            $excedeStock = true;
            $nombreProducto = $productStock["nombre_prod"]; // Suponiendo que el nombre del producto se encuentra en el campo "nombre".
        }
    }

    if ($excedeStock) {
        $mensaje = "La cantidad seleccionada para el producto '$nombreProducto' supera el stock disponible.";
        session()->setFlashdata('mensaje_stock', $mensaje);
        // Redireccionar de vuelta al carrito o a la página correspondiente
        return redirect()->to('/muestro');
    }

    $cart->destroy();

    session()->setFlashdata('success_compra', '¡Gracias por su compra!');
    // Redireccionar a la página de confirmación de compra
    return redirect()->to('/muestro');
}




    public function factura($ventaId)
    {
        $detalleVentas = new Ventas_detalle_model();
        $data['ventaDetalle'] = $detalleVentas->getDetalles($ventaId);

        $dato['titulo'] = 'Factura';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/carrito/factura', $data);
        echo view('front/footer');
    }

    public function ventas()
    {
        $session = session();
        $id = $session->get('id');
        $perfil = $session->get('perfil_id');

        $detalleVentas = new Ventas_cabecera_model();

        if ($perfil == '1') {
            $data['ventaDetalle'] = $detalleVentas->orderBy('id', 'DESC')->findAll();
        } elseif ($perfil == '2') {
            $data['ventaDetalle'] = $detalleVentas->where('usuario_id', $id)->orderBy('id', 'DESC')->findAll();
        }

        $dato['titulo'] = 'Ventas';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/carrito/vista_ventas', $data);
        echo view('front/footer');
    }
}
