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
            <?php 
              $mes='';
              foreach ($datos->result() as $solicitud) {
                $idSolicitud = '"'.$solicitud->idSolicitud.'"';
                $codigoSolicitud = '"'.$solicitud->codigoSolicitud.'"';
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
              
            ?>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <!--Panel body aqui va la tabla con los datos-->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="margn">
                                  <div align="center">
                                   <?php
                                        switch ($solicitud->idEstadoSolicitud)
                                        {
                                          case '1':
                                                echo "<a title='Eliminar' onclick='Update($idSolicitud)' type='button' class='btn btn-warning block waves-effect waves-light m-b-5' data-id='$idSolicitud' data-toggle='modal' data-target='.modal_actualizar_estado_solicitudP'><i class='fa fa-list fa-lg'></i> En revisión </a> ";
                                                echo "<a title='Eliminar' onclick='Delete($idSolicitud)' type='button' class='btn btn-danger block waves-effect waves-light m-b-5' data-id='$idSolicitud' data-toggle='modal' data-target='.modal_actualizar_estado_solicitudD'><i class='fa fa-minus-circle  fa-lg'></i> Denegar </a> ";
                                                echo "<a title='Eliminar' onclick='Approved($idSolicitud, $codigoSolicitud)' type='button' class='btn btn-primary block waves-effect waves-light m-b-5' data-id='$idSolicitud' data-toggle='modal' data-target='.modal_actualizar_estado_solicitudA'><i class='fa fa-thumbs-up fa-lg'></i> Aprobar </a>";
                                            break;
                                          case '2':
                                                echo "<a title='Eliminar' onclick='Delete($idSolicitud)' type='button' class='btn btn-danger block waves-effect waves-light m-b-5' data-id='$idSolicitud' data-toggle='modal' data-target='.modal_actualizar_estado_solicitudD'><i class='fa fa-minus-circle  fa-lg'></i> Denegar </a> ";
                                                echo "<a title='Eliminar' onclick='Approved($idSolicitud, $codigoSolicitud)' type='button' class='btn btn-primary block waves-effect waves-light m-b-5' data-id='$idSolicitud' data-toggle='modal' data-target='.modal_actualizar_estado_solicitudA'><i class='fa fa-thumbs-up fa-lg'></i> Aprobar </a>";
                                            break;
                                          
                                          default:
                                              # code...
                                            break;
                                        }
                                   ?>
                                    <!-- <a type="button" class="btn btn-warning block waves-effect waves-light m-b-5"><i class="fa fa-list fa-lg"></i> En revisión</a> -->
                                    <!-- <a type="button" class="btn btn-primary block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-thumbs-up fa-lg"></i> Aprobar</a> -->
                                    <!-- <a type="button" class="btn btn-danger block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-minus-circle  fa-lg"></i> Denegar</a> -->
                                  </div>
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
                                        <?php
                                          }
                                          if (sizeof($fiadores->result())>0)
                                          {
                                            foreach ($fiadores->result() as $fiador)
                                            {
                                            
                                        ?>
                                          <tr>
                                        <td colspan="3" class="text-center"><strong>DATOS DEL FIADOR</strong></td>
                                      </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Nombre: </strong><?= $fiador->nombre." ".$fiador->apellido ?></p></td>
                                          <td colspan=""><p><strong>Ingreso: </strong>$<?= $fiador->ingreso?></p></td>
                                          <td colspan=""><p><strong>DUI: </strong><?= $fiador->dui ?></p></td>
                                        </tr>
                                        <tr>
                                          <td colspan=""><p><strong>NIT: </strong><?= $fiador->nit ?></p></td>
                                          <td colspan=""><p><strong>Teléfono: </strong><?= $fiador->telefono ?></p></td>
                                          <td colspan=""><p><strong>Correo: </strong><?= $fiador->email ?></p></td>
                                        </tr>
                                        <tr>
                                          <td colspan=""><p><strong>Dirección: </strong><?= $fiador->direccion ?></p></td>
                                          <td colspan=""><p><strong>Fecha de nacimiento: </strong><?= $fiador->fechaNacimiento ?></p></td>
                                          <td colspan=""><p><strong>Género: </strong><?= $fiador->genero ?></p></td>
                                        </tr>
                                        <?php }} ?>

                                        <?php
                                          if (sizeof($garantias->result())>0)
                                          {
                                            foreach ($garantias->result() as $garantia)
                                            {
                                            
                                        ?>
                                          <tr>
                                        <td colspan="3" class="text-center"><strong>DATOS DE LA GARANTIA</strong></td>
                                      </tr>
                                          <td colspan=""><p><strong>Nombre: </strong><?= $garantia->nombre ?></p></td>
                                          <td colspan=""><p><strong>Precio valorado: </strong>$<?= $garantia->valorado ?></p></td>
                                          <td colspan=""><p><strong>Descripción: </strong><?= $garantia->descripcion ?></p></td>
                                      </tr>
                                        <?php }} ?>
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


<!-- ============================================================== -->
<!-- Ventana actualizar estado de solicitud a en proceso-->
<!-- ============================================================== -->
      <div class="modal fade modal_actualizar_estado_solicitudP" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <form name="frmeliminarcliente" action="<?= base_url();?>Solicitud/ActualizarEstadoSolicitud/1/" id="frmeliminarcliente" method="GET">
                  <div>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="mySmallModalLabel">
                        <i class="fa fa-warning fa-lg text-danger"></i> 
                      </h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" hidden id="IdP" name='id'>
                    <p align="center">¿Está seguro de cambiar el estado de la solicitud?</p>
                  </div>
                  <div align="center">
                      <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                      <button type="submit" class="btn btn-warning block waves-effect waves-light m-b-5"><i class="fa fa-list fa-lg"></i> Cambiar</button>
                  </div>
                  </form>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana actualizar estado de solicitud a denegado-->
<!-- ============================================================== -->
      <div class="modal fade modal_actualizar_estado_solicitudD" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <form name="frmeliminarcliente" action="<?= base_url();?>Solicitud/ActualizarEstadoSolicitud/2/" id="frmeliminarcliente" method="GET">
                  <div>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="mySmallModalLabel">
                        <i class="fa fa-warning fa-lg text-danger"></i> 
                      </h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" hidden id="IdE" name='id'>
                    <p align="center">¿Está seguro de cambiar el estado de la solicitud?</p>
                  </div>
                  <div align="center">
                      <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                      <button type="submit" class='btn btn-danger block waves-effect waves-light m-b-5'><i class='fa fa-minus-circle  fa-lg'></i> Denegar</button>
                  </div>
                  </form>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana para aprobar solicitud-->
<!-- ============================================================== -->
      <div class="modal fade modal_actualizar_estado_solicitudA" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <form name="frmeliminarcliente" action="<?= base_url();?>Solicitud/AgregarCredito/" id="frmeliminarcliente" method="GET">
                  <div>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="mySmallModalLabel">
                        <i class="fa fa-warning fa-lg text-danger"></i> 
                      </h4>
                  </div>
                  <div class="modal-body">
                    <input type="text" hidden id="IdA" name='k'>
                    <input type="text" hidden id="Codigo" name='c'>
                    <p align="center">¿Está seguro de cambiar el estado de la solicitud?</p>
                  </div>
                  <div align="center">
                      <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                      <button type="submit" class="btn btn-primary block waves-effect waves-light m-b-5"><i class='fa fa-thumbs-up fa-lg'></i> Aprobar </button>
                  </div>
                  </form>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<script>
  function Update(id){
      document.getElementById('IdP').value=id;
    }

  function Delete(id){
      document.getElementById('IdE').value=id;
    }

    function Approved(id, codigo){
      document.getElementById('IdA').value=id;
      document.getElementById('Codigo').value=codigo;
    }
</script>