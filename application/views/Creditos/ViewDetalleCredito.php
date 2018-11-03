<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
		<div class="row">
            <div class="col-sm-12">
                <!-- <h4 class="pull-left page-title">Gestion de los estados de la solicitud</h4> -->
                <ol class="breadcrumb pull-right">
                    <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
                    <li class="active">Solicitudes de préstamo</li>
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
                                  <div align="center">
                                  <h4>Detalle del credito codigo: <?= $detalle->codigoCredito?></h4>
                                  </div>
                                  <div class="alert alert-success row margn">
                                  <h4 align="center">Informacion del cliente</h4>
                                  <div class="row ">
                                    <div class="col-md-3">
                                       <p><b>Nombre del cliente: </b><?= $detalle->Nombre_Cliente?> <?= $detalle->Apellido_Cliente?></p>
                                    </div>
                                    <div class="col-md-3">
                                    <p><b>Numero de DUI: </b><?= $detalle->Dui_cliente?></p>
                                    </div>
                                    <div class="col-md-3">
                                    <p><b>Tipo de cliente: </b><?= $detalle->Tipo_Cliente?></p>
                                    </div>
                                    <div class="col-md-3" >
                                    <?php 
                                      if($detalle->urlImg==""){
                                        echo "<img  class='img-thumbnail img-responsive' width='100' src='".base_url()."plantilla/images/user.png' alt='Imagen del Cliente'></img><br><label style='margin-right: 22px;'>Sin foto</label>";

                                      }
                                      else {

                                        ?>
                                        <img  class='img-thumbnail img-responsive' width='100' src='<?=base_url()?><?= $detalle->urlImg?>' alt='Imagen del Cliente'></img><br><label style='margin-right: 33px;'>Foto</label>

                                        <?php
                                      }
                                    ?>
                                      
                                    </div>
                                   
                                  </div>
                                  
                                  <div class="row">
                                    <div class="col-md-3">
                                      <p><b>Celular de cliente: </b><?= $detalle->Telefono_Celular_Cliente?></p>
                                    </div>
                                    <div class="col-md-3">
                                    <p><b>Domicilio de cliente: </b><?= $detalle->Domicilio_Cliente?></p>
                                    </div>
                                  </div>
                                  </div>
                                  <br>
                                  <!--========================= INFORMACION DEL CREDITO-->
                                  <div class="  row margn">
                                  <h4 align="center">Informacion del credito</h4>
                                  <div class="row">
                                    <div class="col-md-3">
                                       <p><b>Capital: </b><?= $detalle->capital?> </p>
                                      
                                    </div>
                                    <div class="col-md-3">
                                    <p><b>Total Intereses: </b><?= $detalle->totalInteres?></p>
                                      
                                    </div>
                                    <div class="col-md-3">
                                    <p><b>Total Iva: </b><?= $detalle->totalIva?></p>
                                    </div>
                                    <div class="col-md-3">
                                    <p><b>Total a pagar: </b><?= $detalle->ivaInteresCapital?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <p><b>Cuota: </b><?= $detalle->pagoCuota?></p>
                                    </div>
                                    <div class="col-md-3">
                                      <p><b>Numero de cuotas: </b><?= $detalle->cantidadCuota?></p>
                                    </div>
                                    <div class="col-md-3">
                                      <p><b>Total abonado: </b><?= $detalle->totalAbonado?></p>
                                    </div>
                                    <div class="col-md-3">
                                      <p><b>Saldo: </b><?= $detalle->ivaInteresCapital-$detalle->totalAbonado?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <p><b>Tipo de crédito: </b><?= $detalle->tipoCredito?></p>
                                    </div>
                                    <div class="col-md-3">
                                      <p><b>Estado del credito: </b><?= $detalle->estadoCredito?></p>
                                    </div>
                                    <div class="col-md-3">
                                      <p><b>Fecha de apertura: </b><?= $detalle->fechaApertura?></p>
                                    </div>
                                    <div class="col-md-3">
                                      <p><b>Fecha de Vencimiento: </b><?= $detalle->fechaVencimiento?></p>
                                    </div>
                                  </div>
                                  </div>
                                  <br>
                                  <div class="  row margn">
                                    <h4 align="center">Documentos</h4>
                                    <table class="table-responsive table">
                                      <thead>
                                        <tr>
                                          <th>Nombre del documento</th>
                                          <th>Accion</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($Docs->result() as $docu) {

                                        ?>
                                        <tr>
                                          <th><?= $docu->nombre?></th>
                                          <th><a href="<?= base_url()?><?= $docu->url?>">Descargar</a></th>
                                          
                                        </tr>
                                        <?php
                                       
                                      } 
                                      ?>
                                        
                                      </tbody>
                                    </table>
                                  </div>

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