<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<div class="content">
    <div class="row carousel">
        <div class="col-md-9">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Braford_steers_1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.pixabay.com/photo/2017/04/25/17/15/cow-2260306__340.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://storage.contextoganadero.com/s3fs-public/ganaderia/field_image/2015-12/novillo_a_ceba.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>