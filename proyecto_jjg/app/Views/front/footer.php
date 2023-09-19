<!-- Footer -->

<?php 
    $session = session();
    $perfil = $session->get('perfil_id');
?>


<footer class="text-center text-white" <?php if ($perfil == '1') echo 'style="background-color: rgb(39, 39, 39);"'; ?> >
    <!-- DATA TABLE -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>


    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        /* Initialization of datatables */
        $(document).ready(function () {
            $('#users-list').DataTable();
        });
    </script>

    <script>
        /* Initialization of datatables */
        $(document).ready(function () {
            $('#ventas-compras').DataTable();
        });
    </script>

    <script>
        /* Initialization of datatables */
        $(document).ready(function () {
            $('#carro-table').DataTable();
        });

    </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
        function confirmarCompra() {
            Swal.fire({
                title: 'Confirmar compra',
                text: '¿Seguro desea realizar la compra?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, redireccionar a la página de compra
                    window.location = 'carrito-comprar';
                }
            });
        }
    </script>

    <script>
        // Obtén una referencia al elemento de entrada de archivo
        const fileInput = document.getElementById('file-input');
        // Obtén una referencia al elemento de imagen de vista previa
        const previewImage = document.getElementById('preview-image');
    
        // Agrega un controlador de eventos para el cambio de archivo
        fileInput.addEventListener('change', function() {
            // Verifica si se ha seleccionado un archivo
            if (fileInput.files && fileInput.files[0]) {
                // Crea un objeto de URL para la imagen seleccionada
                const imageUrl = URL.createObjectURL(fileInput.files[0]);
            
                // Actualiza la fuente de la imagen de vista previa
                previewImage.src = imageUrl;
            
                // Agrega la clase 'show' para mostrar la imagen con una transición suave
                previewImage.classList.add('show');
            }
        });
    </script>



<!--     <script>
        // Obtiene el elemento de entrada de archivo y el elemento de imagen de vista previa
        const fileInput = document.getElementById('file-input');
        const previewImage = document.getElementById('preview-image');

        // Agrega un evento change al elemento de entrada de archivo
        fileInput.addEventListener('change', function () {
            // Verifica si se seleccionó un archivo
            if (fileInput.files && fileInput.files[0]) {
                // Crea un objeto URL para la imagen seleccionada
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Asigna la URL de la imagen al atributo src del elemento de imagen de vista previa
                    previewImage.src = e.target.result;
                    // Muestra el elemento de imagen de vista previa
                    previewImage.style.display = 'block';
                }
                // Lee el archivo como una URL de datos
                reader.readAsDataURL(fileInput.files[0]);
            }
        });
    </script> -->


    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4 footer-Social_media">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/maxikioscojuanse/" target="_blank" role="button"><i
                    class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="footer-form">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Suscríbete a nuestro boletín de noticias</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label mt-3" for="form5Example21">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                ¡Regístrate en nuestra página web y accede a ofertas exclusivas!
            </p>
        </section>
        <!-- Section: Text -->
        
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->




<!-- <footer class="footer">
        <p>Copyright 2023 ©Juanse.</p>

        <div class="footer-social-container">
            <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span>
            <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
            <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
        </div>
</footer> -->