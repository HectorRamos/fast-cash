<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
		<div class="row">
            <div class="col-sm-12">
                <!-- <h4 class="pull-left page-title">Gestion de los estados de la solicitud</h4> -->
                <ol class="breadcrumb pull-right">
                    <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
                    <li class="active">Solicitudes de préstamo</li>
                </ol>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <!--Panel body aqui va la tabla con los datos-->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="margn">
                                  <div align="center">
                                    <a type="button" class="btn btn-warning block waves-effect waves-light m-b-5"><i class="fa fa-list fa-lg"></i> En revisión</a>
                                    <a type="button" class="btn btn-primary block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-thumbs-up fa-lg"></i> Aprobar</a>
                                    <a type="button" class="btn btn-danger block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-minus-circle  fa-lg"></i> Denegar</a>
                                  </div>
                              <?php 
                                $mes='';
                                foreach ($datos->result() as $solicitud) {
                                  if ($solicitud->tiempo_plazo==1)
                                  {
                                    $mes = 'mes';
                                  }
                                  else
                                  {
                                    if ($solicitud->tiempo_plazo > 1)
                                    {
                                      $mes = 'meses';
                                    }
                                  }
                                }
                              ?>
                                <table id="" class="table">
                                  <tbody class="tbody tbody1">
                                      <tr>
                                        <td colspan="3" class="text-center"><strong>DATOS DEL CLIENTE SOLICITADO</strong></td>
                                      </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Código de la solicitud: </strong><?= $solicitud->codigoSolicitud ?></p></td>
                                          <td colspan=""><p><strong>Plazo: </strong><?= $solicitud->tiempo_plazo ." ".$mes?></p></td>
                                          <td colspan=""><p><strong>Intereses: </strong><?= $solicitud->tasaInteres ?> %</p></td>
                                        </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Cantidad solicitada: </strong>$<?= $solicitud->capital ?></p></td>
                                          <td colspan=""><p><strong>Número de cuotas: </strong><?= $solicitud->cantidadCuota?></p></td>
                                          <td colspan=""><p><strong>Total a Pagar: </strong>$<?= $solicitud->ivaInteresCapital ?></p></td>
                                        </tr>

                                        <tr>
                                        <td colspan="3" class="text-center"><strong>DATOS DEL PERSONALES DEL SOLICITANTE</strong></td>
                                      </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Nombre: </strong><?= $solicitud->Nombre_Cliente." ".$solicitud->Apellido_Cliente ?></p></td>
                                          <td colspan=""><p><strong>DUI: </strong><?= $solicitud->DUI_Cliente?></p></td>
                                          <td colspan=""><p><strong>NIT: </strong><?= $solicitud->NIT_Cliente ?></p></td>
                                        </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Estado civil: </strong><?= $solicitud->Estado_Civil_Cliente ?></p></td>
                                          <td colspan=""><p><strong>Género: </strong><?= $solicitud->Genero_Cliente ?></p></td>
                                          <td colspan=""><p><strong>Profesión: </strong><?= $solicitud->Profesion_Cliente ?></p></td>
                                        </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Direción: </strong><?= $solicitud->Domicilio_Cliente ?></p></td>
                                          <td colspan=""><p><strong>Teléfono: </strong><?= $solicitud->Telefono_Fijo_Cliente ?></p></td>
                                          <td colspan=""><p><strong>Celular: </strong><?= $solicitud->Telefono_Celular_Cliente ?></p></td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" class="text-center"><p><strong>Observaciones: </strong><?= $solicitud->observaciones ?></p></td>
                                        </tr>
                                  </tbody>
                                </table>
                                  <div align="center">
                                    <a href="<?= base_url() ?>Solicitud/" type="button" class="btn btn-default block waves-effect waves-light m-b-5"><i class="fa fa-chevron-left fa-lg"></i> Volver</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
