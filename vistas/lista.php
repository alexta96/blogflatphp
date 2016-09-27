<?php $titulo = "Messi Acojonao" ?>

<?php ob_start() ?>
    <h1>Entradas</h1>
    <ul>
      <?php foreach ($entradas as $entrada):?>
        <li>
          <a href="/Flatphp/detalle.php?id=<?= $entrada['id'] ?>">
          <?= $entrada['titulo'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>

<?php
  $contenido = ob_get_clean()
?>
<?php
include 'plantilla.php'
?>
