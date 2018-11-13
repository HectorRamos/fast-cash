<style>
  #LastF{
    background-color: rgba(255, 0 ,0, 0.1);
    border: 1px solid #fff;
    height: 1px
  }
</style>
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
                                    <a type="button" onclick="imprimirTabla()" class="btn btn-warning block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-print  fa-lg"></i> Imprimir</a>
                                  </div>
                                  <table class="table">
                                    <tbody class="tbody tbody1">
                                      <tr>
                                        <td colspan='4' class='text-right'>
                                        <?php
                                          if (sizeof($fiadores->result()) == 0) {
                                            echo "<a onclick='agregarFiador($idSolicitud)' class='btn btn-primary waves-effect waves-light m-b-5' title='Agregar nuevo Fiador' data-toggle='modal' data-target='#agregarFiador'><i class='fa fa-plus-circle'></i> Agreagar Fiador</a> ";
                                          }
                                          if (sizeof($garantias->result()) == 0) {
                                            echo "<a onclick='agregarPrenda($idSolicitud)' class='btn btn-primary waves-effect waves-light m-b-5' title='Agregar nueva garantia' data-toggle='modal' data-target='#agregarPrenda'><i class='fa fa-plus-circle'></i> Agregar Garantia</a>";
                                          }
                                        ?>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div id="tablaImprimir">
                                    <table id="" class="table">
                                      <tbody class="tbody tbody1">
                                          <tr>
                                            <td colspan="4" class="text-center"><strong>DATOS DEL CLIENTE SOLICITADO</strong></td>
                                          </tr>
                                            <tr>
                                              <td colspan=""><p><strong>Código de la solicitud: </strong><?= $solicitud->codigoSolicitud ?></p></td>
                                              <td colspan=""><p><strong>Plazo: </strong><?= $solicitud->tiempo_plazo ." ".$mes?></p></td>
                                              <td colspan=""><p><strong>Intereses: </strong><?= $solicitud->tasaInteres ?> %</p></td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td colspan=""><p><strong>Cantidad solicitada: </strong>$<?= $solicitud->capital ?></p></td>
                                              <td colspan=""><p><strong>Número de cuotas: </strong><?= $solicitud->cantidadCuota?></p></td>
                                              <td colspan=""><p><strong>Total a Pagar: </strong>$<?= $solicitud->ivaInteresCapital ?></p></td>
                                              <td></td>
                                            </tr>

                                          <tr>
                                            <td colspan="4" class="text-center"><strong>DATOS DEL PERSONALES DEL SOLICITANTE</strong></td>
                                          </tr>
                                            <tr>
                                              <td colspan=""><p><strong>Nombre: </strong><?= $solicitud->Nombre_Cliente." ".$solicitud->Apellido_Cliente ?></p></td>
                                              <td colspan=""><p><strong>DUI: </strong><?= $solicitud->DUI_Cliente?></p></td>
                                              <td colspan=""><p><strong>NIT: </strong><?= $solicitud->NIT_Cliente ?></p></td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td colspan=""><p><strong>Estado civil: </strong><?= $solicitud->Estado_Civil_Cliente ?></p></td>
                                              <td colspan=""><p><strong>Género: </strong><?= $solicitud->Genero_Cliente ?></p></td>
                                              <td colspan=""><p><strong>Profesión: </strong><?= $solicitud->Profesion_Cliente ?></p></td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td colspan=""><p><strong>Direción: </strong><?= $solicitud->Domicilio_Cliente ?></p></td>
                                              <td colspan=""><p><strong>Teléfono: </strong><?= $solicitud->Telefono_Fijo_Cliente ?></p></td>
                                              <td colspan=""><p><strong>Celular: </strong><?= $solicitud->Telefono_Celular_Cliente ?></p></td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td colspan="4" class="text-center"><p><strong>Observaciones: </strong><?= $solicitud->observaciones ?></p></td>
                                            </tr>
                                            <?php
                                              }
                                              $idSolicitud = '"'.$idSoli.'"';
                                              if (sizeof($fiadores->result())>0)
                                              {
                                                if (sizeof($fiadores->result()) == 1)
                                                {
                                                  echo "<tr class='alert-success'>
                                                        <td><strong>DATOS DEL FIADOR</strong></td>
                                                        <td colspan='2' class='text-right'>
                                                          <a onclick='agregarFiador($idSolicitud)' class='btn btn-primary waves-effect waves-light m-b-5 ocultarImprimir' title='Agregar nuevo Fiador' data-toggle='modal' data-target='#agregarFiador'><i class='fa fa-plus-circle'></i></a>
                                                        </td>
                                                      </tr>";
                                                }
                                                else
                                                {
                                                  echo "<tr class='alert-success'>
                                                        <td><strong>DATOS DE LOS FIADORES</strong></td>
                                                        <td colspan='3' class='text-right'>
                                                          <a onclick='agregarFiador($idSolicitud)' class='btn btn-primary waves-effect waves-light m-b-5 ocultarImprimir' title='Agregar nuevo Fiador' data-toggle='modal' data-target='#agregarFiador'><i class='fa fa-plus-circle'></i></a>
                                                        </td>
                                                      </tr>";
                                                }
                                                foreach ($fiadores->result() as $fiador)
                                                {
                                                  $idFiador = '"'.$fiador->idFiador.'"';
                                                  $nombre = '"'.$fiador->nombre.'"';
                                                  $apellido = '"'.$fiador->apellido.'"';
                                                  $ingreso = '"'.$fiador->ingreso.'"';
                                                  $dui = '"'.$fiador->dui.'"';
                                                  $nit = '"'.$fiador->nit.'"';
                                                  $telefono = '"'.$fiador->telefono.'"';
                                                  $email = '"'.$fiador->email.'"';
                                                  $direccion = '"'.$fiador->direccion.'"';
                                                  $fechaNacimiento = '"'.$fiador->fechaNacimiento.'"';
                                                
                                            ?>
                                            
                                            <tr>
                                              <td colspan=""><p><strong>Nombre: </strong><?= $fiador->nombre." ".$fiador->apellido ?></p></td>
                                              <td colspan=""><p><strong>Ingreso: </strong>$<?= $fiador->ingreso?></p></td>
                                              <td colspan=""><p><strong>DUI: </strong><?= $fiador->dui ?></p></td>
                                              <?php 
                                                echo "<td rowspan=3><a onclick='actualizarFiador($idSolicitud, $idFiador ,$nombre, $apellido, $ingreso, $dui, $nit, $telefono, $email, $direccion, $fechaNacimiento)' title='Editar Fiador' data-toggle='modal' data-target='#actualizarFiador' class='waves-effect waves-light editar ocultarImprimir'><i class='fa fa-pencil'></i></a></td>";
                                              ?>
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
                                            <?php 
                                              if (sizeof($fiadores->result()) == 1)
                                                {
                                                  echo "<tr id=''><td colspan='4'></td></tr>";
                                                }
                                                else
                                                {
                                                  echo "<tr><td colspan='4' id='LastF'></td></tr>";
                                                }
                                            ?>
                                            
                                            <?php }} ?>

                                            <?php
                                              if (sizeof($garantias->result())>0)
                                              {
                                                if (sizeof($garantias->result()) == 1)
                                                {
                                                  echo "<tr class='alert-success'>
                                                        <td><strong>DATOS DE LA GARANTIA</strong></td>
                                                        <td colspan='3' class='text-right'>
                                                          <a onclick='agregarPrenda($idSolicitud)' class='btn btn-primary waves-effect waves-light m-b-5 ocultarImprimir' title='Agregar nueva garantia' data-toggle='modal' data-target='#agregarPrenda'><i class='fa fa-plus-circle'></i></a>
                                                        </td>
                                                      </tr>";
                                                }
                                                else
                                                {
                                                  echo "<tr class='alert-success'>
                                                        <td><strong>DATOS DE LAS GARANTIAS</strong></td>
                                                        <td colspan='3' class='text-right'>
                                                          <a onclick='agregarPrenda($idSolicitud)' class='btn btn-primary waves-effect waves-light m-b-5 ocultarImprimir' title='Agregar nueva garantia' data-toggle='modal' data-target='#agregarPrenda'><i class='fa fa-plus-circle'></i></a>
                                                        </td>
                                                      </tr>";
                                                }
                                                foreach ($garantias->result() as $garantia)
                                                {
                                                  $idGarantia = '"'.$garantia->idGarantia.'"';
                                                  $nombre = '"'.$garantia->nombre.'"';
                                                  $valorado = '"'.$garantia->valorado.'"';
                                                  $descripcion = '"'.$garantia->descripcion.'"';
                                                ?>
                                              <tr>  
                                                <td colspan=""><p><strong>Nombre: </strong><?= $garantia->nombre ?></p></td>
                                                <td colspan=""><p><strong>Precio valorado: </strong>$<?= $garantia->valorado ?></p></td>
                                                <td colspan=""><p><strong>Descripción: </strong><?= $garantia->descripcion ?></p></td>
                                                <?php 
                                                    echo "<td><a onclick='actualizarPrenda($idSolicitud, $idGarantia, $nombre, $valorado, $descripcion)' title='Editar Fiador' data-toggle='modal' data-target='#actualizarPrenda' class='waves-effect waves-light editar ocultarImprimir'><i class='fa fa-pencil'></i></a></td>";
                                                  ?>
                                              </tr>
                                                <?php 
                                                  if (sizeof($garantias->result()) == 1)
                                                    {
                                                      echo "<tr id=''><td colspan='4'></td></tr>";
                                                    }
                                                    else
                                                    {
                                                      echo "<tr><td colspan='4' id='LastF'></td></tr>";
                                                    }
                                                ?>
                                            <?php }} ?>
                                      </tbody>
                                    </table>
                                  </div>
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


<!-- ============================================================== -->
<!-- Ventana para agregar fiador-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarFiador" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos del fiador</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?= base_url() ?>Solicitud/AgregarFiador">
                <input type="hidden" class="form-control" id="id_solicitud" name="id_solicitud">
                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" id="nombre_fiador" name="nombre_fiador" placeholder="Nombre del fiador">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control" id="apellido_fiador" name="apellido_fiador" placeholder="Apellido del fiador">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">DUI</label>
                          <input type="text" class="form-control" id="dui_fiador" name="dui_fiador" placeholder="DUI" data-mask="9999999-9">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">NIT</label>
                          <input type="text" class="form-control" id="nit_fiador" name="nit_fiador" placeholder="NIT" data-mask="9999-999999-999-9">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Teléfono</label>
                          <input type="text" class="form-control" id="telefono_fiador" name="telefono_fiador" placeholder="Teléfono" data-mask="9999-9999">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Email</label>
                          <input type="email" class="form-control" id="email_fiador" name="email_fiador" placeholder="Correo electrónico">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">Fecha de Nacimiento</label>
                          <input type="text" class="form-control DateTime" id="nacimiento_fiador" name="nacimiento_fiador" placeholder="Fecha de nacimiento">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Género</label>
                          <select class="form-control" id="genero_fiador" name="genero_fiador" data-placeholder="Seleccione un género">
                                <option value="">Seleccione un género</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                              </select>
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Ingreso</label>
                          <input type="text" class="form-control" id="ingreso_fiador" name="ingreso_fiador" placeholder="Ingreso mensual">
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                          <label for="">Dirección</label>
                          <textarea class="form-control resize" rows="3" id="direccion_fiador" name="direccion_fiador"></textarea>

                    </div>
                </div>
                <div align="center">
                  <button class="btn btn-success"><i class="fa fa-user-plus fa-lg"></i> Agregar</button>
                  <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                </div>
            </form>    
        </div>
      </div>
    </div>
  </div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana para actualizar fiador-->
<!-- ============================================================== -->
<div class="modal fade" id="actualizarFiador" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos del fiador</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?= base_url() ?>Solicitud/ActualizarFiador">
                <input type="hidden" class="form-control" id="id_solicitudA" name="id_solicitud">
                <input type="hidden" class="form-control" id="id_fiadorA" name="id_fiador">
                <div class="row">
                    <div class="form-group col-md-6">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" id="nombre_fiadorA" name="nombre_fiador" placeholder="Nombre del fiador">
                    </div>
                    <div class="form-group col-md-6">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control" id="apellido_fiadorA" name="apellido_fiador" placeholder="Apellido del fiador">
                    </div>
                    
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">NIT</label>
                          <input type="text" class="form-control" id="nit_fiadorA" name="nit_fiador" placeholder="NIT" data-mask="9999-999999-999-9">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Teléfono</label>
                          <input type="text" class="form-control" id="telefono_fiadorA" name="telefono_fiador" placeholder="Teléfono" data-mask="9999-9999">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">DUI</label>
                          <input type="text" class="form-control" id="dui_fiadorA" name="dui_fiador" placeholder="DUI" data-mask="9999999-9">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">Fecha de Nacimiento</label>
                          <input type="text" class="form-control DateTime" id="nacimiento_fiadorA" name="nacimiento_fiador" placeholder="Fecha de nacimiento">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Email</label>
                          <input type="email" class="form-control" id="email_fiadorA" name="email_fiador" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Ingreso</label>
                          <input type="text" class="form-control" id="ingreso_fiadorA" name="ingreso_fiador" placeholder="Ingreso mensual">
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                          <label for="">Dirección</label>
                          <textarea class="form-control resize" rows="3" id="direccion_fiadorA" name="direccion_fiador"></textarea>

                    </div>
                </div>
                <div align="center">
                  <button class="btn btn-success"><i class="fa fa-user-plus fa-lg"></i> Agregar</button>
                  <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                </div>
            </form>    
        </div>
      </div>
    </div>
  </div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Ventana para agregar garantia-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarPrenda" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos de la garantia</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?= base_url() ?>Solicitud/AgregarPrenda">
                <input type="hidden" class="form-control" id="id_solicitudP" name="id_solicitud">
                <div class="row">
                    <div class="form-group col-md-6">
                          <label for="">Nombre de la prenda</label>
                          <input type="text" class="form-control" id="nombre_prenda" name="nombre_prenda" placeholder="Nombre del fiador">
                    </div>
                    <div class="form-group col-md-6">
                          <label for="">Precio valorado</label>
                          <input type="text" class="form-control" id="precio_valorado" name="precio_valorado" placeholder="Apellido del fiador">
                    </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-12">
                          <label for="">Descripción</label>
                          <textarea class="form-control resize" rows="3" id="descripcion_prenda" name="descripcion_prenda"></textarea>

                  </div>
                </div>
                <div align="center">
                  <button class="btn btn-success"><i class="fa fa-user-plus fa-lg"></i> Agregar</button>
                  <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                </div>
            </form>    
        </div>
      </div>
    </div>
  </div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana para actualizar Prenda-->
<!-- ============================================================== -->
<div class="modal fade" id="actualizarPrenda" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos de la garantia</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?= base_url() ?>Solicitud/ActualizarPrenda">
                <input type="hidden" class="form-control" id="id_solicitudAP" name="id_solicitud">
                <input type="hidden" class="form-control" id="id_prendaA" name="id_prenda">
                <div class="row">
                    <div class="form-group col-md-6">
                          <label for="">Nombre de la prenda</label>
                          <input type="text" class="form-control" id="nombre_prendaA" name="nombre_prenda" placeholder="Nombre del fiador">
                    </div>
                    <div class="form-group col-md-6">
                          <label for="">Precio valorado</label>
                          <input type="text" class="form-control" id="precio_valoradoA" name="precio_valorado" placeholder="Apellido del fiador">
                    </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-12">
                          <label for="">Descripción</label>
                          <textarea class="form-control resize" rows="3" id="descripcion_prendaA" name="descripcion_prenda"></textarea>

                  </div>
                </div>
                <div align="center">
                  <button class="btn btn-success"><i class="fa fa-user-plus fa-lg"></i> Agregar</button>
                  <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                </div>
            </form>    
        </div>
      </div>
    </div>
  </div>
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

    function agregarFiador(idSolicitud)
    {
      $("#id_solicitud").attr('value', idSolicitud);
    }

    function actualizarFiador(idSolicitud, idFiador,nombre, apellido, ingreso, dui, nit, telefono, email, direccion, fechaNacimiento)
    {
      $("#id_solicitudA").attr('value', idSolicitud);
      $("#id_fiadorA").attr('value', idFiador);
      $("#nombre_fiadorA").attr('value', nombre);
      $("#apellido_fiadorA").attr('value', apellido);
      $("#ingreso_fiadorA").attr('value', ingreso);
      $("#dui_fiadorA").attr('value', dui);
      $("#nit_fiadorA").attr('value', nit);
      $("#telefono_fiadorA").attr('value', telefono);
      $("#email_fiadorA").attr('value', email);
      $("#direccion_fiadorA").html(direccion);
      $("#nacimiento_fiadorA").attr('value', fechaNacimiento);
    }

    function agregarPrenda(idSolicitud)
    {
      $("#id_solicitudP").attr('value', idSolicitud);
    }

    function actualizarPrenda(idSolicitud, idGarantia, nombre, valorado, descripcion)
    {
      $("#id_solicitudAP").attr('value', idSolicitud);
      $("#id_prendaA").attr('value', idGarantia);
      $("#nombre_prendaA").attr('value', nombre);
      $("#precio_valoradoA").attr('value', valorado);
      $("#descripcion_prendaA").html(descripcion);
    }

    function imprimirTabla()
    {
       $(".ocultarImprimir").hide();
      var elemento=document.getElementById('tablaImprimir');
      var pantalla=window.open(' ','popimpr');
      pantalla.document.write('<link href="<?= base_url() ?>plantilla/css/bootstrap.min.css" rel="stylesheet" />');
      pantalla.document.write(elemento.innerHTML);
      pantalla.document.close();
      pantalla.print();
      pantalla.close();
       $(".ocultarImprimir").show();
    }
</script>


