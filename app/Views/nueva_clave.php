<?=$this->extend('Front/layout/main')?>

<?=$this->section('title')?>
Actualizar contraseña
<?=$this->endSection('title')?>
<?=$this->section('content')?>
<div class="content">
    <div class="row mi-cuenta">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <form action="/actualizarclave" method="post">
                        <h3 class="sign pt-2 pb-2" align="center">Actualizar clave</h3>

                        <div class="form-group">

                            <div class="inputs">
                                <input class="form-control password text-center mb-3" align="center" name="last_password" placeholder="Contraseña anterior" type="password" required />

                                <input class="form-control password text-center mb-3" align="center" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,16}$" name="newpassword" placeholder="Nueva contraseña" type="password" required />
                                <small id="emailHelp" class="form-text text-muted text-center">Al menos una mayuscula, minuscula,
                                    numero y entre 8-16 caracteres.</small>
                                <br> 
                                <input class="form-control password text-center mb-4" align="center" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,16}$" name="confirmation" placeholder="Repetir contraseña" type="password" required />
                            </div>
                        </div>
                        <div class="frm_btn">
                            <button class="btn btn-primary" type="submit">Actualizar contraseña</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection('content')?>