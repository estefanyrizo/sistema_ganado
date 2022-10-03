<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<br>
<div class="container">
  <div class="pt-5 mt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://nutrimaxcr.com/wp-content/uploads/2017/06/EnfermedadesPorDeficienciaMineral.jpg" class="d-block w-150 h-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://certifiedhumanelatino.org/wp-content/uploads/2021/09/qualidade-da-agua-gado-.png" class="d-block w-150 h-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://mascolombia.com/wp-content/uploads/2022/06/para-cumplir-la-meta-habra-que-vacunar-155-millones-de-cabezas-ganado-contra-la-aftosa-en-17-dias.jpg" class="d-block w-150 h-50" alt="...">
        </div>

      </div>
    </div>

  </div>
</div>

<?= $this->endSection('content') ?>