<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
    <div class="row">
            <div class="col-sm-12">
                <!-- <h4 class="pull-left page-title">Gestion de los estados de la solicitud</h4> -->
                <ol class="breadcrumb pull-right">
                    <li><a href="<?= base_url() ?>Creditos/">Créditos</a></li>
                    <li class="active">Detalle de Crédito</li>
                </ol>
            </div>
        </div>
        <?php
        foreach ($registros->result() as $detalle) {
          # code...
        }
        ?>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <!--Panel body aqui va la tabla con los datos-->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="margn">
                                  <div class="row alert alert-success" align="center">
                                    <p style="color: #424949; font-size: 20px; font-weight: bold;">
                                      Detalle del crédito código: <?= $detalle->codigoCredito?>
                                    </p>
                                  </div>
                                  <div class="row margn">
                                    <div class="row">
                                      <div class="col-md-10">
                                        <h4>Información del cliente</h4>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="pull-right" style="position: absolute; right: 0;">
                                          <center>
                                        <?php 
                                          if($detalle->urlImg==""){
                                            echo "<div style='z-index: 999;'><img  class='img-thumbnail img-responsive zoom1' width='90' src='".base_url()."plantilla/images/user.png' alt='Imagen del Cliente' style='z-index: 99; position: relative;'></img></div><label>Sin foto</label>";
                                          }
                                          else {
                                          ?>
                                            <div style='z-index: 999;'><img class='img-thumbnail img-responsive zoom' width='90' src='<?=base_url()?><?= $detalle->urlImg?>' alt='Imagen del Cliente' style='z-index: 99; position: relative;'></img></div><label>Foto</label>
                                        <?php
                                          }
                                        ?>
                                       </center>
                                      </div>
                                     </div>
                                  </div>
                                  <div class="row ">
                                    <div class="col-md-4">
                                       <p><b>Nombre del cliente: </b><?= $detalle->Nombre_Cliente?> <?= $detalle->Apellido_Cliente?></p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Numero de DUI: </b><?= $detalle->Dui_cliente?></p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Tipo de cliente: </b><?= $detalle->Tipo_Cliente?></p>
                                    </div>                                   
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <p><b>Celular de cliente: </b><span style='color: #2E86C1; text-decoration: underline;'><?= $detalle->Telefono_Celular_Cliente?></span></p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Domicilio de cliente: </b><?= $detalle->Domicilio_Cliente?></p>
                                    </div>
                                  </div>
                                  </div>
                                  <br>
                                  <!--========================= INFORMACION DEL CREDITO-->
                                  <div class="row margn">
                                  <h4>Información del crédito</h4>
                                  <div class="row">
                                    <div class="col-md-4">
                                       <p><b>Capital: </b>$ <?= $detalle->capital?> </p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Total Intereses: </b>$ <?= $detalle->totalInteres?></p>
                                    </div>
                                    <div class="col-md-4">
                                    <p><b>Total IVA: </b>$ <?= $detalle->totalIva?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                    <p><b>Total a pagar: </b>$ <?= $detalle->ivaInteresCapital?></p>
                                    </div>
                                    <div class="col-md-4">
                                      <p><b>Cuota: </b>$ <?= $detalle->pagoCuota?></p>
                                    </div>
                                    <div class="col-md-4">
                                      <p><b>Número de cuotas: </b><?= $detalle->cantidadCuota?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <p><b>Total abonado: </b>$ <?= $detalle->totalAbonado?></p>
                                    </div>
                                    <div class="col-md-4">
                                      <p><b>Saldo: </b>$ <?= $detalle->ivaInteresCapital-$detalle->totalAbonado?></p>
                                    </div>
                                    <div class="col-md-4">
                                      <p><b>Tipo de crédito: </b><?= $detalle->tipoCredito?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <p><b>Estado del crédito: </b><?= $detalle->estadoCredito?></p>
                                    </div>
                                    <div class="col-md-4">
                                      <p><b>Fecha de apertura: </b><?= $detalle->fechaApertura?></p>
                                    </div>
                                    <div class="col-md-4">
                                      <p><b>Fecha de vencimiento: </b><?= $detalle->fechaVencimiento?></p>
                                    </div>
                                  </div>
                                  </div>
                                  <br>
                                  <div class="row margn">
                                  <h4>Detalle de pagos</h4>
                                  <?php
                                  if($detalle->estadoCredito=="Finalizado"){
                                  }
                                  else{
                                    echo '<a href="'.base_url().'Pagos/PagarCredito?Id='.$detalle->idCredito.'" title="Pago" data-toggle="tooltip"  class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-money"></i> <span>Hacer pago<span></a>';
                                  }
                                   if (sizeof($Pagos->result())>0){
                                  ?>
                                  <table id="datatable" class="table">
                                    <thead class="thead-dark thead">
                                      <tr class="tr tr1">
                                        <th class="th" scope="col">#</th>
                                        <th class="th" scope="col">Total Pago</th>
                                        <th class="th" scope="col">IVA</th>
                                        <th class="th" scope="col">Interes</th>
                                        <th class="th" scope="col">Abono a capital</th>
                                        <th class="th" scope="col">Capital pendiente</th>
                                        <th class="th" scope="col">Días pagados</th>
                                        <th class="th" scope="col">Fecha de pago</th>
                                        <th class="th" scope="col">Acción</th>
                                      </tr>
                                    </thead>
                                    <tbody class="tbody">
                                    <?php
                                    $i = 0;
                                    if(!empty($Pagos)){
                                    foreach ($Pagos->result() as $listPagos) {
                                    $i = $i +1;
                                      ?>
                                      <tr class="tr tr1">
                                      <td class="td" data-label="#"><b><?= $i?></b></td>
                                      <td class="td" data-label="Total Pago">$ <?= $listPagos->totalPago?></td>
                                      <td class="td" data-label="IVA">$ <?= $listPagos->iva?></td>
                                      <td class="td" data-label="Interes">$ <?= $listPagos->interes?></td>
                                      <td class="td" data-label="Abono a capital">$ <?= $listPagos->abonoCapital?></td>
                                      <td class="td" data-label="Capital pendiente">$ <?= $listPagos->capitalPendiente?></td>
                                      <td class="td" data-label="Dias pagados"><?= $listPagos->diasPagados?></td>
                                      <td class="td" data-label="Fecha de pago"><?= $listPagos->fechaPago?></td>
                                      <td class="td td1" data-label="Imprimir comprobante">
                                        <a href="" title='Imprimir' data-toggle="tooltip" class='waves-effect waves-light ver'><i class='fa fa-print'></i></a>
                                      </td>
                                      </tr>
                                    <?php  
                                    }
                                   }
                                  }
                                  else{

                                    echo "<div class='alert alert-danger' align='center'>
                                          <h4>No se han realizado pagos de este crédito <i class='fa fa-warning fa-lg'></i></h4>
                                        </div>";
                                    }
                                  ?>
                                 
                                    </tbody>
                                  </table>                                    
                                  </div>
                                  <br>
                                  <div class="row margn">
                                    <h4>Documentos</h4>
                                    <?php
                                     if (sizeof($Docs->result())>0){
                                    ?>
                                    <table class="table">
                                      <thead class="thead thead1">
                                        <tr class="tr tr1">
                                          <th class="th th1">Nombre del documento</th>
                                          <th class="th th1">Acción&nbsp;&nbsp;&nbsp;</th>
                                        </tr>
                                      </thead>
                                      <tbody class="tbody tbody1">
                                      <?php foreach ($Docs->result() as $docu) {
                                        ?>
                                        <tr class="tr tr1">
                                          <td class="td td1" data-label="Nombre del documento">
                                            <div class="alert alert-info" style="margin-top: 23px; font-weight: bold;"><span title="Documento" data-toggle="tooltip"><?= $docu->nombre?></span></div>
                                          </td>
                                          <td class="td td1" data-label="Acción">
                                            <a title="Descargar documento" data-toggle="tooltip" href="<?= base_url()?><?= $docu->url?>"><img src="<?= base_url() ?>plantilla/images/descargar.png"/><p style="position: absolute; right: 90px;"><b>Descargar</b></p></a>
                                          </td>
                                        </tr>
                                        <?php
                                          } 
                                        }
                                        else{
                                        echo "<div class='alert alert-danger' align='center'>
                                              <h4>Este crédito no tiene documentos <i class='fa fa-warning fa-lg'></i></h4>
                                            </div>";
                                        }
                                        ?>
                                      </tbody>
                                    </table>
                                  </div>
                                  <br>
                                  <div align="center">
                                    <a href="<?= base_url() ?>Creditos/" type="button" class="btn btn-default block waves-effect waves-light m-b-5"><i class="fa fa-chevron-left fa-lg"></i> Volver</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<script>
  function Update(id){
      document.getElementById('IdP').value=id;
    }

  function Delete(id){
      document.getElementById('IdE').value=id;
    }

    function Approved(id, codigo){
      document.getElementById('IdA').value=id;
      document.getElementById('Codigo').value=codigo;
    }
</script>