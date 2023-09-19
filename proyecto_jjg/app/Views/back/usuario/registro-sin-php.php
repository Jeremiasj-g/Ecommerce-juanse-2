<section class="registro">

    <div style="position: absolute; top: 5%; z-index: 1;">
      <!--recuperamos datos con la función Flashdata para mostrarlos-->
      <?php if (session()->getFlashdata('success')) {
        echo " <div class='h4 text-center alert alert-success alert-dismissible'>
                  <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
               </div>";
      }
      ?>
    </div>

    <!-- php $validación = \Config\Services::validación(); Esto carga automáticamente el archivo Config\Validation que contiene configuraciones para incluir múltiples conjuntos de reglas -->
    

    <a href="<?php echo base_url('/') ?>" class="registro-arrow">
        <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="registro-container">

        <form action="<?php echo base_url('/enviar-form') ?>" method="post" class="registro-container_form">

            <h2>Crea una cuenta</h2>
            
            <div class="registro-campo">
                <label for="name">Nombre/es</label>
                <input type="text" name="nombre" id="name" placeholder="Jeremias Jesus">
            </div>

            <div class="registro-campo">
                <label for="surname">Apellido</label>
                <input type="text" name="apellido" id="surname" placeholder="Goytia">
            </div>

            <div class="registro-campo">
                <label for="mail">Email</label>
                <input type="email" name="email" id="mail" placeholder="example@gmail.com">
            </div>

            <div class="registro-campo">
                <label for="usser">Usuario</label>
                <input type="text" name="usuario" id="usser" placeholder="Usser9988">
            </div>

            <div class="registro-campo">
                <label for="password">Contraseña</label>
                <input type="password" name="pass" id="password" placeholder="*********">
            </div>

            <!-- <div class="registro-campo">
                <label for="Cpassword">Confirmar contraseña</label>
                <input type="text" name="varCContraseña" id="Cpassword" placeholder="*********">
            </div> -->

            <div class="registro-buttons">
                <input type="submit" value="Guardar" class="button-form button-guardar">
                <input type="reset" value="Cancelar" class="button-form button-cancelar">
            </div>
        </form>

        <figure class="registro-container_img">
            <img src="assets\img\registro\registro_2.jpg" alt="form-img">
        </figure>

    </div>

    <p class="registro-parrafo">Al registrarte estás aceptando nuestros <a href="<?php echo base_url('terminosyusos') ?>"><b>Términos de Usos.</b></a></p>
</section>