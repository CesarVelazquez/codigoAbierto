<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="<?php echo site_url('ctrlContacto/enviar'); ?>" method="post">
                    <fieldset>
                        <legend class="text-center header">Ponte en contacto con nosotros:</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="frmNombre" name="frmNombre" type="text" placeholder="Nombre" class="form-control">*
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="frmApellido" name="frmApellido" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-envelope bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="frmEmail" name="frmEmail" type="text" placeholder="Dirección de Email" class="form-control">*
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-phone bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="frmTel" name="frmTel" type="text" placeholder="Teléfono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-pencil bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="frmMensaje" name="frmMensaje" placeholder="Ingresa aquí tu mensaje y nos pondremos en contacto contigo a la brevedad." rows="7"></textarea>*
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo validation_errors(); ?>
<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>