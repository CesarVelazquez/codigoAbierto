<div class="modal fade" id="nuevoLugar" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agregar Lugar</h4>
      </div>
      <div class="modal-body">
         <?php echo form_open_multipart('ctrlLugar/nuevoLugar');?>
            <div class="form-group">
              <label for="frmLugar" class="control-label">Descripción</label>
              <input type="text" class="form-control" name="frmLugar">
            </div>
            <div class="form-group">
              <label for="frmUbicacion" class="control-label">Ubicación</label>
              <input type="text" class="form-control" name="frmUbicacion">
            </div>
            <div class="form-group">
              <label for="frmCupo" class="control-label">Cupo</label>
              <input type="number"  class="form-control" name="frmCupo">
            </div>
            
            <button type="submit" class="btn btn-primary">Crear</button>
          <?php echo form_close(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>