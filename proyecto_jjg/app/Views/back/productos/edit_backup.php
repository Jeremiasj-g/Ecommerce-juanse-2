

<body>



  <div class="alta--productos">
    <br>
    <center>
      <div class="alta--container__form">
        <div class="card-header text-center">
          <h2>EDITAR PRODUCTO</h2>
        </div>

        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?php echo base_url('modificar/' . $old['id']) ?>">
          <input type="hidden" name="id" id="id" value="<?php echo $old['id']; ?>">

          <div class="card-body" media="(max-width:768px)">
            <div class="mb-2">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input name="nombre_prod" type="text" class="form-control" placeholder="nombre"
                value="<?php echo $old['nombre_prod']; ?>">
              <!-- Error -->
              <?php if ($validation->getError('nombre_prod')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('nombre_prod'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">precio</label>
              <input type="text" name="precio" class="form-control" placeholder="precio"
                value="<?php echo $old['precio']; ?>">
              <!-- Error -->
              <?php if ($validation->getError('precio')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('precio'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">precio_vta</label>
              <input name="precio_vta" type="text" class="form-control" placeholder="precio_vta"
                value="<?php echo $old['precio_vta']; ?>">
              <!-- Error -->
              <?php if ($validation->getError('precio_vta')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('precio_vta'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">stock</label>
              <input tyupe="text" name="stock" class="form-control" placeholder="stock"
                value="<?php echo $old['stock']; ?>">
              <!-- Error -->
              <?php if ($validation->getError('stock')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('stock'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label>stock_min</label>

              <input type="text" name="stock_min" class="form-control" value="<?php echo $old['stock_min']; ?>">
              <?php if ($validation->getError('stock_min')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('stock_min'); ?>


                </div>
              <?php } ?>

            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">categoria</label>
              <input name="categoria_id" type="categoria_id" class="form-control" placeholder="categoria_id"
                value="<?php echo $old['categoria_id']; ?>">
              <!-- Error -->
              <?php if ($validation->getError('categoria_id')) { ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('cat'); ?>
                </div>
              <?php } ?>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-dark">Enviar</button>
            </div>

          </div>
    </form>
  </div>
  </div>
</body>