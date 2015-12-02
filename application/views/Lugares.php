<div class="row" id="NuevoLugar">
    <div class="col-xs-6 col-xs-offset-3">
        <form name="frmNuevoLugar" id="frmNuevoLugar" action="" method="post">
            <fieldset>
                <legend class="row text-capitalize text-center text-muted">Crear un nuevo lugar</legend>
                <div class="form-group">
                    <label for="frmDescripcion">Descripción</label>
                    <input type="text" name="frmDescripcion" class="form-control" id="frmDescripcion" placeholder="Descripción del evento">
                </div>
                <div class="form-group">
                    <label for="frmUbicacion">Ubicación</label>
                    <input type="text" name="frmUbicacion" class="form-control" id="frmUbicacion" placeholder="Ubicación del evento">
                </div>
                <div class="form-group">
                    <label for="frmCupo">Cupo</label>
                    <input type="text" name="frmCupo" class="form-control" id="frmCupo">
                </div>
            </fieldset>
            <button type="submit" class="btn btn-default">Crear</button>
        </form>
    </div>
</div>

<div class="row" id="ConsultaLugares">
    <div class="col-xs-6 col-xs-offset-3">
        <form name="frmConsultaLugares" id="frmConsultaLugares" action="<?php echo site_url('inicio/consultaLugares')?>" method="post">
            <div class="form-group">
                <div class="pre-scrollable">
                    <table class="table table-bordered table-condensed table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Descripción</td>
                                <td>Ubicación</td>
                                <td>Cupo</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($ConsultaLugares as $ConsLugares)
                            {
                            ?>
                            <tr>
                                <td><?php echo $ConsLugares->idLugar?></td>
                                <td><?php echo $ConsLugares->descripcion?></td>
                                <td><?php echo $ConsLugares->ubicacion?></td>
                                <td><?php echo $ConsLugares->cupo?></td>
                                <td style="white-space:nowrap">
                                    <button type="button" class="btn btn-danger btn-xs" data-idlugar="<?php echo $ticket->idLugar ?>">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" data-idlugar="<?php echo $ticket->idLugar ?>">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>