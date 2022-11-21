<?= $this->extend('Venta/plantilla') ?>

<?= $this->section('title') ?>
Cliente
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<div class="container-fluid p-5">
    <?= form_open('venta/cliente') ?>
    <label for="cliente">Cliente</label>
    <select class="form-control" id="cliente" name="cliente" required>
        <option disabled="" selected="" value="">Seleccione el cliente <i class="nc-icon nc-zoom-split"></i></option>
        <?php
        foreach ($cliente as $cliente) : ?>
            <option value="<?php echo $cliente["id_cliente"]; ?>"><?php echo $cliente["nombre"]; ?> </option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group" align="center">
    <button class="btn btn-primary" type="submit">Siguiente</button>
</div>
<?= form_close() ?>
</div>
<?= $this->endSection('formulario') ?>