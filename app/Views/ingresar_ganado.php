<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Ingresar ganado
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="row ganado">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="sign pt-2 pb-2 text-center">Datos del animal</h3>
                </div>
                <div class="form-group">
                    <div class="inputs">
                    <?= form_open('ganado') ?>
                    <div class="row m-3">
                                <div class="col-6 mb-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Palomo" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="raza">Raza</label>
                                    <select class="form-control" id="raza" name="raza"required>
                                        <option disabled="" selected="" value="">Seleccione un elemento</option>
                                        <?php
                                        foreach ($raza as $raza) : ?>
                                            <option value="<?php echo $raza["id_raza"];?>"><?php echo $raza["raza"];?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                                </div>
                                <div class="col-3 mb-3">
                                    <label for="codigo">Codigo de chapa</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="1506" required>
                                </div>
                                <div class="col-3 mb-3">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" id="color" name="color" placeholder="Pinto" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="tamaño">Tamaño</label>
                                    <input type="text" class="form-control" id="tamaño" name="tamaño" placeholder="100" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="peso">Peso</label>
                                    <input type="text" class="form-control" id="peso" name="peso" placeholder="250" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card">
                                        <img id="img-preview">
                                        <label for="file">Selecionar foto: <i class="tim-icons icon-upload"></i></label>
                                        <input class="form-control mb-4" type="file" name="portada" id="img-uploader" accept="image/*">
                                        <progress id="img-upload-bar" value="0" max="100" style="width: 100%"></progress>
                                        <input id="url" name="url" hidden>
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <input class="form-control mb-3" type="text" placeholder="Comentario" name="comentario">
                                </div>
                                <div class="col-12 form-group" align="center" >
                                <button class="btn btn-primary"  type="submit">Ingresar</button>
                                </div>
                            </div>
                            <?= form_close() ?>

                    </div>

                </div>
            </div>

            <?= $this->endSection('content') ?>