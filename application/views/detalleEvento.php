<div class="row">
 <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/img/'.$foto) ?>" alt="Evento">
            <span class="label label-info"><?php echo $tipoEvento; ?></span>
          <div class="caption">
            <h3><?php echo $nombre ?></h3>
            <p class="text-justify"><?php echo $descripcion ?></p> 
          </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <table class="table table-hover">
        	<tr>
        		<th>Lugar</th>
        		<tr><td><?php echo $descripcion; ?></td></tr>
        		<th>Ubicación</th>
        		<tr><td><?php echo $ubicacion; ?></td></tr>
        		<th>Fecha</th>
        		<tr><td><?php echo $fecha; ?></td></tr>
        		<th>Precio</th>
        		<tr><td id="pu"><?php echo $precio; ?></td></tr>
        		<th>Cupo</th>
        		<tr><td><?php echo $cupo; ?></td></tr>
        	</tr>
        </table>
    </div>
    <?php if (isset($this->session->userdata['usuario'])) {
    	
    ?>
    <div class="col-sm-6 col-md-4">
        <h3>Adquiere tus boletos:</h3>
        <hr>
        <form  action="">

            <div class="form-group">
             
              <div class="col-sm-3">
              	 <label for="frmCupo" class="control-label">Comprar</label>
              <input id="cantidad" type="number" size="40" value="1" min="1" class="form-control" name="frmCupo">
              </div><br><br>
              <div class="col-sm-6">
						de X disponibles.
              	</div>
            <hr>
            <div class="col-sm-12">
            <a href="#" data-toggle='modal' data-target='#compra'><button onclick="compra()" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</button><a/>
            </div>
        </div>
        </form>

    </div>
</div>

<?php 
}else{
 ?>

 <div class="col-sm-6 col-md-4 text-center">
	<h4>Necesitas ser usuario registrado para realizar compras.</h4>
	<a href="#" data-toggle='modal' data-target='#login'>Inicia sesión</a> ó <a href="<?php echo site_url('ctrlUsuario'); ?>">Crea tu cuenta</a>.
 </div>

 	<?php } ?>


 	<script>

 	function compra(){
 			var cantidad = $('#cantidad').val();
 			var precio = $('#pu').html();
 			var total = cantidad*precio;
 			$('#num').html("<b>Número de boletos:</b> " + cantidad);
 			$('#precio').html("<b>Precio unitario:</b> "+precio);
 			$('#total').html("<b>Total:</b> $"+total+"MXN");

 	}

 	</script>