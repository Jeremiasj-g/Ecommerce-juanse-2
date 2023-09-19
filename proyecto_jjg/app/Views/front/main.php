<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
}
?>

<main>

    <div style="position: absolute; top: 10%; z-index: 1; left: 50%; transform: translateX(-50%);">
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
        <?php if (session()->getFlashdata('addsuccess')) {
            echo " <div class='h4 text-center alert alert-info alert-dismissible' style='border-radius: 40px;'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' style='font-size:1.2rem; color: red;'></button>" . session()->getFlashdata('addsuccess') . "
                </div>";
        }
        ?>

    </div>

    <section class="section-carrusel">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active d-item">
                    <img src="assets/img/carrusel_bud.png" class="d-block w-100 d-img" alt="budweiser-img">
                </div>

                <div class="carousel-item d-item">
                    <img src="assets/img/carrusel_brahma.png" class="d-block w-100 d-img" alt="brahma-img">
                </div>

                <div class="carousel-item d-item">
                    <img src="assets/img/carrusel_quilmes.png" class="d-block w-100 d-img" alt="quilmes-img">
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <h2 class="h2-encabezado">Productos destacados</h2>

    <section class="main-section-productos-container">

        <div class="main-products-section scroll-perso">

            <?php if ($producto): ?>
                <?php $contador = 0 ?>
                <?php foreach ($producto as $prod): ?>
                    <?php $categoria = $prod['categoria_id']; ?>
                    <?php $imagen = $prod['imagen'] ?>
                    <?php if ($categoria == 1 && ($prod['eliminado'] != 'SI') && $contador < 5): ?>

                        <div class="product">
                            
                            <figure>
                                <img src="<?= base_url() ?>/assets/uploads/<?= $imagen ?>" alt="imagen-producto">
                            </figure>
                            <h5>
                                <?php echo $prod['nombre_prod'] ?>
                            </h5>
                            <span>
                                <?php echo '$' . $prod['precio'] ?>
                            </span>
                            <div class="product__buttons--container">
                                <button class="heart primary-button">
                                    <i class="fa-solid fa-heart"></i>
                                </button>

                                <?php
                                helper('form');
                                if (($prod['stock'] > 0)) {
                                    // Envia los datos en forma de formulario para agregar al carrito
                                    echo form_open('carrito_agrega');
                                    echo form_hidden('carrito_agrega');
                                    echo form_hidden('id', $prod['id']);

                                    echo form_hidden('precio_vta', $prod['precio_vta']);
                                    echo form_hidden('nombre_prod', $prod['nombre_prod']);
                                ?>
                                    <div>
                                        <?php
                                        $btnClass = 'cart primary-button';
                                        $btnValue = '<i class="fas fa-shopping-cart"></i>';
                                        $btnName = 'action';

                                        echo '<button type="submit" class="' . $btnClass . '" name="' . $btnName . '">' . $btnValue . '</button>';
                                        echo form_close();
                                        ?>
                                    </div>
                                <?php }
                                
                                ?>
                            </div>

                        </div>

                        <?php $contador++ ?>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>

        </div>
    </section>

    <h3 class="h3-encabezados">Promos especiales</h3>
    <section class="section-carrusel-ofertas">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <picture class="carousel-item active d-item-o" data-bs-interval="4000">
                    <source class="img-promo" srcset="assets\img\section-oferta-2-mobile.png"
                        media="(max-width: 850px)">
                    <img class="img-promo" src="assets\img\section-oferta-2.png" class="d-block w-100" alt="...">
                </picture>

                <picture class="carousel-item d-item-o" data-bs-interval="4000">
                    <source class="img-promo" srcset="assets\img\ofertas-tarjeta-mobile.jpg" media="(max-width: 850px)">
                    <img class="img-promo" src="assets\img\oferta-tarjetas.jpg" class="d-block w-100" alt="...">
                </picture>

                <picture class="carousel-item d-item-o" data-bs-interval="4000">
                    <source class="img-promo" srcset="assets/img/section-oferta-mobile-nuevo.png"
                        media="(max-width: 850px)">
                    <img class="img-promo" src="assets/img/section-oferta.png" class="d-block w-100" alt="...">
                </picture>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <section class="section-carrusel-2">
        <section class="carrusel-2">

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active d-item-2">
                        <img src="assets/img/carrusel-2/blocks.jpg" class="d-block w-100 d-img-2" alt="...">
                    </div>
                    <div class="carousel-item d-item-2">
                        <img src="assets/img/carrusel-2/aguilas.jpg" class="d-block w-100 d-img-2" alt="...">
                    </div>
                    <div class="carousel-item d-item-2">
                        <img src="assets/img/carrusel-2/oreos.jpg" class="d-block w-100 d-img-2" alt="...">
                    </div>
                    <div class="carousel-item d-item-2">
                        <img src="assets/img/carrusel-2/chupetines.jpg" class="d-block w-100 d-img-2" alt="...">
                    </div>
                    <div class="carousel-item d-item-2">
                        <img src="assets/img/carrusel-2/bonobon-3.jpg" class="d-block w-100 d-img-2" alt="...">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <section class="carrusel-2-novedades">
            <div class="container-novedades">
                <p>¡50% de descuento en la segunda unidad!</p>
                <p>¡Satisface tu antojo con nuestras deliciosas golosinas! Tenemos una amplia variedad de dulces y
                    sabores
                    para que disfrutes en cualquier momento. Desde caramelos suaves hasta chocolates cremosos,
                    encontrarás
                    algo que te encantará. ¡Visítanos y endulza tu día con nuestras golosinas!</p>
            </div>

            <div class="container-cards scroll-perso">

                <?php if ($producto): ?>
                    <?php foreach ($producto as $prod): ?>
                        <?php $categoria = $prod['categoria_id']; ?>
                        <?php $imagen = $prod['imagen'] ?>
                        <?php if ($categoria == 4 && ($prod['eliminado'] != 'SI')): ?>
                            <div class="card">
                                <figure>
                                    <img src="<?= base_url() ?>/assets/uploads/<?= $imagen ?>" alt="imagen-producto">
                                </figure>
                                <h5>
                                    <?php echo $prod['nombre_prod'] ?>
                                </h5>
                                <div class="card_precio"> <span>
                                        <?php echo '$' . $prod['precio'] ?>
                                    </span> <span>2do al 50%</span> </div>
                                <div class="product__buttons--container">
                                    <button class="heart primary-button">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>

                                    <?php
                                    helper('form');
                                    if (($prod['stock'] > 0)) {
                                        // Envia los datos en forma de formulario para agregar al carrito
                                        echo form_open('carrito_agrega');
                                        echo form_hidden('carrito_agrega');
                                        echo form_hidden('id', $prod['id']);

                                        echo form_hidden('precio_vta', $prod['precio_vta']);
                                        echo form_hidden('nombre_prod', $prod['nombre_prod']);
                                    ?>
                                        <div>
                                            <?php
                                            $btnClass = 'cart primary-button';
                                            $btnValue = '<i class="fas fa-shopping-cart"></i>';
                                            $btnName = 'action';

                                            echo '<button type="submit" class="' . $btnClass . '" name="' . $btnName . '">' . $btnValue . '</button>';
                                            echo form_close();
                                            ?>
                                        </div>
                                    <?php }
                                
                                    ?>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>

            </div>

        </section>

    </section>

    <section class="main-section-promos" id="o_especial">
        <aside class="main-section-aside aside_1">
            <figure class="aside-box"><img src="assets/img/promo_1.jpg" alt=""></figure>
            <figure class="aside-box"><img src="assets/img/promo_2.jpg" alt=""></figure>
            <figure class="aside-box"><img src="assets/img/promo_5.jpg" alt=""></figure>
        </aside>

        <section class="main-section-promos-section">
            <h5>Almacen</h5>
            <div class="scroll-perso">

                <?php if ($producto): ?>
                    <?php foreach ($producto as $prod): ?>
                        <?php $categoria = $prod['categoria_id']; ?>
                        <?php $imagen = $prod['imagen'] ?>
                        <?php if ($categoria == 2 && ($prod['eliminado'] != 'SI')): ?>

                            <div class="box">
                                <figure class="box_figure">
                                    <img class="box_figure-img" src="<?= base_url() ?>/assets/uploads/<?= $imagen ?>"
                                        alt="imagen-producto">
                                </figure>
                                <h5 class="box_h5">
                                    <?php echo $prod['nombre_prod'] ?>
                                </h5>
                                <span class="box_span">
                                    <?php echo '$' . $prod['precio'] ?>
                                </span>
                                <div class="product__buttons--container">
                                    <button class="heart primary-button">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    
                                    <?php
                                    helper('form');
                                    if (($prod['stock'] > 0)) {
                                        // Envia los datos en forma de formulario para agregar al carrito
                                        echo form_open('carrito_agrega');
                                        echo form_hidden('carrito_agrega');
                                        echo form_hidden('id', $prod['id']);

                                        echo form_hidden('precio_vta', $prod['precio_vta']);
                                        echo form_hidden('nombre_prod', $prod['nombre_prod']);
                                    ?>
                                        <div>
                                            <?php
                                            $btnClass = 'cart primary-button';
                                            $btnValue = '<i class="fas fa-shopping-cart"></i>';
                                            $btnName = 'action';

                                            echo '<button type="submit" class="' . $btnClass . '" name="' . $btnName . '">' . $btnValue . '</button>';
                                            echo form_close();
                                            ?>
                                        </div>
                                    <?php }
                                
                                    ?>
                                </div>
                            </div>

                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>

            </div>

            <h5>Lácteos</h5>
            <div class="scroll-perso">
                <?php if ($producto): ?>
                    <?php foreach ($producto as $prod): ?>
                        <?php $categoria = $prod['categoria_id']; ?>
                        <?php $imagen = $prod['imagen'] ?>
                        <?php if ($categoria == 3 && ($prod['eliminado'] != 'SI')): ?>

                            <div class="box">
                                <figure class="box_figure">
                                    <img class="box_figure-img" src="<?= base_url() ?>/assets/uploads/<?= $imagen ?>"
                                        alt="imagen-producto">
                                </figure>
                                <h5 class="box_h5">
                                    <?php echo $prod['nombre_prod'] ?>
                                </h5>
                                <span class="box_span">
                                    <?php echo '$' . $prod['precio'] ?>
                                </span>
                                <div class="product__buttons--container">
                                    <button class="heart primary-button">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    
                                    <?php
                                    helper('form');
                                    if (($prod['stock'] > 0)) {
                                        // Envia los datos en forma de formulario para agregar al carrito
                                        echo form_open('carrito_agrega');
                                        echo form_hidden('carrito_agrega');
                                        echo form_hidden('id', $prod['id']);

                                        echo form_hidden('precio_vta', $prod['precio_vta']);
                                        echo form_hidden('nombre_prod', $prod['nombre_prod']);
                                    ?>
                                        <div>
                                            <?php
                                            $btnClass = 'cart primary-button';
                                            $btnValue = '<i class="fas fa-shopping-cart"></i>';
                                            $btnName = 'action';

                                            echo '<button type="submit" class="' . $btnClass . '" name="' . $btnName . '">' . $btnValue . '</button>';
                                            echo form_close();
                                            ?>
                                        </div>
                                    <?php }
                                
                                    ?>
                                </div>
                            </div>

                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
            </div>

        </section>
    </section>

    <h3 class="h3-encabezados">Pensamos en vos</h3>

    <section class="main-section-sucursales scroll-perso">
        <div class="sucursales-box">
            <figure>
                <img src="assets\img\end\1-buenos_datos.webp" alt="">
            </figure>
            <p class="sucursales-box_firs_child"><b>Los buenos datos, entre clientes se comparten</b></p>
            <p class="sucursales-box_second_child">Ahora en Juanse podés calificar los productos en juanse.com.ar y
                luego ver esa valoración en los productos de nuestras sucursales para una mejor elección en tu compra.
            </p>
            <!-- <span>Tucuman 1198 <a target="_blank" class="button" href="https://goo.gl/maps/jd2ZxbhUhyZMgij1A"><i
                        class="fa-solid fa-paper-plane"></i></a></span> -->
        </div>

        <div class="sucursales-box">
            <figure>
                <img src="assets\img\end\2-conservar.webp" alt="">
            </figure>
            <p class="sucursales-box_firs_child"><b>Conservamos tu carrito</b></p>
            <p class="sucursales-box_second_child">Ahora podés usar todos los dispositivos que quieras para hacer tu
                compra sin perder tu carrito de compras cuando pasas de uno a otro.</p>
            <!-- <span>Irigoyen 2184 <a target="_blank" class="button" href="https://goo.gl/maps/dc2wYebnzXRRrLBC6"><i
                        class="fa-solid fa-paper-plane"></i></a></span> -->
        </div>

        <div class="sucursales-box">
            <figure>
                <img src="assets\img\end\3-oportunidad.webp" alt="">
            </figure>
            <p class="sucursales-box_firs_child"><b>¡Aprovecha!</b></p>
            <p class="sucursales-box_second_child">Estas son nuestras <b>Oportunidades</b> ¡Hasta agotar stock!</p>
            <!-- <span>Don Bosco 1303 <a target="_blank" class="button" href="https://goo.gl/maps/gjTYzbkkpxRPHuZ99"><i
                        class="fa-solid fa-paper-plane"></i></a></span> -->
        </div>

        <div class="sucursales-box">
            <figure>
                <img src="assets\img\end\4-ahorra.webp" alt="">
            </figure>
            <p class="sucursales-box_firs_child"><b>Ahorrá tiempo y comprá más fácil</b></p>
            <p class="sucursales-box_second_child">Marcá tus productos como favoritos para encontrarlos más fácilmente
                en tu próxima compra.</p>
            <!-- <span>9 de Julio 2102 <a target="_blank" class="button" href="https://goo.gl/maps/LmonPCoZbuk3Yscr7"><i
                        class="fa-solid fa-paper-plane"></i></a></span> -->
        </div>

    </section>

</main>