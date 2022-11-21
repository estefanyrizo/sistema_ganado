<?= $this->extend('Front/layout/formulario') ?>

<?= $this->section('title') ?>
Cliente
<?= $this->endSection('title') ?>
<?= $this->section('formulario') ?>
<div class="form-group">
    <div class="inputs">
        <?= form_open('cliente') ?>
        <div class="row m-3">
            <div class="col-4 mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan Perez" required>
            </div>
            <div class="col-4 mb-3">
                <label for="cedula">Cedula</label>
                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="000-000000-0000A" required>
            </div>
            <div class="col-4 mb-3">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="78962541" required>
            </div>
            <div class="col-12 mb-1">
            <label for="direccion">Direcci&oacute;n</label>
                <input class="form-control mb-3" type="text" placeholder="Alla donde vivia" name="direccion" id="direccion">
            </div>
            <div class="col-12 form-group" align="center">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
            
        </div>
        <?= form_close() ?>

    </div>

    <?= $this->endSection('formulario') ?>