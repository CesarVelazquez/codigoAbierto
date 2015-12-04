<div class="modal fade" id="nuevoEvento" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Crear nuevo evento</h4>
      </div>
      <div class="modal-body">
         <?php echo form_open_multipart('ctrlEvento/nuevoEvento');?>
            <div class="form-group">
              <label for="frmNombre" class="control-label">Nombre del Evento</label>
              <input type="text" class="form-control" name="frmNombre">
            </div>
            <div class="form-group">
              <label for="frmTipoEvento" class="control-label">Tipo de Evento</label>
              <input type="text" class="form-control" name="frmTipoEvento">
            </div>
             <div class="form-group">
              <label for="frmIdLugar" class="control-label">Lugar</label>
                <select name="frmIdLugar">
                 <?php foreach ($idLugar as $key => $value) {
                   echo "<option value='".$value->idLugar."'>".$value->descripcion."</option>";
                 } ?>
                </select>
            </div>
            <div class="form-group">
              <label for="frmFecha" class="control-label">Fecha</label>
              <input type="date" class="form-control" name="frmFecha">
            </div>
            <div class="form-group">
              <label for="frmPrecio" class="control-label">Precio</label>
              <input type="number" step="100.00" value="00.00" class="form-control" name="frmPrecio">
            </div>
            <div class="form-group">

              <label for="frmFoto" class="control-label">Foto</label>
              <input type="file" class="form-control" name="frmFoto">
            </div>
            <div class="form-group">
              <label for="frmDescripcion" class="control-label">Descripción</label><br>
              <textarea name="frmDescripcion"  cols="70" rows="10"></textarea>
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