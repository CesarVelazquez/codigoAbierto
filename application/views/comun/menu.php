<body>

    <div class="container">
        
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Super Tickets</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
              <?php
              $active=isset($active)?$active:'';
              ?>
            <ul class="nav navbar-nav">
              <li <?php echo $active=='inicio'?'class="active"':'' ?> ><a href="#">Inicio</a></li>
              <li <?php echo $active=='nosotros'?'class="active"':'' ?>><a href="#">Nosotros</a></li>
              <li <?php echo $active=='contacto'?'class="active"':'' ?>><a href="<?php echo site_url('ctrlContacto/index'); ?>">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($this->session->userdata['usuario'])) {
                 echo "<li><a href='#'>Bienvenido ".$this->session->userdata['usuario']."</a></li>";
                } ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php 
                        if (!isset($this->session->userdata['usuario'])) {
                          echo "<li><a href='#' data-toggle='modal' data-target='#login'>Login <span class='glyphicon glyphicon-log-in' aria-hidden='true'></span></a></li>
                          <li><a href=" . site_url('ctrlUsuario') . ">Registrarme <span class='glyphicon glyphicon-user' aria-hidden='true'></span></a></li>";
                        }
                      
                      
                      
                        if (isset($this->session->userdata['usuario'])) {

                         echo "<li><a href='". site_url('ctrlUsuario/misDatos')."'>Mis datos <span class='glyphicon glyphicon-user' aria-hidden='true'></span></a></li>
                             <li><a href='". site_url('ctrlUsuario/misDatos')."'>Mis compras <span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span></a></li>
                         <li role='separator' class='divider'></li>
                         <li><a href=" . site_url('ctrlUsuario/logout').">Logout <span class='glyphicon glyphicon-log-out' aria-hidden='true'></span></a></li>";
                        }
                        
                       ?>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </nav>