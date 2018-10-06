<div class="content-page">
<!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
<?php
if (sizeof($DatosLaborales->result())==0)
{
?>
<div class="alert alert-danger"><h3>Este cliente no posee registro Laboral ni de Negocio</h3>
<p>Para agrear la informacion pertinente ir a la seccion de gestionar clientes y clic en ver informacion.</p>
<a href="<?= base_url() ?>Clientes/gestionarCliente" class="btn btn-success">Ir</a>
</div>

<?php
}
else
{
	foreach ($DatosLaborales->result() as $datos) 
	{

	}
	if($datos->Tipo_Cliente=="Empleado")
	{
	?>
	<h1>Editar datos laborales del cliente</h1>
            <form method="POST" action="<?= base_url()?>Clientes/EditardatosLaborales">
                       	<div class="form-row">
	                       	<div class="form-group col-md-6">
	                            <label for="">Codigo del cliente: <?=  $datos->Codigo_Cliente?></label>
	                         </div>
	                         	<div class="form-group col-md-6">
	                            <label for="">Tipo de cliente: <?= $datos->Tipo_Cliente;?></label>
	                            </div>
                       	</div>
                       	 <div class="form-row">
                       	 <!--*******************************CAMPOS OCULTOS**********************************-->
                       	 <input type="hidden" name="Fk_Id_Cliente" value="<?= $datos->Id_Cliente; ?>">

                              <!--FIN DE CAMPOS OCULTOS-->
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre de la empresa</label>
                                          <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Empresa" value="<?= $datos->Nombre_Empresa?>" placeholder="Nombre de la empresa">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Cargo que desempeña</label>
                                          <input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Cargo que desempeña" value="<?= $datos->Cargo?>">
                                    </div>
                              </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Direccion de la empresa</label>
                                          <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" value="<?= $datos->Direccion?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Telefono</label>
                                          <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Apellido del cliente" value="<?= $datos->Telefono?>">
                                	</div>
                        </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Rubro de la empresa que en que trabaja</label>
                                          <input type="text" class="form-control" id="Rubro" name="Rubro" placeholder="Nombre del cliente" value="<?= $datos->Rubro?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Ingreso Mensual</label>
                                          <input type="text" class="form-control" id="Ingreso_Mensual" name="Ingreso_Mensual" placeholder="Apellido del cliente" value="<?= $datos->Ingreso_Mensual?>">
                                    </div>
                        </div>
                         <div class="form-row">
                                    <div class="form-group col-md-12">
                                          <label for="">Observaciones</label>
                                           <textarea id="Observaciones" name="Observaciones" class="form-control"><?= $datos->Observaciones?></textarea>
                                    </div>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                       	</form>
	<?php	
	}
	else if($datos->Tipo_Cliente=="Empresario"){?>
	<h1>Editar datos del negocio del cliente</h1>
            <form method="POST" action="<?= base_url()?>Clientes/EditarDatosNegocio">
                       	<div class="form-row">
	                       	<div class="form-group col-md-6">
	                            <label for="">Codigo del cliente: <?=  $datos->Codigo_Cliente?></label>
	                         </div>
	                         	<div class="form-group col-md-6">
	                            <label for="">Tipo de cliente: <?= $datos->Tipo_Cliente;?></label>
	                            </div>
                       	</div>
                       	 <div class="form-row">
                       	 <!--*******************************CAMPOS OCULTOS**********************************-->
                              <input type="hidden" name="Fk_Id_Cliente" value="<?= $datos->Id_Cliente; ?>">
                              <!--FIN DE CAMPOS OCULTOS-->
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre del negocio</label>
                                          <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Negocio" placeholder="Nombre del negocio" value="<?= $datos->Nombre_Negocio?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">NIT</label>
                                          <input type="text" class="form-control" id="NIT" name="NIT" placeholder="NIT" value="<?= $datos->NIT?>">
                                    </div>
                              </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Numero de Registro del Contribuyente(NRC)</label>
                                          <input type="text" class="form-control" id="NRC" name="NRC" placeholder="Numero de Registro del Contibuyente" value="<?= $datos->NRC?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Giro</label>
                                          <input type="text" class="form-control" id="Giro" name="Giro" placeholder="Giro del negocio" value="<?= $datos->Giro?>">
                                	</div>
                        </div>
                        <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Direccio del negocio</label>
                                          <input type="text" class="form-control" id="Direccion_Negocio" name="Direccion_Negocio" placeholder="Direccion del negocio" value="<?= $datos->Direccion_Negocio?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Ingreso Mensual</label>
                                          <input type="text" class="form-control" id="Ingreso_Mensual" name="Ingreso_Mensual" placeholder="Apellido del cliente" value="<?= $datos->Ingreso_Mensual?>">
                                    </div>
                        </div>
                         <div class="form-row">
                         			<div class="form-group col-md-6">
                                          <label for="">Tipo de factura</label>
                                          <input type="text" class="form-control" id="Tipo_Factura" name="Tipo_Factura" placeholder="Apellido del cliente" value="<?= $datos->Tipo_Factura?>">
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

<?php
} 

?>
</div>
</div>
</div>
</div>
                       
