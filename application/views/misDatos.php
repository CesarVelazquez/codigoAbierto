<?php 
 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Mis Datos</h3>
			  </div>
			  <div class="panel-body">
			    <h4><?php echo $usuario; ?></h4>
			    <h5><?php echo $nombre; ?></h5>
			    <h6><?php echo $email; ?></h6>
			  </div>
			  <div class="panel-footer"><a href='#' data-toggle='modal' data-target='#del'>Eliminar mi cuenta</a></div>
			</div>
 		</div>
 		<div class="col-sm-6">
 			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Mis Compras</h3>
			    
			  </div>
			  <div class="panel-body">
			    <p>No has realizado ninguna compra.</p>
			  </div>
			</div>
 		</div>
 	</div>
 </div>