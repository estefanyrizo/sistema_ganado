<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Cuenta
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<div class="content">
    <div class="row mi-cuenta">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="sign pt-2 text-center">Actualizar clave</h3>
                    <h1 align="center"><span class="fontawesome-lock"></span></h1>
                </div>
                <?= form_open('clave') ?>

                    <div class="form-group">
                        <div class="inputs pr-5 pl-5">
                            <input class="form-control password text-center mb-3" align="center" name="anterior" placeholder="Clave anterior" type="password" required />

                            <input class="form-control password text-center mb-3" align="center" pattern=".{6,}" title="6 o mas caracteres" name="clave" placeholder="Nueva clave" type="password" required />
                            <small id="emailHelp" class="form-text text-muted text-center">Al menos una mayuscula, minuscula,
                                numero y entre 8-16 caracteres.</small>
                            <br>
                            <input class="form-control password text-center mb-4" align="center" pattern=".{6,}" title="6 o mas caracteres"  name="confirmacion" placeholder="Confirmar clave" type="password" required />
                        </div>
                    </div>
                    <div class="form-group" align="center" >
                        <button class="btn btn-primary"  type="submit">Actualizar clave</button>
                    </div>
                    <br>
                    <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection('content') ?>