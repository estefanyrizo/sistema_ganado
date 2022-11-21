<?= $this->extend('Front/layout/main') ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="row ganado">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="sign pt-2 pb-2 text-center">Registrar nueva venta</h2>
                </div>
                <div class="form-group">
                    <div class="inputs">
                        <?= $this->renderSection('formulario') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>