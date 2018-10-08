<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/main">Inicio</a></li>
            <li class="active">Gestión de Empleados</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <!-- <h3 class="panel-title">Registro de clientes</h3> -->
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-5">
                    <h3 class="panel-title">Registro de Empleados</h3>
                  </div>
                  <div class="col-sm-7">
                    <a title="Nuevo" data-toggle="tooltip" href="<?= base_url();?>EmpleadosController/FormCrearEmpleado" class="btn btn-success"><i class="fa fa-plus-circle"></i> <span>Nuevo Empleado<span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <table id="datatable" class="table">
                    <thead class="thead-dark thead thead1">
                      <tr class="tr tr1">
                        <th class="th th1" scope="col">Código Empleado</th>
                        <th class="th th1" scope="col">Nombre</th>
                        <th class="th th1" scope="col">Apellido</th>
                        <th class="th th1" scope="col">Cargo</th>
                        <th class="th th1">Acción</th>
                      </tr>
                    </thead>
                    <tbody class="tbody tbody1">

                      <?php foreach ($registros->result() as $datos) { ?>
                      <tr class="tr tr1">
                        <td class="td td1" width="150"><b><?= $datos->idEmpleado?></b></td>
                        <td class="td td1"><?= $datos->nombreEmpleado?></td>
                        <td class="td td1"><?= $datos->apellidoEmpleado?></td>
                        <td class="td td1" width="100"><?= $datos->cargo?></td>
                        <td class="td td1">
                          <a title="Ver historial" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="DetalleEmpleado(<?= $datos->idEmpleado?>)" class="waves-effect waves-light ver"><i class="fa fa-info-circle"></i></a>

                          <a title="Editar" data-toggle="tooltip" href="<?=base_url()?>Clientes/Editar?id=<?= $datos->idEmpleado?>" class="waves-effect waves-light editar"><i class="fa fa-pencil"></i></a>

                          <a title="Eliminar" class="waves-effect waves-light eliminar" data-id="<?= $datos->idEmpleado?>" data-nombre="<?= $datos->nombreEmpleado?> <?= $datos->apellidoEmpleado?>" data-toggle="modal" data-target=".modal_eliminar_cliente"><i class="fa fa-times-circle"></i></a>
                        </td>
                      </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Row -->

    </div>
  </div>
</div>
<!--MODAL PARA MOSTRAR LA INFORMACION COMPLETA-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myLargeModalLabel"><i class="fa fa-list-alt fa-lg"></i> Información</h4>
      </div>
      <div class="modal-body" >
        <div id="divInfo"></div>
        <div  align="center">
          <button type="button" class="btn btn-default block waves-effect waves-light" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- script para cargar datos en el modal de detalles -->
<script type="text/javascript">
  function DetalleEmpleado(id)
  {
    var html ="<div class='row'><div class='col-sm-12'><ul><h5><b>Información del Empleado</b></h5><ol>";
    $.ajax({
         url: "DetalleEmpleado",
         type: "POST",
         data: {id:id},
          success:function(exito)
          {
            var registro = eval(exito);
            if (registro.length > 0)
            {
              html +="<div class='col-xs-6'><label>Nombre:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['nombreEmpleado']+"'></div>";

              html +="<div class='col-xs-6'><label>Apellido:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['apellidoEmpleado']+"'></div>";

              html +="<div class='col-xs-6'><label>Fecha de nacimiento:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['fechaNacimientoEmpleado']+"'></div>";

              html +="<div class='col-xs-6'><label>Genero:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['genero']+"'></div>";

              html +="<div class='col-xs-6'><label>DUI:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['dui']+"'></div>";

              html +="<div class='col-xs-6'><label>NIT:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['nit']+"'></div>";

              html +="<div class='col-xs-6'><label>Domicilio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['direccion']+"'></div>";

              html +="<div class='col-xs-6'><label>Telefono:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['telefono']+"'></div>";

              html +="<div class='col-xs-6'><label>Email:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['email']+"'></div>";

              html +="<div class='col-xs-6'><label>Profesión:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['profesion']+"'></div>";

              html +="<div class='col-xs-6'><label>Cargo:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['cargo']+"'></div>";

              document.getElementById('divInfo').innerHTML= html;
            }
          }
        });
  }
</script>