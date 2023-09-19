<section class="registro">

    <div style="position: absolute; top: 5%; z-index: 1;">
      <!--recuperamos datos con la función Flashdata para mostrarlos-->
      <?php if (session()->getFlashdata('success')) {
        echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('success') . "
               </div>";
      }
      ?>
       <?php if (session()->getFlashdata('warning')) {
        echo " <div class='h4 text-center alert alert-danger alert-dismissible' style='border-radius: 40px;'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('warning') . "
               </div>";
      }
      ?>
    </div>

    <!-- php $validación = \Config\Services::validación(); Esto carga automáticamente el archivo Config\Validation que contiene configuraciones para incluir múltiples conjuntos de reglas -->
    <?php $validation = \Config\Services::validation(); ?>
    

    <a href="<?php echo base_url('/') ?>" class="registro-arrow">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="registro-container">

        <form action="<?php echo base_url('/enviar-form') ?>" method="post" class="registro-container_form">

            <h2>Crea una cuenta</h2>
            
            <div class="registro-campo">
                <label for="name">Nombre/es</label>
                <input type="text" name="nombre" id="name" placeholder="Aa">

                <!-- Error -->
                <?php if ($validation->getError('nombre')) { ?>
                  <div class='alert alert-warning mt-2' style="width: max-content; height: max-content; padding: 5px;">
                    <?= $error = $validation->getError('nombre'); ?>
                  </div>
                <?php } ?>
            </div>

            <div class="registro-campo">
                <label for="surname" style="font-size: 12.8px;">Apellido</label>
                <input type="text" name="apellido" id="surname" placeholder="Aa">
                
                <!-- Error -->
                <?php if ($validation->getError('apellido')) { ?>
                  <div class='alert alert-warning mt-2' style="width: max-content; height: max-content; padding: 5px;">
                    <?= $error = $validation->getError('apellido'); ?>
                  </div>
                <?php } ?>
            </div>

            <div class="registro-campo">
                <label for="mail">Email</label>
                <input type="email" name="email" id="mail" placeholder="example@gmail.com">

                <!-- Error -->
                <?php if ($validation->getError('email')) { ?>
                  <div class='alert alert-warning mt-2' style="width: max-content; height: max-content; padding: 5px;">
                    <?= $error = $validation->getError('email'); ?>
                  </div>
                <?php } ?>
            </div>

            <div class="registro-campo">
                <label for="usser">Usuario</label>
                <input type="text" name="usuario" id="usser" placeholder="Usser9988">

                <!-- Error -->
                <?php if ($validation->getError('usuario')) { ?>
                  <div class='alert alert-warning mt-2' style="width: max-content; height: max-content; padding: 5px;">
                    <?= $error = $validation->getError('usuario'); ?>
                  </div>
                <?php } ?>
            </div>

            <div class="registro-campo">
                <label for="password">Contraseña</label>
                <input type="password" name="pass" id="password" placeholder="*********">

                <!-- Error -->
                <?php if ($validation->getError('pass')) { ?>
                  <div class='alert alert-warning mt-2' style="width: max-content; height: max-content; padding: 5px;">
                    <?= $error = $validation->getError('pass'); ?>
                  </div>
                <?php } ?>
            </div>

            <div class="registro-campo">
                <label for="Cpassword">Confirmar contraseña</label>
                <input type="password" name="pass_confirm" id="Cpassword" placeholder="*********">
            </div>

            <div class="registro-buttons">
                <input type="submit" value="Guardar" class="button-form button-guardar">
                <input type="reset" value="Cancelar" class="button-form button-cancelar">
            </div>

            <p class="registro-pregunta">Ya tienes una cuenta? <a href="<?php echo base_url('login')?>"><b>Inicia sesión.</b></a></p>
        </form>

        <figure class="registro-container_img">
            <img src="assets\img\registro\registro_2.png" alt="form-img">
        </figure>

    </div>

    <p class="registro-parrafo">Al registrarte estás aceptando nuestros <a href="<?php echo base_url('terminosyusos') ?>" target="_blank"><b>Términos de Usos.</b></a></p>
</section>