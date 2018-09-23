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
                                <h4 class="pull-left page-title">Clientes</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Inicio</a></li>
                                    <li class="active">Registro de clientes</li>
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
						                      <a title="Nuevo" data-toggle="tooltip" href="<?= base_url();?>Clientes/" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <span>Nuevo Cliente<span></a>
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
												      <th class="th th1">Acción</th>
												    </tr>
												  </thead>
												  <tbody class="tbody tbody1">
												  <?php
												  foreach ($registro->result() as $clientes) {
												  ?>
												    <tr class="tr tr1">
												      <td class="td td1" width="150"><b><?= $clientes->Id_Cliente?></b></td>
												      <td class="td td1"><?= $clientes->Nombre_Cliente?></td>
												      <td class="td td1"><?= $clientes->Apellido_Cliente?></td>
												      <td class="td td1" width="100"><?= $clientes->Condicion_Actual_Cliente?></td>
												      <!-- <td><a onclick="confirmar(<?= $clientes->Id_Cliente?>)" class="btn btn-danger">Eliminar</a> -->
												      <td class="td td1"><a title="Ver historial" data-toggle="tooltip" class="waves-effect waves-light ver"><i class="fa fa-info-circle"></i></a>

												      <a title="Editar" data-toggle="tooltip" href="<?=base_url()?>Clientes/Editar?id=<?= $clientes->Id_Cliente?>" class="waves-effect waves-light editar"><i class="fa fa-pencil"></i></a>

												      <a title="Eliminar" class=" waves-effect waves-light eliminar" data-id="<?= $clientes->Id_Cliente?>" data-nombre="<?= $clientes->Nombre_Cliente?> <?= $clientes->Apellido_Cliente?>" data-toggle="modal" data-target=".modal_eliminar_cliente"><i class="fa fa-times-circle"></i></a>
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
	    <div class="modal fade modal_eliminar_cliente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	        <div class="modal-dialog modal-sm">
	            <div class="modal-content">
	                <form name="frmeliminarcliente" action="<?= base_url();?>Clientes/Eliminar/" id="frmeliminarcliente" method="GET">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h4 class="modal-title" id="mySmallModalLabel">
	                    	<i class="fa fa-trash-o fa-lg"></i> 
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