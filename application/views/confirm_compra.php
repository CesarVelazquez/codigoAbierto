<div class="modal fade" id="compra" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmar compra</h4>
      </div>
      <div class="modal-body">
          <h3 style="padding-left:20px;">Para finalizar, revisa los detalles de tu compra:</h3>
          <hr>
          <div class="col-sm-12">
              <p><b>Evento:</b> <?php echo $nombre; ?></p>
              <p id="num">Número de Boletos: </p>
              <p id="precio">Precio Unitario: </p>
              <p id="total">Total: </p>
          </div>
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url('ctrlUsuario/eliminaUsuario') ?>"><button type="button" class="btn btn-info">Comprar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>