<div class="row">
    <?php
    foreach ($eventos as $evento)
    {
        ?>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="http://lorempixel.com/400/200/people" alt="Evento">
          <div class="caption">
            <h3><?php echo $evento->nombre ?></h3>
            <p><?php echo $evento->descripcion ?></p>
            <p><a href="<?php echo site_url('ctrlEvento/getEvento/'.$evento->idEvento) ?>" class="btn btn-primary" role="button">Ver Detalle</a></p>
          </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>