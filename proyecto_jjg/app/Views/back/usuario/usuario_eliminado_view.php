<section class="container container-table-productos mt-3 mb-3">
    <h2>Usuarios dados de baja</h2>

    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('usuarios') ?>" class="btn btn-success btn-opciones">Activos</a>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>

    <div class="mt-3">
        <div class="table-responsive">
            <table class="stripe" id="users-list" style="margin: 18px 0;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($users): ?>
                        <?php foreach ($users as $us): ?>
                            <?php $eliminado = $us['baja']; ?> 
                            <?php if ($eliminado == 'SI'): ?>

                                <tr>
                                    <td><?php echo $us['id']; ?></td>
                                    <td><?php echo $us['nombre']; ?></td>
                                    <td><?php echo $us['apellido']; ?></td>
                                    <td><?php echo $us['email']; ?></td>
                                    <td><?php echo $us['usuario']; ?></td>


                                    <?php $id = $us['id']; ?>

                                    <td>
                                        <a href="<?php echo base_url('activar-usuario/' .$us['id']); ?>" class="btn btn-primary btn-sm mt-1 btn-opciones" style="margin-right: 10px;">Activar</a>
                                        <a href="<?php echo base_url('bdusuario/' .$us['id']); ?>" class="btn btn-danger btn-sm mt-1 btn-opciones">Borrar definitivo</a>
                                    </td>
                                </tr>

                            <?php endif ?> 
                        <?php endforeach ?>
                    <?php endif ?>

                </tbody>
            </table>
        </div>
    </div>

</section>