<main>
    <section class="section-vista">
        <h1 class="section-vista_titulo">¡Bienvenidos!</h1>

        <div class="section-vista_wave">
            <img src="assets\img\waves\wave-principal.svg" alt="wave-img">
        </div>
    </section>

    <div class="container">

        <h2 class="container-h2">Nuevos lanzamientos</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <div class="col">
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

<!--             <div class="col">
                <div class="container-card">
                    <figure>
                        <img src="assets\img\palos\cobra_king.png" class="card-img-top" alt="...">
                    </figure>

                    <div class="card-body">
                      <h5 class="card-title">Drive King Cobra</h5>
                      <p class="card-text">U$D270,00</p>
                      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                        Add to Cart
                    </button>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="container-card">
                    <figure>
                        <img src="assets\img\palos\Ping_g425.png" class="card-img-top" alt="...">
                    </figure>

                    <div class="card-body">
                      <h5 class="card-title">Drive Ping G425</h5>
                      <p class="card-text">U$D370,00</p>
                      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                        Add to Cart
                    </button>
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="container-card">
                    <figure>
                        <img src="assets\img\palos\taylormadeS2.png" class="card-img-top" alt="...">
                    </figure>

                    <div class="card-body">
                      <h5 class="card-title">Drive TaylorMade Stealth 2</h5>
                      <p class="card-text">U$D 550,00</p>
                      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                        Add to Cart
                    </button>
                    </div>
                  </div>
            </div>

            
            <div class="col"> -->
                <div class="container-card">
                    <figure>
                        <img src="assets\img\palos\titleist_tsi3.png" class="card-img-top" alt="...">
                    </figure>

                    <div class="card-body">
                      <h5 class="card-title">Drive Titleist TSI3</h5>
                      <p class="card-text">U$D450,00</p>
                      <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                        Add to Cart
                    </button>
                    </div>
                  </div>
            </div>


            
        </div>
    </div>

    <section class="section-carrusel">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active d-item">
                    <img src="assets/img/carrusel_conjunto.png" class="d-block w-100 d-img" alt="">
                </div>
                <div class="carousel-item d-item">
                    <img src="assets/img/carrusel_trade.png" class="d-block w-100 d-img" alt="">
                </div>
                <div class="carousel-item d-item">
                    <img src="assets/img/carrusel_playoff.png" class="d-block w-100 d-img" alt="">
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

    <section class="section-marcas">
        <div class="container-titulo">
            <figure>
                <img src="assets\img\svg\Golf_Monochromatic.svg" alt="human-golf">
            </figure>

            <p>¡Encontra tu marca! disfruta de tus marcas preferidas.</p>
        </div>

        <div class="container-logos">
            <div class="logos">
                <div class="logo"><img src="assets\img\logos-2\logo-1.jpg" alt=""></div>
                <div class="logo"><img src="assets\img\logos-2\logo-2.jpg" alt=""></div>
                <div class="logo"><img src="assets\img\logos-2\logo-3.jpg" alt=""></div>
            </div>

            <div class="logos">
                <div class="logo"><img src="assets\img\logos-2\logo-4.jpg" alt=""></div>
                <div class="logo"><img src="assets\img\logos-2\logo-5.jpg" alt=""></div>
                <div class="logo"><img src="assets\img\logos-2\logo-6.jpg" alt=""></div>
            </div>
        </div>
    </section>

</main>