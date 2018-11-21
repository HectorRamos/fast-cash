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
            <li class="active">Empresa</li>
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
                    <h3 class="panel-title">Datos de la empresa</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
                <?php
                  foreach ($datos->result() as $empresa) {

                  }
                  if (sizeof($datos->result()) == 0 || $empresa->estado == 0)
                  {
                ?>
                <form id="DProcesoCC" method="post" action="<?= base_url() ?>Empresa/GuardarEmpresa">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="nombre_empresa">Nombre de la empresa</label>
                            <input type="text" value="" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Nombre completo de la empresa" required data-parsley-required-message="Digite el nombre de la empresa">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="giro_empresa">Giro</label>
                            <select name="giro_empresa" id="giro_empresa" class="select" required data-parsley-required-message="Seleccione un giro">
                              <option value="">Seleccione un tipo de giro</option>
                              <option value="Comercio">Comercio</option>
                              <option value="Financiero">Financiero</option>
                            </select>
                      </div>
                      <div class="form-group col-md-4">
                            <label for="correo_empresa">Correo electrónico</label>
                            <input type="text" value="" class="form-control" id="correo_empresa" name="correo_empresa" placeholder="Correo electronico de la empresa" required data-parsley-required-message="Digite el correo de la empresa">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="telefono_empresa">Teléfono</label>
                            <input type="text" value="" class="form-control" id="telefono_empresa" name="telefono_empresa" placeholder="Teléfono de la empresa" required data-parsley-required-message="Digite el numero de teléfono">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="nrc_empresa">NRC</label>
                            <input type="text" value="" class="form-control" id="nrc_empresa" name="nrc_empresa" placeholder="NRC de la empresa" required data-parsley-required-message="Digite el NRC de la empresa">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="direccion_empresa">Dirección</label>
                            <input type="text" value="" class="form-control" id="direccion_empresa" name="direccion_empresa" placeholder="Dirección de la empresa" required data-parsley-required-message="Digite la dirección de la empresa">
                      </div>
                    </div>


                    <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Guardar</button>
               </div>
              </form>
              <?php
              }
              else
              {
                foreach ($datos->result() as $empresa) {
                  $id = $empresa->idEmpresa;
                  $nombre = '"'.$empresa->nombreEmpresa.'"';
                  $giro = '"'.$empresa->giro.'"';
                  $email = '"'.$empresa->email.'"';
                  $telefono = '"'.$empresa->telefono.'"';
                  $direccion = '"'.$empresa->direccion.'"';
                  $nrc = '"'.$empresa->nrc.'"';
                }
              ?>
              <div class="row">
                  <div class="col-md-8">
                  </div>
                  <div class="col-md-2 text-right">
                    <?php 
                    echo "<a onclick='actualizarInformacionEmpresa($id, $nombre, $giro, $email, $telefono, $direccion, $nrc)' title='Nuevo' href='' data-toggle='modal' data-target='#modal_actualizar_empresa' class='btn btn-success waves-effect waves-light m-b-5'><i class='fa fa-plus-circle'></i> <span>Actualizar Información<span></a> ";
                    ?>
                  </div>
                  <div class='col-md-2 text-right'>
                    <?php 
                    echo "<a onclick='Delete($id)' class='btn btn-danger waves-effect waves-light eliminar' data-id='$id' data-toggle='modal' data-target='#modal_eliminar_datos_empresa'><i class='fa fa-close'></i> <span> Eliminar Información<span></a>";
                    ?>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h4><strong>Nombre de la empresa:</strong><?= $empresa->nombreEmpresa ?></h4>
                  </div>
                  <div class="col-md-4">
                    <h4><strong>Giro:</strong> <?= $empresa->giro ?></h4>
                  </div>
                  <div class="col-md-4">
                    <h4><strong>Email:</strong> <?= $empresa->email ?></h4>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <h4><strong>Teléfono:</strong> <?= $empresa->telefono ?></h4>
                  </div>
                  <div class="col-md-4">
                    <h4><strong>Dirección:</strong> <?= $empresa->direccion ?></h4>
                  </div>
                  <div class="col-md-4">
                    <h4><strong>NRC:</strong> <?= $empresa->nrc ?></h4>
                  </div>
                </div>

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

<!-- ============================================================== -->
<!-- Ventana Modal para agregar un proveedor-->
<!-- ============================================================== -->
<div class="modal fade" id="modal_actualizar_empresa" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Datos de la empresa</h4>
          </div>
          <div class="modal-body">
              <form id="DProcesoCC" method="post" action="<?= base_url() ?>Empresa/ActualizarEmpresa">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="nombre_empresa">Nombre de la empresa</label>
                            <input type="text" value="" class="form-control" id="nombre_empresaA" name="nombre_empresa" placeholder="Nombre completo de la empresa" required data-parsley-required-message="Digite el nombre de la empresa">
                            <input type="hidden" value="" class="form-control" id="id_empresaA" name="id_empresa">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="giro_empresa">Giro</label>
                            <select name="giro_empresa" id="giro_empresaA" class="form-control" required data-parsley-required-message="Seleccione un giro">
                              <option value="">Seleccione un tipo de giro</option>
                              <option value="Comercio">Comercio</option>
                              <option value="Financiero">Financiero</option>
                            </select>
                      </div>
                      <div class="form-group col-md-4">
                            <label for="correo_empresa">Correo electrónico</label>
                            <input type="text" value="" class="form-control" id="correo_empresaA" name="correo_empresa" placeholder="Correo electronico de la empresa" required data-parsley-required-message="Digite el correo de la empresa">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="telefono_empresa">Teléfono</label>
                            <input type="text" value="" class="form-control" id="telefono_empresaA" name="telefono_empresa" placeholder="Teléfono de la empresa" required data-parsley-required-message="Digite el numero de teléfono">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="nrc_empresa">NRC</label>
                            <input type="text" value="" class="form-control" id="nrc_empresaA" name="nrc_empresa" placeholder="NRC de la empresa" required data-parsley-required-message="Digite el NRC de la empresa">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="direccion_empresa">Dirección</label>
                            <input type="text" value="" class="form-control" id="direccion_empresaA" name="direccion_empresa" placeholder="Dirección de la empresa" required data-parsley-required-message="Digite la dirección de la empresa">
                      </div>
                    </div>


                    <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Actualizar</button>
                <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>

               </div>
              </form>
          </div>
      </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!--MODAL PARA ELIMINAR DATOS-->
<div class="modal fade" id="modal_eliminar_datos_empresa" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
    <form  action="<?= base_url()?>Empresa/EliminarEmpresa" method="GET">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="mySmallModalLabel">
                <i class="fa fa-warning fa-lg text-danger"></i>
            </h4>
        </div>
            <div class="modal-body">
              <input type="hidden" id="idEmpresa" name='idEmpresa'>
              <p align="center">¿Está seguro de eliminar el registro?</p>
            </div>
            <div  align="center">
                <button type="submit" class="btn btn-danger block wwaves-effect waves-light m-b-5"><i class="fa fa-trash-o fa-lg"></i> Eliminar</button>
                <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
   $(document).on("ready", main);
  function main()
  {
    $("#fecha_proceso").prop('readonly', true);

    $('#DProcesoCC').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  });

  }

  function actualizarInformacionEmpresa(id, nombre, giro, email, telefono, direccion, nrc)
  {
    document.getElementById('id_empresaA').value=id;
    document.getElementById('nombre_empresaA').value=nombre;
    document.getElementById('giro_empresaA').value=giro;
    document.getElementById('correo_empresaA').value=email;
    document.getElementById('telefono_empresaA').value=telefono;
    document.getElementById('direccion_empresaA').value=direccion;
    document.getElementById('nrc_empresaA').value=nrc;
    
  }

  function Delete(id){
        $('#idEmpresa').val(id);
  }
</script>