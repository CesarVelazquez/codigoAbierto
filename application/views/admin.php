

<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<div id="wrapper">


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url('index.php/ctrlAdmin'); ?>"><i class="fa fa-dashboard fa-fw"></i>Admin</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Eventos</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-plus-circle fa-fw"></i>Nuevo Evento</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numUsuarios; ?></div>
                                    <div>Usuarios</div>
                                </div>
                            </div>
                        </div>
                        <a style="cursor:pointer;" onclick="listado()">
                            <div class="panel-footer">
                                <span class="pull-left">Listar usuarios</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numEventos; ?></div>
                                    <div>Eventos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numVentas; ?></div>
                                    <div>Ventas</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <p id="respuesta"></p>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script type="text/javascript">
       

         function listado()
         {
         $.ajax({
         type: 'POST',
         url: '<?php echo base_url(); ?>index.php/ctrlUsuario/listaUsuarios', 
         dataType:'json',
         success: function(resp) { 
         
                        var tabla = "<h3>Lista de Usuarios</h3><table class='table table-hover'><th>Username</th><th>Nombe</th><th>Email</th>";
                       $.each(resp, function(index,value){
                        //process your data by index, in example
                        
                        tabla += "<tr><td>"+value.user+"</td><td>"+value.nombre+"</td><td>"+value.email+"</td></tr>";
                            
                        });

                        tabla += "</tabla>";
                       
                        $('#respuesta').html(tabla);
       
            }
         });

         }




</script>


    <script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/sb-admin-2.js"></script>