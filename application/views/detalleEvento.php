<?php 
for ($i=0; $i <count($asientos) ; $i++) { 
 $array[]= $asientos[$i]->asiento;
}


?>



<div class="row">
 <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/img/'.$foto) ?>" alt="Evento">
            <span class="label label-info"><?php echo $tipoEvento; ?></span>
          <div class="caption">
            <h3><?php echo $nombre ?></h3>
            <table class="table table-hover">
          
            <th>Ubicación | Fecha</th>
            <tr><td><?php echo $ubicacion ." | ".substr($fecha,0,10); ?></td></tr>
        </table>
            
          </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
         <table class="table table-hover">
          <tr>
            <th>Descripción</th>
            <tr><td><?php echo $descripcion; ?></td></tr>
            <th>Precio</th>
            <tr><td id="precio"><?php echo  $precio ?></td></tr>
          </tr>
        </table>
    </div>

    <?php if ($disponibles == 0) {
       
     ?>

     <div class="col-sm-6 col-md-4">
        <h2 style="color:red;">Boletos Agotados</h2>
        <hr>
        

    </div>


    <?php }elseif (isset($this->session->userdata['usuario'])) {
    	
    ?>
    <div class="col-sm-6 col-md-4">
        <h3>Adquiere tus boletos:</h3>
        <hr>
        

            <div class="form-group">
             
              <div class="col-sm-4">
              	 <label for="frmCupo" class="control-label">Comprar</label>
                <input id="cantidad" type="number" size="40" value="1" min="1" max="<?php echo $disponibles; ?>" class="form-control" name="frmCupo">
              </div><br><br>
              <div class="col-sm-6">
						      de <?php echo $disponibles; ?> disponibles.
              </div>
            <hr>
            <div class="col-sm-12">
               <h6>Elige tus asientos:</h6>
               <?php for ($i=1; $i <= $cupo ; $i++) { 
                if (isset($array)) {
                 if (in_array($i,$array)) {
                  echo "<div style='display:inline-block;'><span style='position:absolute;color:white;margin-left:18px;margin-top:8px;font-size:9px;'>
                ".$i."</span><img style='margin:5px;' src='".base_url()."assets/img/ocupado.png'></div><input id='".$i."' type='checkbox' disabled>";
                }else{
                   echo "<div style='display:inline-block;'><span style='position:absolute;color:white;margin-left:18px;margin-top:8px;font-size:9px;'>
                ".$i."</span><img style='margin:5px;' src='".base_url()."assets/img/disponible.png'></div><input id='".$i."' type='checkbox' name='as'>";
                }
                }else{
                   echo "<div style='display:inline-block;'><span style='position:absolute;color:white;margin-left:18px;margin-top:8px;font-size:9px;'>
                ".$i."</span><img style='margin:5px;' src='".base_url()."assets/img/disponible.png'></div><input id='".$i."' type='checkbox' name='as'>";
                }
                
               
               } ?>
              
            </div>

            <div class="col-sm-12">
              <br>
            <a href="#" data-toggle='modal' data-target='#compra'><button onclick="compra()" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</button><a/>
            </div>
        </div>
        

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 	<script>
 	function compra(){
 			var cantidad = $('#cantidad').val();
 			var precio = $('#precio').html();
 			var total = cantidad*precio;
 			$('#num').html("<b>Número de boletos: </b>"+cantidad);
      $('#pasanumero').val(cantidad);
 			$('#pu').html("<b>Precio unitario:</b> "+precio);
 			$('#total').html("<b>Total:</b> $"+total+"MXN");
 	}
      
      $('input[type=number]').change(function() {


      });

      $("input[type=checkbox][name=as]").click(function() {
        var cantidad = $('#cantidad').val();

      var bol = $("input[type=checkbox][name=as]:checked").length >= cantidad;     
      $("input[type=checkbox][name=as]").not(":checked").attr("disabled",bol);

      $('input:checkbox').attr("enabled");

    var checkedValues = $('input:checkbox:checked').map(function() {
    return this.id ;
      }).get();

      var checkedValues2 = $('input:checkbox:checked').map(function() {
    return this.id +"," ;
      }).get();


     $('#asientos').html(checkedValues2);
     $('#pasaasientos').val(checkedValues);

      

      });



 	</script>



