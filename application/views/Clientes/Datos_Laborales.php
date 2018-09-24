
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                       <div class="row">
                       <?php
                       foreach ($id->result() as $dato) {
                       }
                       if($dato->Tipo_Cliente=="Empleado"){
                       	?>
                       	<h1>Ingrese los datos laborales del cliente</h1>
                       	<form method="POST" action="<?= base_url()?>Clientes/datosLaborales">
                       	<div class="form-row">
	                       	<div class="form-group col-md-6">
	                            <label for="">Cliente: <?= $dato->Nombre_Cliente." ".$dato->Apellido_Cliente ?></label>
	                         </div>
	                         	<div class="form-group col-md-6">
	                            <label for="">Tipo de cliente: <?= $dato->Tipo_Cliente;?></label>
	                            </div>
                       	</div>
                       	 <div class="form-row">
                       	 <!--*******************************CAMPOS OCULTOS**********************************-->
                              <input type="hidden" name="Fk_Id_Cliente" value="<?php echo $dato->Id_Cliente; ?>">
                              <input type="hidden" name="Codigo_cliente" value="<?php echo $dato->Codigo_Cliente; ?>">
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
                       <?php	
                       }
                       else{

                       	?>
                       	<h2>Ingrese los datos del negocio</h2>
                       		<form method="POST" action="<?= base_url()?>Clientes/datosNegocio">
                       	<div class="form-row">
	                       	<div class="form-group col-md-6">
	                            <label for="">Cliente: <?= $dato->Nombre_Cliente." ".$dato->Apellido_Cliente ?></label>
	                         </div>
	                         	<div class="form-group col-md-6">
	                            <label for="">Tipo de cliente: <?= $dato->Tipo_Cliente;?></label>
	                            </div>
                       	</div>
                       	 <div class="form-row">
                       	 <!--*******************************CAMPOS OCULTOS**********************************-->
                              <input type="hidden" name="Fk_Id_Cliente" value="<?php echo $dato->Id_Cliente; ?>">
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
                         			<div class="form-group col-md-6">
                                          <label for="">Tipo de factura</label>
                                          <input type="text" class="form-control" id="Tipo_Factura" name="Tipo_Factura" placeholder="Apellido del cliente">
                                    </div>
                        </div>
                        <div class="form-row">
                        	<div class="form-group col-md-12">

                        		<button type="submit" class="btn btn-success">Guardar</button>
                        	</div>
                        	 
                        </div>
                        
                       	</form>
                       	<?php
                       }
                       ?>

                       </div>
                    </div>
                </div>
            </div>