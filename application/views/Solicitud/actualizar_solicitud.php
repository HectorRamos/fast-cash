<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
            <li class="active">Gestión de Solicitud de prestamo</li>
          </ol>
        </div>
      </div>
      <?php
        foreach ($datos->result() as $solicitud)
        {}
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Solicitud de prestamo</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form method="post" action="<?= base_url() ?>Solicitud/ActualizarSolicitud">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-2">
                            <label for="numero_solicitud">Número de solicitud</label>
                            <input type="text" class="form-control" id="numero_solicitud" name="numero_solicitud" value="<?= $solicitud->codigoSolicitud  ?>">
                      </div>
                      <div class="form-group col-md-8">
                      </div>
                      <div class="form-group col-md-2" align="center">
                        <div class="mar_che_cobrar">
                            <label for="cobra_mora">Cobrar mora</label><br>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" value="" id="cobra_mora" name="cobra_mora">
                                <label for="cobra_mora">Cobrar</label>
                            </div>
                        </div>  
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                      <label for="nombre_cliente">Cliente</label>
                        <div class="">
                          <input type="text" class="form-control" id="nombre_cliente" name="" value="<?= $solicitud->Nombre_Cliente.' '.$solicitud->Apellido_Cliente ?>">
                        </div>
                      </div>
<!--                     </div>                    
                    <div class="row"> -->

                      <div class="form-group col-md-6">
                            <label for="tipo_prestamo">Linea</label>
                              <select class="select" id="tipo_prestamo" name="tipo_prestamo" data-value="Seleccione un tipo de prestamo">
                                <option value="">Popular hasta <?= $solicitud->tiempo_plazo ?> meses</option>
                                
                              </select>
                            <input type="hidden" class="form-control" id="numero_meses" name="numero_meses">
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Segunda Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="fecha_recibido">Fecha Recibida</label>
                            <input type="text" class="form-control DateTime" id="fecha_recibido" name="fecha_recibido" value="<?= $solicitud->fechaRecibido ?>" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="tasa_interes">Tasa de interes</label>
                            <input type="text" value="10" class="form-control" id="tasa_interes" name="tasa_interes" value="<?= $solicitud->tasaInteres ?>">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="monto_dinero">Monto de dinero</label>
                            <input type="text" class="form-control" id="monto_dinero" name="monto_dinero" value="<?= $solicitud->capital ?>">
                      </div>
                    </div>
                    <!-- Fin de la segunda Linea del formulario-->

                     <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <label for="">IVA a pagar</label>
                            <input type="text" class="form-control" id="iva_pagar" name="iva_pagar" value="<?= $solicitud->totalIva ?>">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Intereses a pagar</label>
                            <input type="text" class="form-control" id="intereses_pagar" name="intereses_pagar" value="<?= $solicitud->totalInteres ?>">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Cuota diaria</label>
                            <input type="text" class="form-control" id="cuota_diaria" name="cuota_diaria" value="<?= $solicitud->pagoCuota ?>">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Total a pagar</label>
                            <input type="text" class="form-control" id="total_pagar" name="total_pagar" value="<?= $solicitud->ivaInteresCapital ?>">
                      </div>
                    </div>
                    <!-- Fin de la tercera Linea del formulario-->

                    <!-- Cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control resize" rows="3" id="observaciones" name="observaciones" value="<?= $solicitud->observaciones ?>"></textarea>
                      </div>
                    </div>
                    <!-- Fin de la cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <!-- <label for="">Id Cliente(Este ira oculto, utual es solo para muestra)</label> -->
                            <input type="hidden" value="1" class="form-control" id="id_cliente" name="id_cliente" value="">
                            <input type="hidden" value="1" class="form-control" id="numero_cuotas" name="numero_cuotas" value="">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Actualizar </button>
                     <a href="<?= base_url() ?>Home/Main" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
               </div>
              </form>
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

