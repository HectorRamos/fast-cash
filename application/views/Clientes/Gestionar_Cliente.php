
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <h1>Registro de clientes</h1>
                    <table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">Codigo Cliente</th>
					      <th scope="col">Nombre</th>
					      <th scope="col">Apellido</th>
					      <th scope="col">Estado</th>
					      <th scope="col" colspan="3">accion</th>
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
					      <td><a onclick="confirmar(<?= $clientes->Id_Cliente?>)"  class="btn btn-danger">Eliminar</a></td>
					      <td><a href="<?=base_url()?>Clientes/Editar?id=<?=$clientes->Id_Cliente?>" class="btn btn-warning">Editar</a></td>
					      <td><a class="btn btn-primary">Ver historial</a></td>
					    </tr>
					    <?php
							}
					    ?>
					  </tbody>
					</table>
                    </div>
                </div>
            </div>
<script type="text/javascript">
	function confirmar (val) {
  //alert("confirmar");
//return confirm("esta seguro que desea eliminar");

		if (!confirm("¿Está seguro de que desea eliminar el registro?")) {
		return false;
		}
		else {
		document.location= 'Eliminar?id='+val;
		return true;
		}
		}
</script>