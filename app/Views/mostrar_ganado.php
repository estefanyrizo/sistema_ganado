<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
Ganado
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
              <li class="list-group-item">Raza: <?php echo $novillo["raza"]; ?></li>
              <li class="list-group-item">Color: <?php echo $novillo["color"]; ?></li>
              <li class="list-group-item">Peso: <?php echo $novillo["peso"]; ?></li>
              <li class="list-group-item">Tamaño: <?php echo $novillo["tamaño"]; ?></li>
              <li class="list-group-item">Fecha de nacimiento: <?php echo $novillo["fecha_nacimiento"]; ?></li>

            </ul>
            <div class="row d-flex">
              <div class="col-6 form-group" align="center">
                <a class="btn btn-primary" href=<?php echo base_url() . "/info_novillo/" . $novillo["id_ganado"] . "/edit"; ?>><i class="nc-icon nc-refresh-69"></i></a>
              </div>
              <div class="col-6 form-group" align="center">
                <a class="btn btn-danger" href=<?php echo base_url() . "/eliminar/" . $novillo["id_ganado"]; ?>><i class="fa fa-trash"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>




  </div>
</div>
<?= $this->endSection('content') ?>