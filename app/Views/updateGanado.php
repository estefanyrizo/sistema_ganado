<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Ingresar ganado
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="row ganado">
        <div class="col-md-9">
            <div class="card card-user">
                <div class="card-header pb-5">
                    <h3 class="sign pt-2 pb-2 text-center">Editar datos del animal</h3>
                </div>
                <?php
                    foreach ($ganado as $novillo) : ?>
                <?= form_open("/info_novillo/" . $novillo["id_ganado"]) ?>

                <div class="form-group">
                    <div class="inputs">
                        <div class="card-body">
                           
                                <div class="author">
                                    <img class="avatar" src="https://storage.contextoganadero.com/s3fs-public/styles/noticias_one/public/ganaderia/field_image/2016-08/cebu_macho.jpg?itok=HvmiGh0I" alt="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" id="img-preview">
                                    <br>
                                    <label for="img-uploader"> Editar foto</label>
                                    <input type="file" id="img-uploader" required accept="image/*" hidden>
                                    <input name="perfil" id="url" hidden form="update-my-profile">
                                    <h5 class="title"><?php echo $novillo["nombre"]; ?></h5>
                                </div>
                                <div class="row m-3">
                                    <div class="col-6 mb-3">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value=<?php echo $novillo["nombre"]; ?> required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="raza">Raza</label>
                                        <select class="form-control" id="raza" name="raza" required>
                                            <option disabled="" selected="" value=<?php echo $novillo["raza"]; ?>><?php echo $novillo["raza"]; ?></option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value=<?php echo $novillo["fecha_nacimiento"]; ?> required>
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label for="codigo">Codigo de chapa</label>
                                        <input type="text" class="form-control" id="codigo" name="codigo" value=<?php echo $novillo["codigo_chapa"]; ?> required>
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label for="color">Color</label>
                                        <input type="text" class="form-control" id="color" name="color" value=<?php echo $novillo["color"]; ?> required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="tamaño">Tamaño</label>
                                        <input type="text" class="form-control" id="tamaño" name="tamaño" value=<?php echo $novillo["tamaño"]; ?> required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="peso">Peso</label>
                                        <input type="text" class="form-control" id="peso" name="peso" value=<?php echo $novillo["peso"]; ?> required>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <label for="comentario">Comentario</label>
                                        <input class="form-control mb-3" type="text" name="comentario"  id="comentario" value=<?php echo $novillo["comentario"]; ?>>
                                    </div>
                                    <div class="col-12 form-group" align="center">
                                        <button class="btn btn-primary" type="submit">Guardar cambios</button>
                                    </div>
                                <?= form_close() ?>
                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>
            </div>

            <?= $this->endSection('content') ?>