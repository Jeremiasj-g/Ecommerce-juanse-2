<section class="registro login">

    <div style="position: absolute; top: 5%; z-index: 1;">
      <!--recuperamos datos con la función Flashdata para mostrarlos-->
      <?php if (session()->getFlashdata('success')) {
        echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('success') . "
               </div>";
      }
      ?>
      <?php if (session()->getFlashdata('msg')) {
        echo " <div class='h4 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('msg') . "
               </div>";
      }
      ?>
    </div>

    <!-- php $validación = \Config\Services::validación(); Esto carga automáticamente el archivo Config\Validation que contiene configuraciones para incluir múltiples conjuntos de reglas -->
    <?php $validation = \Config\Services::validation(); ?>
    

    <a href="<?php echo base_url('/') ?>" class="registro-arrow">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="registro-container login-container">

        <form action="<?php echo base_url('/enviarlogin') ?>" method="post" class="registro-container_form login-container_form">

            <h2>Iniciar sesión</h2>

            <div class="registro-campo login_campo">
                <label for="mail">Email</label>
                <input type="email" name="email" id="mail" placeholder="example@gmail.com">
            </div>

            <div class="registro-campo login_campo">
                <label for="password">Contraseña</label>
                <input type="password" name="pass" id="password" placeholder="*********">

                <!-- Error -->
                <?php if ($validation->getError('pass')) { ?>
                  <div class='alert alert-warning mt-2' style="width: max-content; height: max-content; padding: 5px;">
                    <?= $error = $validation->getError('pass'); ?>
                  </div>
                <?php } ?>
            </div>

            <div class="registro-buttons">
                <input type="submit" value="Enviar" class="button-form button-guardar">
                <input type="reset" value="Cancelar" class="button-form button-cancelar">
            </div>
            
            <p class="registro-pregunta">No tienes una cuenta? <a href="<?php echo base_url('registro')?>"><b>Regístrate.</b></a></p>
        </form>

        <figure class="registro-container_img">
            <img src="assets\img\login\login2.png" alt="form-img">
        </figure>

    </div>
</section>