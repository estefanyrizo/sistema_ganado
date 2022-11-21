<?= $this->extend('Venta/plantilla') ?>

<?= $this->section('title') ?>
Nueva venta
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<?= form_open('venta/inicio') ?>
<div class="container-fluid p-5">
    <label for="tipoCompra">Tipo de venta</label>
    <select class="form-control" id="tipoCompra" name="tipoCompra">
        <option disabled="" selected="" value="">Seleccione un elemento</option>
        <option value="1">Individual</option>
        <option value="2">Lote</option>
    </select>
    <div class="form-group" align="center">
        <button class="btn btn-primary" type="submit">Siguiente</button>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection('formulario') ?>