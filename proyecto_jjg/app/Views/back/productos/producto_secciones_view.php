
<section class="container container-table-productos mt-3 mb-3">
    <h2>Productos</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('secciones') ?>" class="btn-dark btn-sm m-2 btn-opciones">Secciones</a>
        <a href="<?php echo base_url('crear') ?>" class="btn-dark btn-sm m-2 btn-opciones">Agregados</a>
        <a href="<?php echo base_url('eliminados') ?>" class="btn-danger btn-sm m-2 btn-opciones">Eliminados</a>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="cards--productos__container">
        <div class="cards__container">
            <a class="cards btn-dark btn-opciones btn-opciones-2" href="<?php echo base_url('bebidas') ?>">
                <span>Bebidas</span>
            </a>

            <a class="cards btn-dark btn-opciones btn-opciones-2" href="<?php echo base_url('golosinas') ?>">
                <span>Golosinas</span>
            </a>

            <a class="cards btn-dark btn-opciones btn-opciones-2" href="<?php echo base_url('almacen') ?>">
                <span>Almacen</span>
            </a>

            <a class="cards btn-dark btn-opciones btn-opciones-2" href="<?php echo base_url('lacteos') ?>">
                <span>Lácteos</span>
            </a>
        </div>
    </div>

</section>