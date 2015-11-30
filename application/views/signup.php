<div class="row">
  <div class="col-sm-6">
    
  
 <form action="<?php echo site_url('ctrlUsuario/nuevoUsuario'); ?>" method="POST">
            <div class="form-group">
              <label for="frmUsuario" class="control-label">Usuario</label>
              <input type="text" value="<?php echo set_value('frmUsuario') ?>" class="form-control" name="frmUsuario">
            </div>
            <div class="form-group">
              <label for="frmPass" class="control-label">Contraseña</label>
              <input type="text" value="<?php echo set_value('frmPass') ?>" class="form-control" name="frmPass">
            </div>
            <div class="form-group">
              <label for="frmNombre" class="control-label">Nombre</label>
              <input type="text" value="<?php echo set_value('frmNombre') ?>" class="form-control" name="frmNombre">
            </div>
            <div class="form-group">
              <label for="frmEmail" class="control-label">Email</label>
              <input type="text" value="<?php echo set_value('frmEmail') ?>" class="form-control" name="frmEmail">
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </form>
          <?php echo validation_errors(); ?>
  </div>
</div>