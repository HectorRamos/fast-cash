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
                                        <h3 class="panel-title">Registro de clientes</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
							                    <table id="datatable" class="table">
												  <thead class="thead-dark">
												    <tr>
												      <th scope="col">Código Cliente</th>
												      <th scope="col">Nombre</th>
												      <th scope="col">Apellido</th>
												      <th scope="col">Estado</th>
												      <th>Acción</th>
												    </tr>
												  </thead>
												  <tbody>
												  <?php
												  foreach ($registro->result() as $clientes) {
												  ?>
												    <tr>
												      <th scope="row"><?= $clientes->Id_Cliente?></th>
												      <td><?= $clientes->Nombre_Cliente?></td>
												      <td><?= $clientes->Apellido_Cliente?></td>
												      <td><?= $clientes->Condicion_Actual_Cliente?></td>
												      <!-- <td><a onclick="confirmar(<?= $clientes->Id_Cliente?>)" class="btn btn-danger">Eliminar</a> -->
												      <td><a class="btn btn-danger waves-effect waves-light" data-id="<?= $clientes->Id_Cliente?>"  data-nombre="<?= $clientes->Nombre_Cliente?> <?= $clientes->Apellido_Cliente?>" data-toggle="modal" data-target=".modal_eliminar_cliente">Eliminar</a>
												      <a href="<?=base_url()?>Clientes/Editar?id=<?= $clientes->Id_Cliente?>" class="btn btn-warning">Editar</a>
												      <a class="btn btn-primary">Ver historial</a></td>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
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
	        <div class="modal-dialog ">
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
	                  ¿Está seguro de que desea eliminar el registro?
	                </div>
	                <div align="center">
	                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
	                    <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash-o fa-lg"></i> Eliminar</button>
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
	    <style type="text/css">
	      	  .style,.style:hover, .style:focus{
			    border: none;
			    cursor: default;
			    background: transparent;
			    -webkit-box-shadow: none;
			    -moz-box-shadow: none;
			    box-shadow: none;
			  }
			  input.style[readonly]{
			    background-color: transparent;
			  }
	      </style>