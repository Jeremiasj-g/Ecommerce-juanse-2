<section class="container mt-3">
    <h2>Responder Consulta</h2>

    <form action="<?php echo base_url('enviar_respuesta'); ?>" method="post">
        <input type="hidden" name="consulta_id" value="<?php echo $consulta['id_consulta']; ?>">

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $consulta['email']; ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="respuesta" class="form-label">Respuesta</label>
            <textarea name="respuesta" id="respuesta" class="form-control" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Respuesta</button>
    </form>
</section>


