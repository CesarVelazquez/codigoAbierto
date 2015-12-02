<div class="modal fade" id="login" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo site_url('ctrlUsuario/login'); ?>" method="POST">
            <div class="form-group">
              <label for="frmUsuario" class="control-label">Usuario</label>
              <input type="text" class="form-control" name="frmUsuario">
            </div>
            <div class="form-group">
              <label for="frmPass" class="control-label">Contraseña</label>
              <input type="password" class="form-control" name="frmPass">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>