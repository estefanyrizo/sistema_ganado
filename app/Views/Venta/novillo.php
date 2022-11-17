<?= $this->extend('Compra/plantilla') ?>

<?= $this->section('title') ?>
Novillo
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<div class="form-group">
    <div class="inputs">
        <?= form_open('compra/novillo') ?>
        <div class="row m-3">
            <div class="col-4 mb-3">
                <label for="codigo">Codigo de chapa</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="1506" required>
            </div>
            <div class="col-4 mb-3">
                <label for="tamaño">Tamaño</label>
                <input type="text" class="form-control" id="tamaño" name="tamaño" placeholder="100" required>
            </div>
            <div class="col-4 mb-3">
                <label for="peso">Peso</label>
                <input type="text" class="form-control" id="peso" name="peso" placeholder="250" required>
            </div>
        </div>
        <div class="form-group" align="center">
            <button class="btn btn-primary" type="submit">Siguiente</button>
        </div>
        <?= form_close() ?>
    </div>
    <?= $this->endSection('formulario') ?>