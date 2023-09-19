<div style="position: absolute; top: 12%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('warning')) {
        echo " <div class='h6 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
              <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:.8rem; color: red;'></button>" . session()->getFlashdata('warning') . "
           </div>";
    }
    ?>
</div>

<div style="position: absolute; top: 12%; z-index: 1; left: 50%; transform: translateX(-50%);">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('damger')) {
        echo " <div class='h6 text-center alert alert-damger alert-dismissible' style='border-radius: 40px;'>
              <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:.8rem; color: red;'></button>" . session()->getFlashdata('damger') . "
           </div>";
    }
    ?>
</div>

<div style="position: absolute; top: 12%; z-index: 1; left: 50%; transform: translateX(-50%);">
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
        <?php if (session()->getFlashdata('warning-2')) {
            echo " <div class='h6 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:.8rem; color: red;'></button>" . session()->getFlashdata('warning-2') . "
               </div>";
        }
        ?>
</div>



<section class="alta--productos">

    <a href="<?php echo base_url('/crear') ?>" class="registro-arrow alta-productos-arrow">
        <i class="fa-solid fa-arrow-left"></i>
    </a>


    <?php $validation = \Config\Services::validation(); ?>

    <div class="alta--container__form">

        <h2>Agregar producto</h2>

        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('/enviar-prod') ?>">

            <div class="form__div__celda c1">
                <div class="form__div">
                    <label for="nombre_prod">Nombre del producto</label>
                    <input type="text" id="nombre_prod" name="nombre_prod" placeholder="Coca Cola" required>
                    <?php if ($validation->getError('nombre_prod')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('nombre_prod'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form__div">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" id="precio" name="precio" placeholder="$350.00" required>
                    <?php if ($validation->getError('precio')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('precio'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form__div">
                    <label for="precio_vta">Precio Venta</label>
                    <input type="number" step="0.01" id="precio_vta" name="precio_vta" placeholder="$350.00" required>
                    <?php if ($validation->getError('precio_vta')) { ?>
                        <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('precio_vta'); ?>
                    </div>
                    <?php } ?>
                </div>

            </div>
                
            <div class="form__div__celda c2">
                
                    <div class="form__div">
                        <label for="stock">Stock</label>
                        <input type="number" id="stock" name="stock" placeholder="500" required>
                        <?php if ($validation->getError('stock')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('stock'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    
                    <div class="form__div">
                        <label for="stock_min">Stock_min</label>
                        <input type="number" id="stock_min" name="stock_min" placeholder="200" required>
                        <?php if ($validation->getError('stock_min')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('stock_min'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    
                    <div class="form__div">
                        <label for="categoria_id">Categoria</label>
                        <select name="categoria_id" id="categoria_id" class="select-styling">
                            <option value="0" select> -- Seleccionar categoria --</option>
                            <option value="1">1 - Bebidas</option>
                            <option value="2">2 - Almacen</option>
                            <option value="3">3 - Lacteos</option>
                            <option value="4">4 - Golosinas</option>
                        </select>
                        <?php if ($validation->getError('categoria_id')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('categoria_id'); ?>
                            </div>
                        <?php } ?>
                    </div>
            </div>
                
            <div class="form__div__celda c3">

            <div class="form__div">
                <span>Imagen</span>
                <label for="file-input" class="file-input-label">
                    <span class="icon"><i class="fas fa-folder"></i></span>
                    Seleccionar archivo
                </label>
                <input type="file" id="file-input" name="imagen" accept="image/*" required style="display: none;">
            </div>

            <!-- Agrega un elemento <img> para mostrar la imagen -->
            <img id="preview-image" src="#" alt="Vista previa de la imagen">
                
                <!-- <div class="form__div">
                    <span>Imagen</span>
                    <label for="file-input" class="file-input-label">
                        <span class="icon"><i class="fas fa-folder"></i></span>
                        Seleccionar archivo
                    </label>
                    <input type="file" id="file-input" name="imagen" accept="image/*" required style="display: none;">
                </div> -->
                
            </div>

            <div class="alta--container__buttons">
                <input type="submit" value="guardar" class="btn btn-success btn-opciones">
                <input type="reset" value="cancelar" class="btn btn-dark btn-opciones">
            </div>

        </form>
    </div>
</section>