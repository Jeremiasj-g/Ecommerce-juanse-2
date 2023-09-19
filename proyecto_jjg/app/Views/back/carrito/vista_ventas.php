<section class="container container-table-productos mt-3 mb-3">

    <?php $session = session();
        $nombre = $session->get('nombre');
        $perfil = $session->get('perfil_id');
    ?>

    <h2 <?php if ($perfil == '2') echo 'style="border-color: #023e8a; margin-bottom: 65px;"'; ?> style="margin-bottom: 65px;"><?php echo ($perfil == 1) ? 'Ventas' : 'Mis compras'; ?></h2>
    
    <?php if (!empty($ventaDetalle)): ?>
        <div class="mt-3">
            <div class="table-responsive">
                <table class="stripe" id="ventas-compras">
                    <thead>
                        <tr>
                            <th>ID Venta</th>
                            <th>Total Venta</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php foreach ($ventaDetalle as $venta): ?>
                            <tr>
                                <td><?= $venta['id'] ?></td>
                                <td><?= "$" . $venta['total_venta'] ?></td>
                                <td><?= $venta['fecha'] ?></td>
                                <td>
                                    <a <?php if ($perfil == '1') echo 'class="btn btn-dark btn-opciones"'; ?> href="<?= base_url('factura/' . $venta['id']) ?>" class="btn btn-primary btn-opciones">Ver Factura</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <p>No se encontraron ventas.</p>
    <?php endif; ?>
</section>