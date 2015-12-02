<div class="modal fade" id="del" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmación</h4>
      </div>
      <div class="modal-body">
          <h3 style="padding-left:20px;">¿Estás deguro de querer eliminar tu cuenta?</h3>
          <p style="padding-left:20px;color:red;">Esta acción no puede revertirse y se borrarán tus datos, incluyendo tu historial de compra.</p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url('ctrlUsuario/eliminaUsuario') ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>