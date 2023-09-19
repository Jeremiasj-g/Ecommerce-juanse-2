<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxikiosco Juanse</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe       +nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/tablet.css" media="screen and (max-width: 1035px)">
    <link rel="stylesheet" href="assets/css/mobile.css" media="screen and (max-width: 820px)">
</head>

<body>
    <header>
        <div class="header-div">
            <a href="#">JUANSE</a>
            <!-- <figure class="header-figure">
                <img src="/img/logo_juanse_2.PNG" alt="Logo Juanse">
            </figure> -->

            <input type="text" class="header-input" placeholder="¿Qué esta buscando?">
            <i class="header-div-search fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-bars"></i>
        </div>

        <nav class="header-nav">
            <ul>
                <li><a href=""><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="<?php echo base_url ('contacto') ?>"><i class="fa-solid fa-envelope"></i> Contacto</a></li>
                <li><a href=""><i class="fa-solid fa-hand-holding-dollar"></i>Comercialización</a></li>
                <li><a href=""><i class="fa-solid fa-file-lines"></i> Términos y Usos</a></li>
                <li><a href=""><i class="fa-solid fa-users"></i> Quienes Somos</a></li>
                <!-- <li><a href=""><i class="fa-solid fa-bars"></i></a></li> -->
            </ul>
        </nav>
    </header>

    <main>

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
                        <img src="assets/img/carrusel_brahma.png" class="d-block w-100 d-img" alt="brahma img">
                    </div>
                    <div class="carousel-item d-item">
                        <img src="assets/img/carrusel_quilmes.png" class="d-block w-100 d-img" alt="brahma img">
                    </div>
                    <div class="carousel-item d-item">
                        <img src="assets/img/carrusel_bud.png" class="d-block w-100 d-img" alt="brahma img">
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

        <h2>Productos destacados</h2>

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
                        <button class="heart">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart">
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
                        <button class="heart">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart">
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
                        <button class="heart">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart">
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
                        <button class="heart">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart">
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
                        <button class="heart">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <button class="cart">
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

        


        <h3 id="h3-o-especiales">Promos especiales</h3>
        <picture>
            <source class="img-promo" srcset="assets/img/section-oferta-mobile.png" media="(max-width: 850px)">
            <img class="img-promo" src="assets/img/section-oferta.png" alt="" width="100%">
        </picture>

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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </section>

            <section class="carrusel-2-novedades">
                <p>¡50% de descuento en la segunda unidad!</p>

                <p>Una vez a la semana llevando dos productos iguales tenes acceso al descuento.</p>
                <p>
                   ¡Satisface tu antojo con nuestras deliciosas golosinas! Tenemos una amplia    variedad de dulces y sabores para que disfrutes en cualquier momento. Desde     caramelos suaves hasta chocolates cremosos, encontrarás algo que te encantará. ¡Visítanos y endulza tu día con nuestras golosinas!</p>
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
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
                            <button class="heart">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>

                
            </section>
        </section>

        

        <h3 id="h3-sucursales">Sucursales</h3>

        <section class="main-section-sucursales scroll-perso">
            <div class="sucursales-box">
                <figure>
                    <img src="assets/img/Juanse-1.PNG" alt="">
                </figure>
                <span>Tucuman 1198 <a target="_blank" class="button" href="https://goo.gl/maps/jd2ZxbhUhyZMgij1A"><i class="fa-solid fa-paper-plane"></i></a></span>
            </div>

            <div class="sucursales-box">
                <figure>
                    <img src="assets/img/Juanse-2.PNG" alt="">
                </figure>
                <span>Irigoyen 2184 <a target="_blank" class="button" href="https://goo.gl/maps/dc2wYebnzXRRrLBC6"><i class="fa-solid fa-paper-plane"></i></a></span>
            </div>

            <div class="sucursales-box">
                <figure>
                    <img src="assets/img/Juanse-3.PNG" alt="">
                </figure>
                <span>Don Bosco 1303 <a target="_blank" class="button" href="https://goo.gl/maps/gjTYzbkkpxRPHuZ99"><i class="fa-solid fa-paper-plane"></i></a></span>
            </div>

            <div class="sucursales-box">
                <figure>
                    <img src="assets/img/Juanse-4.PNG" alt="">
                </figure>
                <span>9 de Julio 2102 <a target="_blank" class="button" href="https://goo.gl/maps/LmonPCoZbuk3Yscr7"><i class="fa-solid fa-paper-plane"></i></a></span>
            </div>

        </section>

    </main>





    <footer class="footer">
        <p>Copyright 2023 ©Juanse.</p>

        <div class="footer-social-container">
            <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span>
            <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
            <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/68add04b88.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>