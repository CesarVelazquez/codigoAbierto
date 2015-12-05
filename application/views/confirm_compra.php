





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
            <br>
            <form action="<?php echo site_url('ctrlBoleto/nuevosBoletos/'.$idEvento.'/10') ?>" method="POST">
              <input type="text" id='pasanumero' name="noBoletos" hidden>
              <input type="text" id='pasaasientos' name="noAsientos" hidden>
            
              <p><b>Evento:</b> <?php echo $nombre; ?></p>
              <p id="num"></p>
              <p><b>Asientos:</b> <span id="asientos"></span></p>
              <p id="pu">Precio Unitario: </p>
              <p id="total">Total: </p>
             
                
           
          </div>
      </div>
      <div class="modal-footer">
        <a href=" "><button type="submit" class="btn btn-info">Comprar</button></a>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       
      </div>
    </div>
  </div>
</div>


