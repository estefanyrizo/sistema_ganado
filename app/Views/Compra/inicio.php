<?= $this->extend('Compra/plantilla') ?>

<?= $this->section('title') ?>
Nueva compra
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<?= form_open('compra/inicio') ?>
<div class="container-fluid p-5">
    <label for="tipoCompra">Tipo de compra</label>
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