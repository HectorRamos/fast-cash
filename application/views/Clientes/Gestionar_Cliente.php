            <?php if($this->session->flashdata("informa")):?>
            	<script type="text/javascript">
            		$(document).ready(function(){
            		$.Notification.autoHideNotify('info', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("informa")?>');
            		});
            	</script>
            <?php endif; ?>
            <?php if($this->session->flashdata("actualizado")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('warning', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("actualizado")?>');
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
            <?php if($this->session->flashdata("guardar")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('success', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("guardar")?>');
                });
              </script>
            <?php endif; ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <h4 class="pull-left page-title">Clientes</h4> -->
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
                                    <li class="active">Gestión de clientes</li>
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
            						                    <h3 class="panel-title">Registro de clientes</h3>
            						                  </div>
            						                  <div class="col-sm-7">
            						                      <a title="Nuevo" data-toggle="tooltip" href="<?= base_url();?>Clientes/" class="btn btn-primary waves-effect waves-light m-b-5"><i class="fa fa-plus-circle"></i> <span>Nuevo Cliente<span></a>
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
                      												      <th class="th th1" scope="col">Código Cliente</th>
                      												      <th class="th th1" scope="col">Nombre</th>
                      												      <th class="th th1" scope="col">Apellido</th>
                      												      
                                                    <th class="th th1" scope="col">Tipo</th>
                      												      <th class="th th1">Acción</th>
                      												  </thead>
                      												  <tbody class="tbody tbody1">
                      												  <?php
                      												  foreach ($registro->result() as $clientes) {
                      												  $tipo = "'".$clientes->Tipo_Cliente."'"
                      												  ?>
                      												    <tr class="tr tr1">
                      												      <td class="td td1" width="150"><b><?= $clientes->Codigo_Cliente?></b></td>
                      												      <td class="td td1"><?= $clientes->Nombre_Cliente?></td>
                      												      <td class="td td1"><?= $clientes->Apellido_Cliente?></td>
                      												     
                                                    <td class="td td1" width="100"><?= $clientes->Tipo_Cliente?></td>
                      												      <!-- <td><a onclick="confirmar(<?= $clientes->Id_Cliente?>)" class="btn btn-danger">Eliminar</a> -->
                      												      <td class="td td1">
                      												      	<a title="Ver historial" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="MostrarInfo(<?= $clientes->Id_Cliente?>, <?php echo $tipo;?>)" class="waves-effect waves-light ver"><i class="fa fa-info-circle"></i></a>

                        												      <a title="Editar" data-toggle="tooltip" href="<?=base_url()?>Clientes/Editar?id=<?= $clientes->Id_Cliente?>" class="waves-effect waves-light editar"><i class="fa fa-pencil"></i></a>

                        												      <a title="Eliminar" onclick="Delete(<?= $clientes->Id_Cliente?>)" class="waves-effect waves-light eliminar" data-id="<?= $clientes->Id_Cliente?>" data-toggle="modal" data-target=".modal_eliminar_cliente"><i class="fa fa-times-circle"></i></a>
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
                        </div> <!-- End Row -->
                    </div>
                </div>
            </div>

        <!--MODAL PARA MOSTRAR LA INFORMACION COMPLETA-->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="limpiar1()">×</button>
                        <h4 class="modal-title" id="myLargeModalLabel"><i class="fa fa-list-alt fa-lg"></i> Información</h4>
                    </div>

                    <div class="modal-body" >
                        <div id="divInfo">
                          <input type="hidden" name='nombre' id="id" class="style" readonly='readonly'>
                        </div>
                        <div id="DivEmpleado" style="display:none;">
                          <form method="POST" action="<?= base_url()?>Clientes/datosLaborales">
                            <div class="margn">
                              <div class="row">
                                <input type="hidden" id="Fk_Id_Cliente" name="Fk_Id_Cliente" value="<?php //echo $dato->Id_Cliente; ?>">
                                <div class="form-group col-md-4">
                                  <label for="Nombre_Empresa">Nombre de la empresa</label>
                                  <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Empresa" placeholder="Nombre de la empresa">
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Cargo">Cargo que desempeña</label>
                                  <input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Cargo que desempeña">
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Telefono">Teléfono</label>
                                  <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Teléfono">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="Direccion">Dirección de la empresa</label>
                                  <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Dirección de la empresa">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="Rubro">Rubro de la empresa en que trabaja</label>
                                  <input type="text" class="form-control" id="Rubro" name="Rubro" placeholder="Rubro de la empresa">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-12">
                                  <label for="Observaciones">Observaciones</label>
                                  <textarea id="Observaciones" rows="3" name="Observaciones" class="form-control resize"></textarea>
                                </div>
                              </div>
                              <div  align="center">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-save fa-lg"></i> Guardar</button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-b-5"><i class="fa fa-refresh fa-lg"></i> Limpiar</button>
                                <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal" onclick="limpiar2()"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                              </div>
                            </div>
                          </form>
                        </div>

                        <div id="DivEmpresario" style="display:none;">
                          <form method="POST" action="<?= base_url()?>Clientes/datosNegocio">
                            <div class="margn">
                              <div class="row">
                                <input type="hidden" id="Fk_Id_Cliente2" name="Fk_Id_Cliente">
                                <div class="form-group col-md-6">
                                  <label for="Nombre_Negocio">Nombre del negocio</label>
                                  <input type="text" class="form-control" id="Nombre_Negocio" name="Nombre_Negocio" placeholder="Nombre del negocio">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="NIT">NIT</label>
                                  <input type="text" class="form-control" id="NIT" name="NIT" placeholder="NIT" data-mask="9999-999999-999-9">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="NRC">Número de Registro del Contribuyente(NRC)</label>
                                  <input type="text" class="form-control" id="NRC" name="NRC" placeholder="Número de Registro del Contibuyente">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="Giro">Giro</label>
                                  <input type="text" class="form-control" id="Giro" name="Giro" placeholder="Giro del negocio">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-7">
                                  <label for="Direccion_Negocio">Dirección del negocio</label>
                                  <input type="text" class="form-control" id="Direccion_Negocio" name="Direccion_Negocio" placeholder="Dirección del negocio">
                                </div>
                                <div class="form-group col-md-5">
                                  <label for="Tipo_Factura">Tipo de factura</label>
                                  <input type="text" class="form-control" id="Tipo_Factura" name="Tipo_Factura" placeholder="Tipo de factura">
                                </div>
                              </div>
                              <div align="center">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-save fa-lg"></i> Guardar</button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-b-5"><i class="fa fa-refresh fa-lg"></i> Limpiar</button>
                                <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal" onclick="limpiar3()"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>

                    <div class="modal-body" id="divInfo">
                        <input type="hidden" name='nombre' id="id" class="" readonly='readonly'>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--FIN DEL MODAL PARA MOSTRAR DATOS-->

        <!--MODAL PARA ELIMINAR DATOS-->
	    <div class="modal fade modal_eliminar_cliente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	        <div class="modal-dialog modal-sm">
	            <div class="modal-content">
	                <form name="frmeliminarcliente" action="<?= base_url();?>Clientes/Eliminar/" id="frmeliminarcliente" method="GET">
	                <div>
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title" id="mySmallModalLabel">
	                    	<i class="fa fa-warning fa-lg text-danger"></i> 
	                    </h4>
	                </div>
	                <div class="modal-body">
	                  <input type="text" hidden id="Id" name='id'>
	                  <p align="center">¿Está seguro de eliminar el registro?</p>
	                </div>
	                <div align="center">
	                    <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
	                    <button type="submit" class="btn btn-danger block waves-effect waves-light m-b-5"><i class="fa fa-trash-o fa-lg"></i> Eliminar</button>
	                </div>
	                </form>
	            </div><!-- /.modal-content -->
	        </div><!-- /.modal-dialog -->
	    </div><!-- /.modal -->
      <script type="text/javascript">
    function Delete(id){
      document.getElementById('Id').value=id;
    }
    </script>
      <!-- FIN DEL MODAL PARA ELIMINAR DATOS-->

    <!-- SCRIPT DEL MODAL PARA MOSTRAR DATOS-->
	  <script type="text/javascript">
		//funcion para cargar los datos en modal con ajax
		function MostrarInfo(id, TipoCliente){

      document.getElementById('divInfo').innerHTML= "";
			if(TipoCliente != ""){
			var html ="<div class='margn'><ul><h5><b>Información del Cliente</b></h5><ol>";
			 $.ajax({
             url: "obtenerInfoCliente",
             type: "POST",
             data: {ID:id, tipo:TipoCliente},
            success:function(respuesta){
                var registro = eval(respuesta);
                    if (registro.length > 0)
                    {
                      if(registro[0]['urlImg']==""){
                        html +="<div class='row'><div class='col-sm-12' align='right' style='margin-top: 1px; position:absolute; left: 4px;'><img  class='img-thumbnail img-responsive' width='100' src='<?=base_url()?>plantilla/images/user.png' alt='Imagen del Cliente'></img><br><label style='margin-right: 22px;'>Sin foto</label></div></div>";
                      }
                      else{
                        html +="<div class='row'><div class='col-sm-12' align='right' style='margin-top: 1px; position:absolute; left: 4px;'><img  class='img-thumbnail img-responsive' width='100' src='<?=base_url()?>"+registro[0]['urlImg']+"' alt='Imagen del Cliente'></img><br><label style='margin-right: 33px;'>Foto</label></div></div>";
                      }
                      //html +="<div class='row'><div class='col-sm-6'><label>Condición actual:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Condicion_Actual_Cliente']+"'></div>";
                      html +="<div class='row'><div class='col-sm-6'><label>Nombre:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Cliente']+" "+registro[0]['Apellido_Cliente']+"'></div>";
                      html +="<div class='col-sm-6'><label>Estado civil:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Estado_Civil_Cliente']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>Genero:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Genero_Cliente']+"'></div>";
                    	html +="<div class='col-sm-6'><label>Teléfono Fijo:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono_Fijo_Cliente']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>Teléfono Celular:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono_Celular_Cliente']+"'></div>";
                    	html +="<div class='col-sm-6'><label>Domicilio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Domicilio_Cliente']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>Fecha de nacimiento:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Fecha_Nacimiento_Cliente']+"'></div>";
                    	html +="<div class='col-sm-6'><label>Zona:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Zona_Cliente']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>DUI:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['DUI_Cliente']+"'></div>";
                    	html +="<div class='col-sm-6'><label>NIT:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['NIT_Cliente']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>Correo:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['email']+"'></div>";
                      
                    	html +="<div class='col-sm-6'><label>Departamento:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Departamento']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>Municipio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Municipio']+"'></div>";
                    	html +="<div class='col-sm-6'><label>Profesión u Oficio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Profesion_Cliente']+"'></div></div>";
                      html +="<div class='row'><div class='col-sm-12'><label>Ingreso Mensual:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['ingreso']+"'></div></div>";

                    	html +="<div class='row'><div class='col-sm-6'><label>Tipo de cliente:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Tipo_Cliente']+"'></div>";
                    	html +="<div class='col-sm-6'><label>Observaciones:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Observaciones_Cliente']+"'></div></div>";
                    	html+="</ol></ul>";
                    	html+="<hr>"

                    	if(registro[0]['Tipo_Cliente']=="Empleado"){
                    		html+="<ul><h5><b>Información Laboral</b></h5><ol>";
                    		html +="<div class='row'><div class='col-sm-6'><label>Nombre de la empresa:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Empresa']+"'></div>";
                    		html +="<div class='col-sm-6'><label>Cargo:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Cargo']+"'></div></div>";

                    		html +="<div class='row'><div class='col-sm-6'><label>Dirección:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Direccion']+"'></div>";
                    		html +="<div class='col-sm-6'><label>Teléfono:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono']+"'></div></div>";

                    		html +="<div class='row'><div class='col-sm-6'><label>Rubro:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Rubro']+"'></div>";
                        html +="<div class='col-sm-6'><label>Observaciones:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Observaciones']+"'></div></div>";
                    		
                    		html+="</ol></ul>"
                    	}
                    	else if(registro[0]['Tipo_Cliente']=="Empresario"){
                    		html+="<ul><h5><b>Información del Negocio propio</b></h5><ol>";
                    		html +="<div class='row'><div class='col-sm-6'><label>Nombre del Negocio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Negocio']+"'></div>";
                    		html +="<div class='col-sm-6'><label>NIT:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['NIT']+"'></div></div>";

                    		html +="<div class='row'><div class='col-sm-6'><label>NRC:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['NRC']+"'></div>";
                    		html +="<div class='col-sm-6'><label>Tipo de factura emitida:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Tipo_Factura']+"'></div></div>";

                    		html +="<div class='row'><div class='col-sm-6'><label>Giro:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Giro']+"'></div>";
                    		html +="<div class='col-sm-6'><label>Dirección del negocio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Direccion_Negocio']+"'></div></div>";
                       

                    		
                        html+="</ul>"
                      }
                      else if(registro[0]['Tipo_Cliente']=="Otro"){
                        html+="<div class='alert alert-success'><h4>Cliente con fuente de ingresos diferentes</h4></div>"
                      }
                      html+="<br><div align='center'><button type='button' class='btn btn-default block waves-effect waves-light m-b-5' data-dismiss='modal'><i class='fa fa-close fa-lg'></i> Cerrar</button></div>";
                        document.getElementById('DivEmpleado').style.display='none';
                        document.getElementById('DivEmpresario').style.display='none';
                      //document.getElementById('divInfo').innerHTML= html;
                    }
                    else {
                      html="<div class='alert alert-danger'><p>El cliente no tiene completa su información de: "+TipoCliente+" completar en el siguiente formulario.</p></div>";
                        if (TipoCliente=="Empleado") {
                            document.getElementById('DivEmpleado').style.display='block';
                            document.getElementById('DivEmpresario').style.display='none';
                        }
                        else if(TipoCliente=="Empresario"){
                            document.getElementById('DivEmpleado').style.display='none';
                            document.getElementById('DivEmpresario').style.display='block';
                            document.getElementById('Fk_Id_Cliente2').value=id;
                        }
                      //html="<div class='alert alert-danger'></div>";
                    }
                    html+="</div>";
                    document.getElementById('Fk_Id_Cliente').value=id;
                    document.getElementById('divInfo').innerHTML= html;
                }
             }); 
    }
  }
    function limpiar1(){
        $('#Nombre_Empresa').val("");
        $('#Cargo').val("");
        $('#Direccion').val("");
        $('#Telefono').val("");
        $('#Rubro').val("");
        $('#Observaciones').val("");

        $('#Nombre_Negocio').val("");
        $('#NIT').val("");
        $('#NRC').val("");
        $('#Giro').val("");
        $('#Direccion_Negocio').val("");
        $('#Tipo_Factura').val("");
    }
    function limpiar2(){
        $('#Nombre_Empresa').val("");
        $('#Cargo').val("");
        $('#Direccion').val("");
        $('#Telefono').val("");
        $('#Rubro').val("");
        $('#Observaciones').val("");
    }
    function limpiar3(){
        $('#Nombre_Negocio').val("");
        $('#NIT').val("");
        $('#NRC').val("");
        $('#Giro').val("");
        $('#Direccion_Negocio').val("");
        $('#Tipo_Factura').val("");
    }
</script>
    <!-- FIN DEL SCRIPT DEL MODAL PARA MOSTRAR DATOS-->


