<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
?>
<main>

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

            <div class="product">
                <figure>
                    <img src="assets/img/coca_vidrio.jpg" alt="Coca img">
                </figure>
                <h5>Coca 1.5l Ret.</h5>
                <span>$350,00</span>
                <p>Bebida rerescante de cola</p>
                <div class="product__buttons--container">
                    <button class="heart primary-button">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button class="cart primary-button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>

            <div class="product">
                <figure>
                    <img src="assets/img/sprite_2l.PNG" alt="Sprite img">
                </figure>
                <h5>Sprite 2l Ret.</h5>
                <span>$300,00</span>
                <p>Bebida refrescante de lima-limon</p>
                <div class="product__buttons--container">
                    <button class="heart primary-button">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button class="cart primary-button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>

            <div class="product">
                <figure>
                    <img src="assets/img/fanta_2l.PNG" alt="Fanta img">
                </figure>
                <h5>Fanta 2l Ret.</h5>
                <span>$300,00</span>
                <p>Bebida refrescante de naranja</p>
                <div class="product__buttons--container">
                    <button class="heart primary-button">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button class="cart primary-button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>

            <div class="product">
                <figure>
                    <img src="assets/img/pepsi_1.5.PNG" alt="pepsi img">
                </figure>
                <h5>Pepsi 1.5l.</h5>
                <span>$380,00</span>
                <p>Bebida refrescante de cola</p>
                <div class="product__buttons--container">
                    <button class="heart primary-button">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button class="cart primary-button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>
            
            <div class="product">
                <figure>
                    <img src="assets/img/mirinda_pomelo_2,25.PNG" alt="mirinda img">
                </figure>
                <h5>Mirinda 2,25l Pomelo.</h5>
                <span>$560,00</span>
                <p>Bebida refrescante de pomelo</p>
                <div class="product__buttons--container">
                    <button class="heart primary-button">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button class="cart primary-button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- <div class="div-nav-container">
            <nav class="main-nav">
                <ul>
                    <li><a href="#h3-o-especiales">Promos</a></li>
                    <li><a href="#h3-sucursales">Sucursales</a></li>
                    <li><a href="">LALA</a></li>
                </ul>
            </nav>
        </div> -->



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
                    <source class="img-promo" srcset="assets\img\ofertas-tarjeta-mobile.jpg"
                        media="(max-width: 850px)">
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


    <!--     <picture>
        <source class="img-promo" srcset="assets/img/section-oferta-mobile.png" media="(max-width: 850px)">
        <img class="img-promo" src="assets/img/section-oferta.png" alt="" width="100%">
    </picture> -->

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
                <div class="card">
                    <figure>
                        <img src="assets\img\novedades-ofertas\oreo.PNG" alt="Coca img">
                    </figure>
                    <h5>Galletitas Dulces Rellenas Con Crema Oreo 118g.</h5>
                    <div class="card_precio"> <span>$320,00</span> <span>2do al 50%</span> </div>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="card">
                    <figure>
                        <img src="assets\img\novedades-ofertas\block.PNG" alt="Coca img">
                    </figure>
                    <h5>Chocolate Cofler Block Con Leche 300 Gr.</h5>
                    <div class="card_precio"><span>$1.300,00</span> <span>2do al 50%</span></div>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="card">
                    <figure>
                        <img src="assets\img\novedades-ofertas\aguila.PNG" alt="Coca img">
                    </figure>
                    <h5>Chocolate Aguila Para Taza 150 Gr.</h5>
                    <div class="card_precio"><span>$350,00</span> <span>2do al 50%</span></div>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>


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
                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/playadito.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Yerba Mate Playadito Suave X1kg</h5>
                    <span class="box_span">$970,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/criollitas.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Galletitas De Agua Criollitas Originales 300 Gr</h5>
                    <span class="box_span">$245,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/cafe.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Café La Planta De Café Molido 500 Gr</h5>
                    <span class="box_span">$1540,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/nescafe.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Nescafe Dolca Suave Doypack X170gr</h5>
                    <span class="box_span">$1310,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>


                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/queso.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Queso Cremon Cremoso La Serenisima 1Kg</h5>
                    <span class="box_span">900,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>

            <h5>Lácteos</h5>
            <div class="scroll-perso">
                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/leche-descremada.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Leche Uat Descremada La Serenisima Botella 1</h5>
                    <span class="box_span">$365,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/leche-descremada2.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Leche Descremada La Serenisima Zero Lactosa 1l</h5>
                    <span class="box_span">$350,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/leche-entera.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Leche Uat Entera Ls 3carton 1l</h5>
                    <span class="box_span">$250,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/cindor.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Leche Chocolatada Cindor 1Lt</h5>
                    <span class="box_span">$620,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>


                <div class="box">
                    <figure class="box_figure">
                        <img class="box_figure-img" src="assets/img/almacen/lechetregar.PNG" alt="Coca img">
                    </figure>
                    <h5 class="box_h5">Leche Entera Uat Tregar 1 L</h5>
                    <span class="box_span">230,00</span>
                    <div class="product__buttons--container">
                        <button class="heart primary-button">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart primary-button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                </div>
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
            <p class="sucursales-box_second_child">Ahora en Juanse podés calificar los productos en juanse.com.ar y luego ver esa valoración en los productos de nuestras sucursales para una mejor elección en tu compra.</p>
            <!-- <span>Tucuman 1198 <a target="_blank" class="button" href="https://goo.gl/maps/jd2ZxbhUhyZMgij1A"><i
                        class="fa-solid fa-paper-plane"></i></a></span> -->
        </div>

        <div class="sucursales-box">
            <figure>
                <img src="assets\img\end\2-conservar.webp" alt="">
            </figure>
            <p class="sucursales-box_firs_child"><b>Conservamos tu carrito</b></p>
            <p class="sucursales-box_second_child">Ahora podés usar todos los dispositivos que quieras para hacer tu compra sin perder tu carrito de compras cuando pasas de uno a otro.</p>
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
            <p class="sucursales-box_second_child">Marcá tus productos como favoritos para encontrarlos más fácilmente en tu próxima compra.</p>
            <!-- <span>9 de Julio 2102 <a target="_blank" class="button" href="https://goo.gl/maps/LmonPCoZbuk3Yscr7"><i
                        class="fa-solid fa-paper-plane"></i></a></span> -->
        </div>

    </section>

</main>