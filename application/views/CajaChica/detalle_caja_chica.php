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
            <li><a href="<?= base_url() ?>CajaChica/HistorialCajas">Detalle caja chica</a></li>
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
                        <table id="datatable" class="table">
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
                                <td class="td td1"><?= $cajaChica->detalleProceso ?></td>
                                <?php 
                                	if ($cajaChica->salida != 0)
                                	{
                                		echo '<td class="td td1">$ '.$cajaChica->salida.'</td>';
                                		echo '<td class="td td1">Salida</td>';
                                	}
                                	else
                                	{
                                		if ($cajaChica->entrada != 0)
                                		{
                                			echo '<td class="td td1">$ '.$cajaChica->entrada.'</td>';
                                			echo '<td class="td td1">Entrada</td>';
                                		}
                                		else
                                		{
                                			echo '<td class="td td1">---</td>';
                                			echo '<td class="td td1">---</td>';
                                		}
                                	}
                                ?>
                                
                                <td class="td td1"><?= $cajaChica->detalle ?></td>
                                <td class="td td1">$&nbsp;<?= $cajaChica->saldo ?></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                          <tfooter>
                              <tr class="tr tr1">
                                <td class="td td1"><span class='label label-warning' style="font-size: 1.5rem;"><strong>Saldo en efectivo: </strong>$ <?= $efectivo ?></span></td>
                                <td class="td td1"><span class='label label-info' style="font-size: 1.5rem;"><strong>Saldo en cheques: </strong>$ <?= $cheques ?></span></td>
                                <td class="td td1"><span class='label label-default' style="font-size: 1.5rem;"><strong>Saldo total: </strong>$ <?= $efectivo + $cheques?></span>  </td>
                              	<td class="td td1 text-right" colspan="4"><strong>SALDO FINAL: <span class='label label-success' style="font-size: 1.5rem;">$ <?= $cajaChica->saldo ?></span></strong></td>
                              </tr>
                          </tfooter>
                        </table>
                        <div align="center">
	                       <a href="<?= base_url() ?>CajaChica/HistorialCajas" type="button" class="btn btn-default block waves-effect waves-light m-b-5"><i class="fa fa-chevron-left fa-lg"></i> Volver</a>
	                    </div>
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
