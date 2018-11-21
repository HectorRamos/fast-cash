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
            <li class="active">Caja chica</li>
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
                    <h3 class="panel-title">Detalle de caja chica</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
				<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="margn">
                        <table id="" class="table">
                          <thead class="thead-dark thead thead1">
                            <tr class="tr tr1">
                              <th class="th th1" scope="col">Detalle</th>
                              <th class="th th1" scope="col">Monto de dinero</th>
                              <th class="th th1" scope="col">Tipo de proceso</th>
                              <th class="th th1" scope="col">Forma de pago</th>
                              <th class="th th1" >Saldo</th>
                            </tr>
                          </thead>
                          <tbody class="tbody tbody1">
                         	<?php
                         	$efectivo = 0; 
                         	$cheques = 0; 
								foreach ($datos->result() as $cajaChica)
								{
									if ($cajaChica->idTipoPago==1)
									{
										if ($cajaChica->salida != 0)
	                                	{
											$efectivo = $efectivo - $cajaChica->salida;
	                                	}
	                                	else
	                                	{
	                                		if ($cajaChica->entrada != 0)
	                                		{
												$efectivo = $efectivo + $cajaChica->entrada;
	                                		}
	                                	}
									}
									else
									{
										if ($cajaChica->idTipoPago==2)
										{
											if ($cajaChica->salida != 0)
		                                	{
												$cheques = $cheques - $cajaChica->salida;
		                                	}
		                                	else
		                                	{
		                                		if ($cajaChica->entrada != 0)
		                                		{
													$cheques = $cheques + $cajaChica->entrada;
		                                		}
		                                	}
										}
									}
									// echo "<br>";
									// echo $cajaChica->fechaCajaChica."<br>";
									// echo $cajaChica->cantidadApertura."<br>";
									// echo $cajaChica->saldo."<br>";
							?>
                              <tr class="tr tr1">
                                <td class="td td1" width="280"><?= $cajaChica->detalleProceso ?></td>
                                <?php 
                                	if ($cajaChica->salida != 0)
                                	{
                                		echo '<td class="td td1" width="280">'.$cajaChica->salida.'</td>';
                                		echo '<td class="td td1" width="280">Salida</td>';
                                	}
                                	else
                                	{
                                		if ($cajaChica->entrada != 0)
                                		{
                                			echo '<td class="td td1" width="280">'.$cajaChica->entrada.'</td>';
                                			echo '<td class="td td1" width="280">Entrada</td>';
                                		}
                                		else
                                		{
                                			echo '<td class="td td1" width="280">---</td>';
                                			echo '<td class="td td1" width="280">---</td>';
                                		}
                                	}
                                ?>
                                
                                <td class="td td1" width="280"><?= $cajaChica->detalle ?></td>
                                <td class="td td1" width="280"><?= $cajaChica->saldo ?></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <div>
                          	<p><strong>Saldo en efectivo: $<?= $efectivo ?></strong>
                          	<strong>Saldo en cheques: $<?= $cheques ?></strong>
                          	<strong>Saldo total: $<?= $efectivo + $cheques?></strong></p>                          
                          </div>
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
