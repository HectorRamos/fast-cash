            <?php if($this->session->flashdata("succes")):?>
            	<script type="text/javascript">
            		$(document).ready(function(){
            		$.Notification.autoHideNotify('success', 'top right', 'Aviso!', '<?php echo $this->session->flashdata("succes")?>');
            		});
            	</script>
            <?php endif; ?>
            <?php if($this->session->flashdata("errorr")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('error', 'top right', 'Aviso!', '<?php echo $this->session->flashdata("errorr")?>');
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
                                    <li><a href="<?= base_url() ?>Home/main">Inicio</a></li>
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
						                      <a title="Nuevo" data-toggle="tooltip" href="<?= base_url();?>Clientes/" class="btn btn-success"><i class="fa fa-plus-circle"></i> <span>Nuevo Cliente<span></a>
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
												      <th class="th th1" scope="col">Código Cliente</th>
												      <th class="th th1" scope="col">Nombre</th>
												      <th class="th th1" scope="col">Apellido</th>
												      <th class="th th1" scope="col">Estado</th>
                              <th class="th th1" scope="col">Tipo</th>
												      <th class="th th1">Acción</th>
												  </thead>
												  <tbody class="tbody tbody1">
												  <?php
												  foreach ($registro->result() as $clientes) {
												  $tipo = "'".$clientes->Tipo_Cliente."'"
												  ?>
												    <tr class="tr tr1">
												      <td class="td td1" width="150"><b><?= $clientes->Id_Cliente?></b></td>
												      <td class="td td1"><?= $clientes->Nombre_Cliente?></td>
												      <td class="td td1"><?= $clientes->Apellido_Cliente?></td>
												      <td class="td td1" width="100"><?= $clientes->Condicion_Actual_Cliente?></td>
                              <td class="td td1" width="100"><?= $clientes->Tipo_Cliente?></td>
												      <!-- <td><a onclick="confirmar(<?= $clientes->Id_Cliente?>)" class="btn btn-danger">Eliminar</a> -->
												      <td class="td td1">
												      	<a title="Ver historial" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="MostrarInfo(<?= $clientes->Id_Cliente?>, <?php echo $tipo;?>)" class="waves-effect waves-light ver"><i class="fa fa-info-circle"></i></a>

												      <a title="Editar" data-toggle="tooltip" href="<?=base_url()?>Clientes/Editar?id=<?= $clientes->Id_Cliente?>" class="waves-effect waves-light editar"><i class="fa fa-pencil"></i></a>
												      <a title="Eliminar" class="waves-effect waves-light eliminar" data-id="<?= $clientes->Id_Cliente?>" data-nombre="<?= $clientes->Nombre_Cliente?> <?= $clientes->Apellido_Cliente?>" data-toggle="modal" data-target=".modal_eliminar_cliente"><i class="fa fa-times-circle"></i></a>
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
                        </div> <!-- End Row -->

                    </div>
                </div>
            </div>

<!-- <script type="text/javascript"> -->
<!-- 	function confirmar (val) {
  //alert("confirmar");
//return confirm("esta seguro que desea eliminar");

		if (!confirm("¿Está seguro de que desea eliminar el registro?")) {
		return false;
		}
		else {
		document.location= 'Eliminar?id='+val;
		return true;
		}
		} -->
<!-- </script> -->

        <!--MODAL PARA MOSTRAR LA INFORMACION COMPLETA-->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myLargeModalLabel"><i class="fa fa-list-alt fa-lg"></i> Información</h4>
                    </div>

                        <div class="modal-body" >
                        <div id="divInfo">
                            <input type="text" name='nombre' id="id" class="style" readonly='readonly'>
                        </div>
                        <div id="DivEmpleado" style="display:none;">
                        <form method="POST" action="<?= base_url()?>Clientes/datosLaborales">
                        
                         <div class="form-row">
                         <!--*******************************CAMPOS OCULTOS**********************************-->
                              <input type="hidden"  id="Fk_Id_Cliente" name="Fk_Id_Cliente" value="<?php //echo $dato->Id_Cliente; ?>">
                              
                              <!--FIN DE CAMPOS OCULTOS-->
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre de la empresa</label>
                                          <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Empresa" placeholder="Nombre de la empresa">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Cargo que desempeña</label>
                                          <input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Cargo que desempeña">
                                    </div>
                              </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Direccion de la empresa</label>
                                          <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Telefono</label>
                                          <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Apellido del cliente">
                                    </div>
                        </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Rubro de la empresa que en que trabaja</label>
                                          <input type="text" class="form-control" id="Rubro" name="Rubro" placeholder="Nombre del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Ingreso Mensual</label>
                                          <input type="text" class="form-control" id="Ingreso_Mensual" name="Ingreso_Mensual" placeholder="Apellido del cliente">
                                    </div>
                        </div>
                         <div class="form-row">
                                    <div class="form-group col-md-12">
                                          <label for="">Observaciones</label>
                                           <textarea id="Observaciones" name="Observaciones" class="form-control"></textarea>
                                    </div>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>

                            </form>
                            </div>
                            <div id="DivEmpresario" style="display:none;">
                            <form method="POST" action="<?= base_url()?>Clientes/datosNegocio">
                       
                         <div class="form-row">
                         <!--*******************************CAMPOS OCULTOS**********************************-->
                              <input type="text" hidden id="Fk_Id_Cliente2" name="Fk_Id_Cliente">
                              
                              <!--FIN DE CAMPOS OCULTOS-->
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre del negocio</label>
                                          <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Negocio" placeholder="Nombre del negocio">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">NIT</label>
                                          <input type="text" class="form-control" id="NIT" name="NIT" placeholder="NIT">
                                    </div>
                              </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Numero de Registro del Contribuyente(NRC)</label>
                                          <input type="text" class="form-control" id="NRC" name="NRC" placeholder="Numero de Registro del Contibuyente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Giro</label>
                                          <input type="text" class="form-control" id="Giro" name="Giro" placeholder="Giro del negocio">
                                    </div>
                        </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Direccio del negocio</label>
                                          <input type="text" class="form-control" id="Direccion_Negocio" name="Direccion_Negocio" placeholder="Direccion del negocio">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Ingreso Mensual</label>
                                          <input type="text" class="form-control" id="Ingreso_Mensual" name="Ingreso_Mensual" placeholder="Apellido del cliente">
                                    </div>
                        </div>
                         <div class="form-row">
                                    <div class="form-group col-md-12">
                                          <label for="">Tipo de factura</label>
                                          <input type="text" class="form-control" id="Tipo_Factura" name="Tipo_Factura" placeholder="Apellido del cliente">
                                    </div>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>

                            </form>
                       </div>

                       </div>
                        
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

                    <div class="modal-body" id="divInfo">
                        <input type="text" name='nombre' id="id" class="" readonly='readonly'>
                    </div>
                    <div  align="center">
	                    <button type="button" class="btn btn-default block waves-effect waves-light" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
	                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!--FIN DEL MODAL PARA MOSTRAR DATOS-->
	    <div class="modal fade modal_eliminar_cliente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	        <div class="modal-dialog modal-sm">
	            <div class="modal-content">
	                <form name="frmeliminarcliente" action="<?= base_url();?>Clientes/Eliminar/" id="frmeliminarcliente" method="GET">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title" id="mySmallModalLabel">
	                    	<i class="fa fa-warning fa-lg"></i> 
	                    	<input type="text" name='nombre' class="style" readonly='readonly'>
	                    </h4>
	                </div>
	                <div class="modal-body">
	                  <input type="hidden" name='id'>
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
		$('.modal_eliminar_cliente').on('show.bs.modal', function(e) {
		          var bookIdCliente = $(e.relatedTarget).data('id');  
		          var bookNombreCliente = $(e.relatedTarget).data('nombre');  
		          document.frmeliminarcliente.id.value = bookIdCliente;       
		          document.frmeliminarcliente.nombre.value = bookNombreCliente; 
		      });

		</script>

	    <script type="text/javascript">
		//funcion para cargar los datos en modal con ajax
		function MostrarInfo(id, TipoCliente){

                    document.getElementById('divInfo').innerHTML= "";
			//alert(TipoCliente);
			if(TipoCliente==""){
				html="<div class='alert alert-danger'>El registro de este cliente esta incompleto no selecciono un tipo usted puede seleccionar entre Empleado o Empresario para corregir este problema vaya a la seccion de editar informacion del cliente y asigne un tipo</div>";
				document.getElementById('divInfo').innerHTML=html;
			}
			else{
			var html ="<div class='row'><div class='col-sm-12'><ul><h5><b>Información del Cliente</b></h5><ol>";
			 $.ajax({
             url: "obtenerInfoCliente",
             type: "POST",
             data: {ID:id, tipo:TipoCliente},
            success:function(respuesta){
                var registro = eval(respuesta);
                    if (registro.length > 0)
                    {
                    	html +="<div class='col-xs-6'><label>Nombre:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Apellido:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Apellido_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Condicion actual:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Condicion_Actual_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Estado civil:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Estado_Civil_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Genero:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Genero_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Telefono Fijo:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono_Fijo_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Telefono Celular:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono_Celular_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Domicilio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Domicilio_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Fecha de nacimiento:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Fecha_Nacimiento_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Zona:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Zona_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>DUI:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['DUI_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>NIT:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['NIT_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Fecha de ingreso al sistema:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Fecha_Registro_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Departamento:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Departamento']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Municipio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Municipio']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Profesion u Oficio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Profesion_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Tipo de cliente:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Tipo_Cliente']+"'></div>";

                    	html +="<div class='col-xs-6'><label>Observaciones:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Observaciones_Cliente']+"'></div>";
                    	html+="</ol></ul></div></div>";
                    	html+="<hr>"

                    	if(registro[0]['Tipo_Cliente']=="Empleado"){
                    		html+="<div class='row'><div class='col-sm-12'><ul><h5><b>Información Laboral</b></h5><ol>";
                    		html +="<div class='col-xs-6'><label>Nombre de la empresa:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Empresa']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Cargo:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Cargo']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Direccion:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Direccion']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Telefono:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Rubro:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Telefono']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Igreso Mensual:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Ingreso_Mensual']+"'></div>";
                    		html+="</ol></ul></div></div>"
                    	}
                    	else if(registro[0]['Tipo_Cliente']=="Empresario"){
                    		html+="<div class='row'><div class='col-sm-12'><ul><h5><b>Información del Negocio propio</b></h5><ol>";

                    		html +="<div class='col-xs-6'><label>Nombre del Negocio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Nombre_Negocio']+"'></div>";

                    		html +="<div class='col-xs-6'><label>NIT:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['NIT']+"'></div>";

                    		html +="<div class='col-xs-6'><label>NRC:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['NRC']+"'></div>";

                    		html +="<div class='col-xs-6'><label>Tipo de factura emitida:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Tipo_Factura']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Giro:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Giro']+"'></div>";


                    		html +="<div class='col-xs-6'><label>Direccion del negocio: </label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Direccion_Negocio']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Ingreso Mensual: </label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Ingreso_Mensual']+"'></div>";
                    		html+="</div>";
                           

                    		html +="<div class='col-xs-6'><label>Direccion del negocio:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Direccion_Negocio']+"'></div>";
                    		html +="<div class='col-xs-6'><label>Ingreso Mensual:&nbsp;</label><input type='text' name='nombre' class='style' readonly='readonly' value='"+registro[0]['Ingreso_Mensual']+"'></div>";
                    		html+="</ol></ul></div></div>"

                    	}
                         document.getElementById('DivEmpleado').style.display='none';
                            document.getElementById('DivEmpresario').style.display='none';

                    	//document.getElementById('divInfo').innerHTML= html;
                    }
                    else {


                    	html="<div class='alert alert-danger'><p>El cliente no tiene completa su informacion de: "+TipoCliente+" complear en el siguiente formulario</p></div>";
                        if (TipoCliente=="Empleado") {
                            document.getElementById('DivEmpleado').style.display='block';
                            document.getElementById('DivEmpresario').style.display='none';
                            ;
                        }
                        else if(TipoCliente=="Empresario"){
                            document.getElementById('DivEmpleado').style.display='none';
                            document.getElementById('DivEmpresario').style.display='block';
                            document.getElementById('Fk_Id_Cliente2').value=id;
                        }

                    	//html="<div class='alert alert-danger'></div>";

                    }
                    document.getElementById('Fk_Id_Cliente').value=id

                    document.getElementById('divInfo').innerHTML= html;
                    
                }
             }); 
		}
	}
</script>

