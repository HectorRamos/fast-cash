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
            <li class="active">Proveedores</li>
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
                    <h3 class="panel-title">Proveedor</h3>                 
                  </div>
                  <div class="col-sm-7">
                      <a title="Nuevo" href="" data-toggle="modal" data-target="#modal_agregar_proveedor" class="btn btn-primary waves-effect waves-light m-b-5"><i class="fa fa-plus-circle"></i> <span>Nuevo Proveedor<span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="margn">
                  <table id="datatable" class="table">
                    <thead class="thead-dark thead thead1">
                      <tr class="tr tr1">
                        <th class="th th1" scope="col">Nombre</th>
                        <th class="th th1" scope="col">Empresa</th>
                        <th class="th th1" scope="col">Rubro</th>
                        <th class="th th1" >Acción</th>
                      </tr>
                    </thead>
                    <tbody class="tbody tbody1">
                        <?php 
                          foreach ($datos->result() as $proveedor) {
                            $id = $proveedor->idProveedor;
                            $nombre = '"'.$proveedor->nombreCompleto.'"';
                            $empresa = '"'.$proveedor->nombreEmpresa.'"';
                            $rubro = '"'.$proveedor->rubro.'"';
                            $telefono = '"'.$proveedor->telefono.'"';
                            $email = '"'.$proveedor->email.'"';
                            $direccion = '"'.$proveedor->direccionEmpresa.'"';
                            $descripcion = '"'.$proveedor->descripcion.'"';
                            $fecha = '"'.$proveedor->fechaRegistro.'"';

                            if ($proveedor->estado != 0 ){
                        ?>
                          <tr class="tr tr1">
                            <td class="td td1"><?= $proveedor->nombreCompleto?></td>
                            <td class="td td1"><?= $proveedor->nombreEmpresa?></td>
                            <td class="td td1"><?= $proveedor->rubro?></td>
                            <td class="td td1">
                          <?php 
                            echo "<a onclick='detalleProveedor($id, $nombre, $empresa, $rubro, $telefono, $email, $direccion, $descripcion, $fecha)' title='Ver' href='' data-toggle='modal' data-target='#modal_ver_proveedor' class='waves-effect waves-light ver'><i class='fa fa-eye'></i></a>";

                            echo "<a title='Actualizar' href='' onclick='actualizarProveedor($id, $nombre, $empresa, $rubro, $telefono, $email, $direccion, $descripcion, $fecha)' data-toggle='modal' data-target='#modal_actualizar_proveedor' class='waves-effect waves-light ver'><i class='fa fa-edit '></i></a>";
                            echo "<a title='Eliminar' onclick='Delete($id)' class='waves-effect waves-light eliminar' data-id='$id' data-toggle='modal' data-target='#modal_eliminar_proveedor'><i class='fa fa-times-circle'></i></a>";
                          ?>
                              

                              
                                </td>
                              </tr>
                            <?php }} ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
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
<div class="modal fade" id="modal_agregar_proveedor" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Datos del proveedor</h4>
          </div>
          <div class="modal-body">
              <form id="DProveedor" method="post" action="<?= base_url() ?>Proveedores/GuardarProveedor">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="nombre_proveedor">Nombre completo</label>
                            <input type="text" value="" class="form-control" id="nombre_proveedor" name="nombre_proveedor" placeholder="Nombre completo del proveedor" required data-parsley-required-message="Digite el nombre del proveedor">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="nombre_empresa">Nombre de la empresa</label>
                            <input type="text" value="" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Nombre completo de la empresa" required data-parsley-required-message="Digite el nombre de la empresa">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="rubro_empresa">Rubro</label>
                            <select name="rubro_empresa" id="rubro_empresa" class="select" required data-parsley-required-message="Seleccione un rubro">
                              <option value="">Seleccione un tipo de proceso</option>
                              <option value="Textil">Textil</option>
                              <option value="Construcción, estructuras metálicas">Construcción, estructuras metálicas</option>
                              <option value="Suministros Eléctricos">Suministros Eléctricos</option>
                              <option value="Pinturas">Pinturas</option>
                              <option value="Imprenta">Imprenta</option>
                              <option value="Muebles en madera">Muebles en madera</option>
                            </select>
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="telefono_empresa">Teléfono</label>
                            <input type="text" value="" class="form-control" id="telefono_empresa" name="telefono_empresa" placeholder="Teléfono de la empresa" required data-parsley-required-message="Digite el número de teléfono">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="correo_empresa">Correo electrónico</label>
                            <input type="email" value="" class="form-control" id="correo_empresa" name="correo_empresa" placeholder="Correo electronico de la empresa" required data-parsley-required-message="Digite el correo electrónico">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="direccion_empresa">Dirección de la empresa</label>
                            <input type="text" value="" class="form-control" id="direccion_empresa" name="direccion_empresa" placeholder="Direccion de la empresa" required data-parsley-required-message="Digite la dirección de la empresa">
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <label for="descripcion_empresa">Descripción</label>
                            <textarea class="form-control resize" rows="3" id="descripcion_empresa" name="descripcion_empresa" required data-parsley-required-message="Digite la descripcion de la empresa"></textarea>
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->
                 


                  <div align="center">
                      <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Guardar</button>
                    
                    <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cancelar</button>
                  </div>
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
<!-- Ventana Modal para ver datos de los proveedores-->
<!-- ============================================================== -->
<div class="modal fade" id="modal_ver_proveedor" role="dialog">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Detalle del proveedor</h4>
          </div>
          <div class="modal-body">
              <table class="table" id="detalleProveedor">
                
              </table>

              <div align="center">
                <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar </button>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana Modal para ver actualizar proveedor-->
<!-- ============================================================== -->
<div class="modal fade" id="modal_actualizar_proveedor" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Datos del proveedor</h4>
          </div>
          <div class="modal-body">
              <form id="DProveedor" method="post" action="<?= base_url() ?>Proveedores/ActualizarProveedor">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="nombre_proveedor">Nombre completo</label>
                            <input type="text" value="" class="form-control" id="nombre_proveedorA" name="nombre_proveedor" placeholder="Nombre completo del proveedor" required data-parsley-required-message="Digite el nombre del proveedor">
                            <input type="hidden" value="" class="form-control" id="id_proveedorA" name="id_proveedor" >
                      </div>
                      <div class="form-group col-md-4">
                            <label for="nombre_empresa">Nombre de la empresa</label>
                            <input type="text" value="" class="form-control" id="nombre_empresaA" name="nombre_empresa" placeholder="Nombre completo de la empresa" required data-parsley-required-message="Digite el nombre de la empresa">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="rubro_empresa">Rubro</label>
                            <select name="rubro_empresa" id="rubro_empresaA" class="form-control" required data-parsley-required-message="Seleccione un rubro">
                              <option value="">Seleccione un tipo de proceso</option>
                              <option value="Textil">Textil</option>
                              <option value="Construcción, estructuras metálicas">Construcción, estructuras metálicas</option>
                              <option value="Suministros Eléctricos">Suministros Eléctricos</option>
                              <option value="Pinturas">Pinturas</option>
                              <option value="Imprenta">Imprenta</option>
                              <option value="Muebles en madera">Muebles en madera</option>
                            </select>
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="telefono_empresa">Teléfono</label>
                            <input type="text" value="" class="form-control" id="telefono_empresaA" name="telefono_empresa" placeholder="Teléfono de la empresa" required data-parsley-required-message="Digite el número de teléfono">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="correo_empresa">Correo electrónico</label>
                            <input type="email" value="" class="form-control" id="correo_empresaA" name="correo_empresa" placeholder="Correo electronico de la empresa" required data-parsley-required-message="Digite el correo electrónico">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="direccion_empresa">Dirección de la empresa</label>
                            <input type="text" value="" class="form-control" id="direccion_empresaA" name="direccion_empresa" placeholder="Direccion de la empresa" required data-parsley-required-message="Digite la dirección de la empresa">
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <label for="descripcion_empresa">Descripción</label>
                            <textarea class="form-control resize" rows="3" id="descripcion_empresaA" name="descripcion_empresa" required data-parsley-required-message="Digite la descripcion de la empresa"></textarea>
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->
                 


                  <div align="center">
                      <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Actualizar </button>
                    
                    <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cancelar</button>
                  </div>
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
<div class="modal fade" id="modal_eliminar_proveedor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
    <form  action="<?= base_url()?>Proveedores/EliminarProveedor" method="GET">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="mySmallModalLabel">
                <i class="fa fa-warning fa-lg text-danger"></i>
            </h4>
        </div>
            <div class="modal-body">
              <input type="hidden" id="idProveedor" name='id'>
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

    $('#DProveedor').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  });

  }

  function detalleProveedor(id, nombre, empresa, rubro, telefono, email, direccion, descripcion, fecha)
  {
    $("#detalleProveedor").empty(); 
    fila = '';
    fila += '<tr>';
    fila +=  '<td><p><strong>Nombre del proveedor</strong></p>';
    fila +=  '<p>'+ nombre +'</p></td>';
    fila +=  '<td><p><strong>Nombre de la empresa</strong></p>';
    fila +=  '<p>'+empresa+'</p></td>';
    fila +=  '<td><p><strong>Rubro de la empresa</strong></p>';
    fila +=  '<p>'+rubro+'</p></td>';
    fila += '</tr>';

    fila += '<tr>';
    fila +=  '<td><p><strong>Teléfono del proveedor</strong></p>';
    fila +=  '<p>'+ telefono +'</p></td>';
    fila +=  '<td><p><strong>Email de la empresa</strong></p>';
    fila +=  '<p>'+email+'</p></td>';
    fila +=  '<td><p><strong>Dirección de la empresa</strong></p>';
    fila +=  '<p>'+direccion+'</p></td>';
    fila += '</tr>';

    fila += '<tr>';
    fila +=  '<td colspan="3"><p><strong>Descripción del proveedor</strong></p>';
    fila +=  '<p>'+ descripcion +'</p></td>';

    fila += '</tr>';

    $("#detalleProveedor").append(fila);
  }

  function actualizarProveedor(id, nombre, empresa, rubro, telefono, email, direccion, descripcion, fecha)
  {
    document.getElementById('id_proveedorA').value=id;
    document.getElementById('nombre_proveedorA').value=nombre;
    document.getElementById('nombre_empresaA').value=empresa;
    document.getElementById('rubro_empresaA').value=rubro;
    document.getElementById('telefono_empresaA').value=telefono;
    document.getElementById('correo_empresaA').value=email;
    document.getElementById('direccion_empresaA').value=direccion;
    document.getElementById('descripcion_empresaA').value=descripcion;
  }

  function Delete(id){
        $('#idProveedor').val(id);
  }
</script>