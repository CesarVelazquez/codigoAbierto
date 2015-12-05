<div class="row">
    <?php
    foreach ($eventos as $evento)
    {
        ?>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/img/'.$evento->foto) ?>" alt="Evento">
          <div class="caption">
            <h3><?php echo $evento->nombre ?></h3>
            <p class="text-justify"><?php echo substr($evento->descripcion,0,200)."..."; ?></p>
            <p><a href="<?php echo site_url('ctrlEvento/getEvento/'.$evento->idEvento) ?>" class="btn btn-primary" role="button">Ver Detalle</a></p>
          </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>