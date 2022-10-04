<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Registrar ganado
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
    <div class="row ganado">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="sign pt-2 pb-2 text-center">Registrar nueva compra</h3>
                </div>
                <div class="form-group">
                    <div class="inputs">
                                <form enctype="application/x-www-form-urlencoded" name="formEstudiante" id="formEstudiante" method="post" action="../controlador/procesar_estudiante.php">
                                <div class="m-5">            
                                <label for="tipoCompra">Tipo de compra</label>
                                            <select class="form-control" id="tipoCompra" name="tipoCompra">
                                                <option disabled="" selected="" value="">Seleccione un elemento</option>
                                                <option value="#">Lote</option>
                                                <option value="#">Individual</option>
                                            </select>
                                </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>