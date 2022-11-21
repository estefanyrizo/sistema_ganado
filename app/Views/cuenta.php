<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Cuenta
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
  <div class="row mi-cuenta">
    <div class="col-md-8">
      <div class="card card-user">
        <div class="card-header pb-5">
          <h3 class="sign pt-2 pb-2 text-center">Datos de tu cuenta</h3>
        </div>
        <?php
        foreach ($usuario as $usuario) : ?>
          <?= form_open("cuenta/edit") ?>
          <div class="card-body">
            <div class="author">
              <img class="avatar" src="https://i.pinimg.com/originals/58/91/dc/5891dcea19ea2a3fee0bfeb7f01ba8d1.jpg" alt="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" id="img-preview">
              <br>
              <label for="img-uploader"> Editar foto de perfil</label>
              <input type="file" id="img-uploader" accept="image/*" hidden>
              <input name="perfil" id="url" hidden form="update-my-profile">
              <h5 class="title"><?php echo $usuario["usuario"]; ?></h5>
            </div>
            <div class="row">
              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="usuario" value="<?php echo $usuario["usuario"]; ?>" name="usuario" disabled>
                </div>
              </div>

              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Nombre" name="nombre" required>
                </div>
              </div>
              <div class="col-md-4 pl-md-1">
                <div class="form-group">
                  <label>Apellido</label>
                  <input type="text" class="form-control" value="<?php echo $usuario["apellido"]; ?>" name="apellido" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" value="<?php echo $usuario["correo"]; ?>" name="correo" required>
                </div>
              </div>

              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label>Telefono</label>
                  <input type="text" class="form-control" value="<?php echo $usuario["telefono"]; ?>" name="telefono" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Acerca de mi</label>
                  <input type="text" class="form-control" value="<?php echo $usuario["biografia"]; ?>" name="biografia" required>
                </div>
              </div>
            </div>
            <div class="col-12 form-group" align="center">
              <button class="btn btn-primary" type="submit">Guardar cambios</button>
            </div>
            <?= form_close() ?>
          <?php endforeach; ?>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<?= $this->endSection('content') ?>