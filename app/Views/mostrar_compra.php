<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Compras
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="row bloque">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="sign pt-2 text-center">Historial de compras</h3>
                </div>
                <div class="form-group">
                    <div class="pr-5 pl-5">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($compra as $compra) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $compra["fecha"]; ?></th>
                                        <td><?php echo $compra["nombre"]; ?></td>
                                        <td><?php echo $compra["cantidad"]; ?></td>
                                        <td><?php echo $compra["total"]; ?></td>
                                        <td><a href=""><i class="fa fa-eye"></i></a></td>
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