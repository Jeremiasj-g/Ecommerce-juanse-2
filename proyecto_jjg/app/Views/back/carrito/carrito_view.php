<div class="container container-table-productos mt-3 mb-3" id="carrito">

    <div style="position: absolute; top: 10%; z-index: 1; left: 50%; transform: translateX(-50%);">
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
        <?php if (session()->getFlashdata('succescompra')) {
            echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('succescompra') . "
                </div>";
        }
        ?>
        <?php if (session()->getFlashdata('mensaje_stock')) {
            echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('mensaje_stock') . "
                </div>";
        }
        ?>

    </div>

    <div class="carts" >
        <div class = "heading">
            <h2 style="margin-bottom: 60px; border-color: #023e8a;">Productos en tu Carrito</h2>
        </div>
        <div class="text" align="center"> 
          <?php 
               
               $session=session();
               $cart = \Config\Services::cart();
               $cart = $cart->contents();
              
            // Si el carrito está vacio, mostrar el siguiente mensaje
            if (empty($cart)) 
            {
                echo 'Para agregar productos al carrito, click en "Comprar"';
            }  
            ?>    
        </div>
    </div>
  <table class="stripe" border="0" cellpadding="20px" cellspacing="1px">
        <!--table class="table table-striped"-->
          <?php // Todos los items de carrito en "$cart".
         
             // if ($cart = $this->cart->contents()): //Esta función devuelve un array de los elementos agregados en el carro 
            if ($cart == TRUE):?>
                <div class="container">
                <div class="table">
                <table class="table table-bordered table-hover table-striped ml-3">
                 <tr>
                    <td><b>ID</b></td>
                    <td><b>Producto</b></td>
                    <td><b>Precio</b></td>
                    <td><b>Cantidad</b></td>
                    <td><b>Total</b></td>
                </tr>

            <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
            echo form_open('carrito_actualiza');//ruta
                $gran_total = 0;
                $i = 1; //
               // foreach ($this->cart->contents() as $items): 
                 foreach ($cart as $item):
                  //  echo "<table class='table table-striped'>";
                    echo  form_hidden('cart[' . $item['id'] . '][id]', $item['id']); 
                    echo  form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']); 
                    echo  form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo  form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo  form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
                    <tr>
                        <td> <?php echo $i++; ?>  </td>
                        <td> <?php echo $item['name']; ?>   </td>
                        <td>$ <?php echo number_format($item['price'], 2); ?>   </td>
                        <td>  <?php echo $item ['qty']; ?>  </td>
                                   
                            <?php $gran_total += ($item['price'] * $item['qty']); ?>

                        <td> $ <?php echo number_format($item['subtotal'], 2) ?>    </td>
                    </tr>
                <?php 
                endforeach;     ?>
              <tr class="table-light">
                   <td colspan="4" style="vertical-align: middle;"> 
                        <b>Total: $
                            <?php //Gran Total
                            echo number_format($gran_total, 2); 
                            ?>
                        </b>
                    </td> 
                    <td colspan="4" align="end">
                 <!-- Borrar carrito usa mensaje de confirmacion javascript implementado en head_view -->
                    <input type="button" class ='btn btn-danger btn-sm m-2 btn-opciones' value="Borrar Carrito" onclick="window.location = 'borrar'">
                        <!-- Submit boton. Actualiza los datos en el carrito -->
                        <!--input type="submit" class ='btn btn-primary btn-lg' value="Actualizar"-->
                        <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
                        <!-- <input type="button" class ='btn-success btn-sm m-2 btn-opciones' value="comprar" onclick="window.location = 'carrito-comprar'"> -->
                    <input type="button" class="btn btn-success btn-sm m-2 btn-opciones" value="comprar" onclick="confirmarCompra()">
                    </td>
                </tr>
                <?php echo form_close();
			
            endif; ?>
        </table>
    </div>
</div>
<br>