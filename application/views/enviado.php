<?php 
 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-sm-12">
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <h3 class="panel-title">Mensaje Enviado</h3>
			  </div>
			  <div class="panel-body">
			    <h4>Gracias <?php echo $nombre; ?>, tu mensaje ha sido enviado con éxito.</h4>
			    <p>Nos pondremos en contacto contigo lo antes posible, a través la dirección de correo electrónico que nos proporcionaste. (<?php echo $email; ?>)</p>
			  </div>
			  <div class="panel-footer"><a href='<?php echo base_url(); ?>'>Página principal</a></div>
			</div>
 		</div>	
 	</div>
 </div>