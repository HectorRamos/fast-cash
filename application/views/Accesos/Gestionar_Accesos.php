            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Gestion de los accesos al sistema</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?= base_url() ?>Home/main">Inicio</a></li>
                                    <li class="active">Gestion de los accesos al sistema</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <div class="table-title">
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <h5 class="panel-title">Accesos registrados</h3>
                                          </div>
                                          <div class="col-sm-6">
                                              <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> <span>Nuevo acceso<span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <!--Panel body aqui va la tabla con los datos-->
                                <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                             <table id="datatable" class="table">
                                                  <thead class="thead-dark thead thead1">
                                                    <tr class="tr tr1">
                                                      <th class="th th1" scope="col">Id Estado</th>
                                                      <th class="th th1" scope="col">Estados</th>
                                                      <th class="th th1" scope="col">Descrepcion</th>
                                                      <th class="th th1" >Acción</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php
                                                  foreach ($datos->result() as  $accesos) {
                                                    $accesoN="'".$accesos->tipoAcceso."'";
                                                    $descripcionN="'".$accesos->descripcion."'";
                                                      # code...
                                                  ?>
                                                  <tr class="tr tr1">
                                                  <td class="td td1"  width="150"><?= $accesos->idAcceso?></td>
                                                  <td class="td td1"  width="125"><?= $accesos->tipoAcceso?></td>
                                                  <td class="td td1"  width="125"><?= $accesos->descripcion?></td>
                                                  <td class="td td1"  width="100">
                                                      <a onclick="Edit(<?= $accesos->idAcceso?>, <?= $accesoN?>,<?= $descripcionN?>)" title="Editar" data-toggle="modal" data-target="#myModalEdit" class="waves-effect waves-light editar"><i class="fa fa-pencil"></i></a>
                                                      <a onclick="del(<?= $accesos->idAcceso?>, <?= $accesoN?>)" title="Eliminar" class="waves-effect waves-light eliminar"  data-toggle="modal" data-target=".modal_eliminar_estado"><i class="fa fa-times-circle"></i></a>
                                                      </td>
                                                  </tr>
                                                  <?php
                                                  }


                                                  ?>
                                                      
                                                  </tbody>
                                                  </table>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--MODAL PARA INSERTAR-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Insertar un nuevo estado</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= base_url()?>Accesos/Guardar">
                        <div class="form-group clearfix">

                        <label class="col-lg-2 control-label" for="name">Tipo de acceso</label>
                        <div class="col-lg-10">
                            <input type="text" required="No puede dejar este campo vacio" class="form-control" id="tipoAcceso" name="tipoAcceso" placeholder="Nuevo tipo de acceso">
                        </div>
                        </div>
                        <br>
                        <div class="form-group clearfix">
                        <label class="col-lg-2 control-label" for="name">Descripcion </label>
                        <div class="col-lg-10">
                            <input type="text" required="No puede dejar este campo vacio" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del nuevo tipo de acceso">
                        </div>
                        </div>
                <a  class="btn btn-default waves-effect" data-dismiss="modal" onclick="limpiar()">cancelar</a>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
            </form>                                  
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

<!-- MODAL PARA EDITAR --> 

<div id="myModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Editar informacion de acceso</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= base_url()?>Accesos/Editar">
                <div class="form-group clearfix">

                        <label class="col-lg-2 control-label" for="name">Tipo de acceso</label>
                        <div class="col-lg-10">
                            <input type="text" required="No puede dejar este campo vacio" class="form-control" id="tipoAcceso2" name="tipoAcceso" placeholder="Nuevo tipo de acceso">
                             <input type="text" required="No puede dejar este campo vacio" id="idAcceso" name="idAcceso" hidden>
                        </div>
                        </div>
                        <br>
                        <div class="form-group clearfix">
                        <label class="col-lg-2 control-label" for="name">Descripcion </label>
                        <div class="col-lg-10">
                            <input type="text" required="No puede dejar este campo vacio" class="form-control" id="descripcion2" name="descripcion" placeholder="Descripcion del nuevo tipo de acceso">
                        </div>
                        </div>
                <a  class="btn btn-default waves-effect" data-dismiss="modal" onclick="limpiar()">cancelar</a>
                <button type="submit" class="btn btn-warning editar waves-effect waves-light">Editar</button>
            </form>                                  
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

        <!--FIN DEL MODAL PARA MOSTRAR DATOS-->
<div class="modal fade modal_eliminar_estado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form name="frmeliminarcliente" action="<?= base_url();?>Accesos/Eliminar/" id="frmeliminarcliente" method="GET">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">
                        <i class="fa fa-warning fa-lg"></i> 
                        <input type="text" id="nombre"  class="style" readonly='readonly'>
                    </h4>
                </div>
                    <div class="modal-body">
                      <input type="text" hidden id="id" name='id'>
                      <!-- ¿Está seguro de que desea eliminar el registro? -->
                      <p align="center">¿Está seguro de eliminar el registro?</p>
                    </div>
                    <div  align="center">
                        <button type="button" class="btn btn-default block waves-effect waves-light" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                        <button type="submit" class="btn btn-danger block waves-effect waves-light"><i class="fa fa-trash-o fa-lg"></i> Eliminar</button>
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

<script type="text/javascript">
    function Edit(id, estado, des){
        $('#tipoAcceso2').val(estado);
        $('#idAcceso').val(id);
        $('#descripcion2').val(des);
    }
    function limpiar(){
        $('#tipoAcceso').val("");
        $('#idAcceso').val("");
        $('#descripcion').val("");
    }


   function del(id, estado){
        $('#id').val(id);
        $('#nombre').val(estado);

   }


</script>




                                    

