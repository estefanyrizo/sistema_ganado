<?= $this->extend('Venta/plantilla') ?>

<?= $this->section('title') ?>
Confirmar venta
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<?= form_open('venta/confirmar') ?>
<div class="row m-3">
    <?php
    foreach ($novillo as $novillo) : ?>
        <div class="col-3 mb-3">
            <label for="codigo">Codigo de chapa</label>
            <input type="text" class="form-control" id="codigo" value="<?php echo $novillo["codigo_chapa"]; ?>" name="codigo" readonly>
        </div>
        <div class="col-3 mb-3">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $novillo["peso"]; ?>" readonly>
        </div>
        <div class="col-3 mb-3">
            <label for="tamaño">Tamaño</label>
            <input type="text" class="form-control" id="tamaño" name="tamaño" value="<?php echo $novillo["tamaño"]; ?>" readonly>
        </div>
        <div class="col-3 mb-3">
            <label for="raza">Raza</label>
            <input type="text" class="form-control" id="raza" name="raza" value="<?php echo $novillo["raza"]; ?>" readonly>
        </div>
    <?php endforeach; ?>

    <div class="col-3 mb-3">
        <label for="monto">Monto</label>
        <input type="text" class="form-control" id="monto" name="monto" value="<?php echo $monto; ?>" readonly>
    </div>
    <?php
    foreach ($cliente as $cliente) : ?>
        <div class="col-6 mb-3">
            <label for="cliente">Cliente</label>
            <input type="text" class="form-control" id="cliente" name="cliente" value="<?php echo $cliente["nombre"]; ?>" readonly>
        </div>
    <?php endforeach; ?>
    <div class="col-3 mb-3">
        <label for="rebaja">Rebaja</label>
        <input type="text" class="form-control" id="rebaja" name="rebaja">
    </div>

    <div class="col-12 mb-1">
        <input class="form-control mb-3" type="text" placeholder="Comentario" name="comentario">
    </div>
    <input id="adquicision" name="adquicision" value="2" hidden>
    <div class="col-12 form-group" align="center">
        <button class="btn btn-primary" type="submit">Confirmar compra</button>
    </div>
</div>

<?= form_close() ?>

<?= $this->endSection('formulario') ?>