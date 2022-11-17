<?= $this->extend('Compra/plantilla') ?>

<?= $this->section('title') ?>
Proovedor
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<div class="container-fluid p-5">
    <?= form_open('compra/proveedor') ?>
    <label for="proveedor">Proveedor</label>
    <select class="form-control" id="proveedor" name="proveedor" required>
        <option disabled="" selected="" value="">Seleccione el proveedor <i class="nc-icon nc-zoom-split"></i></option>
        <?php
        foreach ($proveedor as $proveedor) : ?>
            <option value="<?php echo $proveedor["id_proveedor"]; ?>"><?php echo $proveedor["nombre"]; ?> </option>
        <?php endforeach; ?>
    </select>

</div>
<div class="form-group" align="center">
    <button class="btn btn-primary" type="submit">Siguiente</button>
</div>
<?= form_close() ?>
</div>
<?= $this->endSection('formulario') ?>