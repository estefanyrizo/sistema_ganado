<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Cuenta
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>
<div class="content">
  <div class="ganado-list">
  <div class="ganado-box row d-flex">
    <?php
    foreach ($ganado as $novillo) : ?>
      <div class="col-3">
          <div class="card">
            <img class="img-top" src="https://storage.contextoganadero.com/s3fs-public/styles/noticias_one/public/ganaderia/field_image/2016-08/cebu_macho.jpg?itok=HvmiGh0I">
            <h5 class="card-title"><?php echo $novillo["nombre"]; ?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Codigo: <?php echo $novillo["codigo_chapa"]; ?></li>
              <li class="list-group-item">Color: <?php echo $novillo["color"]; ?></li>
              <li class="list-group-item">Peso: <?php echo $novillo["peso"]; ?></li>
              <li class="list-group-item">Tamaño: <?php echo $novillo["tamaño"]; ?></li>
              <li class="list-group-item">Fecha de nacimiento <?php echo $novillo["fecha_nacimiento"]; ?></li>

            </ul>
          </div>
        </div>
    <?php endforeach; ?>
    </div>



  </div>
</div>
<?= $this->endSection('content') ?>