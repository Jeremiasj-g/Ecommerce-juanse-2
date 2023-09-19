
  <?php 
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
  ?>

<header <?php if ($perfil == '1') echo 'class="black-header"'; ?> >

  <div style="position: absolute; top: 115%; left: 50%; transform: translateX(-50%); z-index: 1;">
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

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">

      <!-- <a class="navbar-brand navbar-brand__logoheader" href="<?php echo base_url('/') ?>"><img src="<?php echo base_url('assets/img/Juanse-logo.PNG')?>" alt="logo-juanse"></a> -->
      <a class="navbar-brand" href="<?php echo base_url('/') ?>">JUANSE</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- ------------------------------- NAVBAR PARA ADMINISTRADOR  ------------------------------- -->

      <?php if ($perfil == '1') { ?>

        <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('/') ?>"><i class="nav-icon fa-solid fa-house"></i>Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('usuarios') ?>"><i class="nav-icon fa-solid fa-users"></i>Crud usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('crear') ?>"><i class="nav-icon fas fa-plus"></i>Crud productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('consulta_contactos') ?>"><i class="nav-icon fas fa-comment"></i>Consultas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('ventas') ?>"><i class="nav-icon fa-solid fa-arrow-trend-up"></i>Ventas</a></li>
            <li>
          </ul>
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="nav-icon fas fa-smile"></i><?php echo "Bienvenido" . " " . $nombre?></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('logout'); ?>" tabindex="-1" aria-disabled="true"><i class="nav-icon fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a>
            </li>
          </ul>
        </div>
        


      <!-- ------------------------------- NAVBAR PARA CLIENTES  ------------------------------- -->

      <?php } else if ($perfil == '2') { ?>

      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/') ?>"><i class="nav-icon fa-solid fa-sheet-plastic"></i>Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('contacto') ?>"><i class="nav-icon fa-solid fa-envelope"></i>Contacto</a>
          </li>

          <div class="dropdown dropdown-perso dropdown-perso2 nav-item">
            <button class="btn dropdown-toggle btn-perso" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mas</button>

            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('comercializacion') ?>"><i class="nav-icon fa-solid fa-hand-holding-dollar"></i>Comercialización</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('terminosyusos') ?>"><i class="nav-icon fa-solid fa-file-lines"></i>Términos y Usos</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('quienessomos') ?>"><i class="nav-icon fa-solid fa-users"></i>Quienes Somos</a>
              </li>
            </ul>
          </div>

        </ul>
        
        
        <form class="d-flex align-items-center">
          
          <input class="form-control me-3" type="search" placeholder="Buscar" aria-label="Search" style="border-radius: 16px;">
          <button class="btn btn-outline-success" type="submit" style="border: 1.99px solid white;">Buscar</button>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?php echo base_url('assets/img/perfil-de-usuario.webp')?>" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="dropdownUser1" style="top: 150%;">
              <li>
                <a class="dropdown-item text-small_bienvenida" href="#"><?php echo "¡Bienvenido " . $nombre . "!" ?></a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo base_url('ventas') ?>"><i class="nav-icon fa-solid fa-user"></i>Mis compras</a></li>
              <li>
                <a class="dropdown-item" href="<?php echo base_url('muestro') ?>"><i class="nav-icon fa-solid fa-cart-arrow-down"></i>Carrito</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="<?php echo base_url('logout'); ?>" tabindex="-1" aria-disabled="true"><i class="nav-icon fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a>
              </li>
            </ul>
          </div>

        </form>

      </div>

      <?php } else { ?>

      <!-- ------------------------------- NAVBAR PARA NO LOGEADOS  ------------------------------- -->

      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/') ?>"><i class="nav-icon fa-solid fa-house"></i>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('contacto') ?>"><i class="nav-icon fa-solid fa-envelope"></i>Contacto</a>
          </li>

          <div class="dropdown dropdown-perso dropdown-perso2 nav-item">
            <button class="btn dropdown-toggle btn-perso" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mas</button>

            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('comercializacion') ?>"><i class="nav-icon fa-solid fa-hand-holding-dollar"></i>Comercialización</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('terminosyusos') ?>"><i class="nav-icon fa-solid fa-file-lines"></i>Términos y Usos</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('quienessomos') ?>"><i class="nav-icon fa-solid fa-users"></i>Quienes Somos</a>
              </li>
            </ul>
          </div>

        </ul>

        <form class="d-flex">
          <input class="form-control me-3" type="search" placeholder="Buscar" aria-label="Search" style="border-radius: 16px;">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>


        <div class="dropdown dropdown-perso nav-item">
          <button class="btn dropdown-toggle btn-perso" type="button" data-bs-toggle="dropdown" aria-expanded="false">¡Entra!</button>

          <ul class="dropdown-menu dropdown-menu-end dropdown-entra" style="top: 126%;">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('registro') ?>"><i class="nav-icon fas fa-sign-in-alt"></i>Sign up</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login') ?>"><i class="nav-icon fas fa-key"></i>Login</a>
            </li>
          </ul>
        </div>

        <?php } ?>

      </div>
    </div>
  </nav>
  <!-- ------------------------------- NAVBAR PARA NO LOGEADOS ------------------------------- -->

</header>






<!-- <header>
        <div class="header-div">
            <a href="<?php echo base_url('/') ?>">JUANSE</a>

            <input type="text" class="header-input" placeholder="¿Qué esta buscando?">
            <button type="submit" class="header-div-search fa-solid fa-magnifying-glass"></button>
            <button class="header-div-bars fa-solid fa-bars"></button>
        </div>

        <nav class="header-nav">
            <ul>
                <li><a href="<?php echo base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="<?php echo base_url('contacto') ?>"><i class="fa-solid fa-envelope"></i> Contacto</a></li>
                <li><a href="<?php echo base_url('comercializacion') ?>"><i class="fa-solid fa-hand-holding-dollar"></i>Comercialización</a></li>
                <li><a href="<?php echo base_url('terminosyusos') ?>"><i class="fa-solid fa-file-lines"></i> Términos y Usos</a></li>
                <li><a href="<?php echo base_url('quienessomos') ?>"><i class="fa-solid fa-users"></i> Quienes Somos</a></li>
            </ul>
        </nav>
</header> -->