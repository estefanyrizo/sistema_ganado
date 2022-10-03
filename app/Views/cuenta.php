<?=$this->extend('Front/layout/main')?>

<?=$this->section('title')?>
Cuenta
<?=$this->endSection('title')?>
<?=$this->section('content')?>
<div class="content">
  <div class="row mi-cuenta">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="sign pt-2 pb-2 text-center">Datos de tu cuenta</h3>
        </div>
        
        <div class="card-body">
          <div class="card card-user">
            <div class="card-body">
              <p class="card-text">
              <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                <img class="avatar" src="https://i.pinimg.com/originals/58/91/dc/5891dcea19ea2a3fee0bfeb7f01ba8d1.jpg" id="img-preview">
                <br>
                <label for="img-uploader"> Editar foto de perfil</label>
                <input type="file" id="img-uploader" required accept="image/*" hidden>
                <input name="perfil" id="url" hidden form="update-my-profile">
                <h5 class="title">lperez</h5>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" value="lperez"
                      name="username" disabled>
                  </div>
                </div>

                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" form="update-my-profile" value="Luis"
                      placeholder="Nombre" name="nombre" required>
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" form="update-my-profile" value="Perez"
                      name="apellido" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" form="update-my-profile" value="luisperez@gmail.com"
                      name="correo" required>
                  </div>
                </div>

                <div class="col-md-6 pl-md-1">
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" form="update-my-profile" value="83621351"
                      name="telefono" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Acerca de mi</label>
                    <input type="text" class="form-control" form="update-my-profile" value="Me gusta el pan"
                      name="biografia" required>
                  
                  </div>
                </div>
              </div>
              </form>
            </div>
            <div class="card-footer">
              <form action="#" id="update-my-profile" class="frm_btn" method="post">
                <input type="submit" value="Guardar" class="btn btn-primary" data-toggle="modal" data-target="#GuadarInfo">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?=$this->endSection('content')?>