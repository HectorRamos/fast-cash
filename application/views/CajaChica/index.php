<?php if($this->session->flashdata("informa")):?>
  <script type="text/javascript">
    $(document).ready(function(){
    $.Notification.autoHideNotify('info', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("informa")?>');
    });
  </script>
<?php endif; ?>
<?php if($this->session->flashdata("errorr")):?>
  <script type="text/javascript">
    $(document).ready(function(){
    $.Notification.autoHideNotify('error', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("errorr")?>');
    });
  </script>
<?php endif; ?>

<style>
  a{
    cursor: pointer;
  }
</style>
<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
            <li class="active">Caja chica</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Caja chica</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
            <?php 
              if (sizeof($datos->result())==0)
              {
            ?>
              <form method="post" action="<?= base_url() ?>CajaChica/AperturarCaja">
                <div class="margn">
                <!-- Primera Linea del formulario-->

                    <div class="row">
                      <div class="form-group col-md-5">
                            <label for="fecha_apertura">Fecha</label>
                            <input type="text" class="form-control DateTime" id="fecha_apertura" name="fecha_apertura" placeholder="Fecha de recibido del prestamo" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-5">
                            <label for="cantidad_apertura">Cantidad de apertura</label>
                            <input type="text"  class="form-control" id="cantidad_apertura" name="cantidad_apertura" placeholder="Tasa de interes del prestamo">
                      </div>
                      <div class="form-group col-md-2">
                            <label for="monto_dinero">Acción</label><br>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Aperturar</button>
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                     <!-- <a href="<?= base_url() ?>Home/Main" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-close fa-lg"></i> Cancelar</a> -->
               </div>
              </form>
              <?php
                }
                else
                {
                  foreach ($datos->result() as $caja)
                  {
                    // echo "Id: ".$caja->idCajaChica."<br>";
                    // echo "Estado: ".$caja->estadoCajaChica."<br>";
                    // echo "Fecha: ".$caja->fechaCajaChica."<br>";
                    // echo "Cantidad".$caja->cantidadApertura."<br>";
                    // echo "Saldo".$caja->saldo."<br>";
                  }
                
                ?>
                <!-- Inicio cerrar caja -->
                <form method="post" action="<?= base_url() ?>CajaChica/CerrarCajaChica/">
                      <div class="row">
                            <div class="form-group col-md-10"></div>
                            <div class="form-group col-md-2">
                              <input type="hidden" value="<?= $caja->fechaCajaChica ?>" class="form-control" id="fecha_cc" name="fecha_cc" placeholder="Fecha de recibido del prestamo">
                              <input type="hidden" value="<?= $caja->idCajaChica ?>" class="form-control" id="id_cc" name="id_cc" placeholder="Fecha de recibido del prestamo">
                              <input type="hidden" value="<?= $caja->saldo ?>" class="form-control" id="saldo_cc" name="saldo_cc" placeholder="Fecha de recibido del prestamo">
                              <button href="" class="btn btn-danger">Cerrar caja chica</button>
                            </div>
                      </div>
                </form>
                <!-- Fin cerrar caja -->
                <form method="post" action="<?= base_url() ?>CajaChica/GuardarProcesoCC">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-6">
                            <label for="fecha_proceso">Fecha</label>
                            <input type="text" value="<?= $caja->fechaCajaChica ?>" class="form-control" id="fecha_proceso" name="fecha_proceso" placeholder="Fecha de recibido del prestamo" data-mask="9999/99/99">
                            <input type="hidden" value="<?= $caja->idCajaChica ?>" class="form-control" id="id_cc" name="id_cc" placeholder="Fecha de recibido del prestamo">
                            <input type="hidden" value="<?= $caja->saldo ?>" class="form-control" id="saldo_cc" name="saldo_cc" placeholder="Fecha de recibido del prestamo">
                      </div>
                      <div class="form-group col-md-6">
                            <label for="cantidad_apertura">Cantidad de dinero</label>
                            <input type="text" value="" class="form-control" id="cantidad_dinero" name="cantidad_dinero" placeholder="Cantidad de dinero del proceso a efectuar">
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->
                    <!-- Inicio de la segunda linea del formulario-->
                    <div class="row">
                    <div class="form-group col-md-6">
                            <label for="cantidad_apertura">Tipo de proceso</label>
                            <select name="tipo_proceso" id="" class="form-control">
                              <option value="Entrada">Entrada de dinero</option>
                              <option value="Salida">Salida de dinero</option>
                            </select>
                      </div>
                      <div class="form-group col-md-6">
                            <label for="monto_dinero">Forma de pago</label><br>
                            <select name="forma_pago" id="" class="form-control">
                              <?php 
                                foreach ($tipoPago->result() as $tipo)
                                {
                              ?>
                              <option value="<?= $tipo->idTipo ?>"><?= $tipo->detalle ?></option>
                              <?php } ?>
                            </select>
                      </div>
                    </div>
                    <!-- Fin de la segunda linea del formulario-->
                    <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <label for="detalle_proceso">Detalle del proceso</label>
                            <textarea class="form-control resize" rows="3" id="detalle_proceso" name="detalle_proceso"></textarea>
                      </div>
                    </div>
                    <!-- Fin de la tercera linea del formulario-->


                            <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Guardar</button>
                     <!-- <a href="<?= base_url() ?>Home/Main" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-close fa-lg"></i> Cancelar</a> -->
               </div>
              </form>
                <?php } ?>
            </div>
          </div>
        </div>
      </div> <!-- End Row -->

    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<script>
   $(document).on("ready", main);
  function main()
  {
    $("#fecha_proceso").prop('readonly', true);
  }
</script>