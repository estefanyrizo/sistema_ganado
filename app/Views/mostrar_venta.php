<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Ventas
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="row bloque">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="sign pt-2 text-center">Historial de ventas</h3>
                </div>
                <div class="form-group">
                    <div class="pr-5 pl-5">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Carta de venta</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($venta as $venta) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $venta["fecha"]; ?></th>
                                        <td><?php echo $venta["nombre"]; ?></td>
                                        <td><?php echo $venta["cantidad"]; ?></td>
                                        <td><?php echo $venta["total"]; ?></td>
                                        <td><a href= <?php echo base_url() ."/venta_pdf/". $venta["id_detalleVenta"];?>><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>