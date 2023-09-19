<!-- <h2 class="contacto_h2">Contactanos</h2> -->

<?php helper('form')?>
<?php if(isset($validation)){ ?>
          <div class="alert-danger">
            <?=$validation->listErrors(); ?>
        </div>
<?php }?>

<div>
<?php if (session()->getFlashdata('msgc')) {
    echo " <div class='h4 text-center alert alert-warning alert-dismissible' style='border-radius: 40px;'>
              <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('msgc') . "
           </div>";
  }
?>
</div>

<section class="contacto">

    <div class="container-contacto">
    
        <section class="container-contacto_section_1">
            <h3>Contactanos</h3>
    
            <div class="container-direcciones">
                <p><b>Direcciones</b></p>
                <span>Brasil y 9 de Julio</span>
                <span>Irigoyen 2184</span>
                <span>Don Bosco 1303</span>
                <span>Tucuman 1198</span>
                <span>Alberdi y Gral Paz</span>
                <span>Las Violetas y Puyau</span>
            </div>
    
            <span class="email-info">
                <b>Email</b>
                <p>somosjuanse@gmail.com</p>
            </span>
    
            <div class="container-info">
                    <div class="info_1">
                        <span>Comunicate con nosotros</span>
                        <span><b><i><img src="<?php echo base_url('assets/img/icons/phone-solid.svg')?>" alt="phone-img" width=14px></i>3794-752707</b></span>
                    </div>
    
                    <div class="info_2">
                        <span><b>Nuestros horarios de atencion son:</b> de <b>Lunes a Sabados</b> de 8hs a 18hs</span>
                    </div>
                </div>
        </section>
    
        <section class="container-contacto_section_2">
            <div class="container-form">
                    <form action="<?php echo base_url('/consulta')?>" method="post">
                        <span>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Aa" required">
                        </span>
    
                        <span>
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" placeholder="Aa" required>
                        </span>
    
                        <span>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
                        </span>
    
                        <span>
                            <label for="telefono">Nro de teléfono</label>
                            <input type="number" min="0" name="telefono" id="telefono" placeholder="999-999999">
                        </span>
    
                        <textarea class="container-form_textarea" name="mensaje" id="mensaje" placeholder="Dejanos tu mensaje" required></textarea>
    
                        <input class="container-form_button" type="submit" value="Enviar">
                        <input class="container-form_button container-form_button_warning" type="reset" value="Cancelar">
                    </form>
            </div>
    
    
            <div class="container-contacto_ubicacion">
                <div class="ubicacion">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.054824506981!2d-58.823801800000005!3d-27.4675525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b5e87930a23%3A0xa77067a22b7889b6!2sLoteria%20de%20Corrientes!5e0!3m2!1ses-419!2sar!4v1681518415955!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    
    </div>
</section>