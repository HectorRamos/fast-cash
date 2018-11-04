            <?php if($this->session->flashdata("informa")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('info', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("informa")?>');
                });
              </script>
            <?php endif; ?>
            <?php if($this->session->flashdata("actualizado")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('warning', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("actualizado")?>');
                });
              </script>
            <?php endif; ?>
            <?php if($this->session->flashdata("errorr")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('error', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("errorr")?>');
                });
              </script>
            <?php endif; ?>
            <?php if($this->session->flashdata("guardar")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('success', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("guardar")?>');
                });
              </script>
            <?php endif; ?>
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
                    <li class="active">Creditos</li>
                </ol>
            </div>
    </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <!--Panel body aqui va la tabla con los datos-->
                    <div class="panel-heading">
                      <div class="table-title">
                        <div class="row">
                          <div class="col-sm-5">
                            <h3 class="panel-title">Registro de creditos</h3>
                          </div>
                          <div class="col-sm-7">
                              <a title="Nuevo" href="" data-toggle="modal" data-target=".modal_opcion_solicitud" class="btn btn-primary waves-effect waves-light m-b-5"><i class="fa fa-plus-circle"></i> <span>Nueva Solicitud<span></a>
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
                                      <th class="th th1" scope="col">Codigo del Cliente</th>
                                      <th class="th th1" scope="col">Cliente</th>

                                      <th class="th th1" >Tipo de credito</th>

                                      <th class="th th1" >Total a pagar</th>
                                      <th class="th th1" >Total Abonado</th>
                                      <th class="th th1" >Acción</th>
                                    </tr>
                                  </thead>
                                  <tbody class="tbody tbody1">
                                  <?php foreach ($registros->result() as $creditos) {
                                    ?>
                                    <tr>
                                      <td><?= $creditos->Codigo_Cliente?></td>
                                      <td><?= $creditos->Nombre_Cliente?>  <?=  $creditos->Apellido_Cliente?></td>
                                      
                                      <td><?= $creditos->tipoCredito?></td>
                                      <td><?= $creditos->ivaInteresCapital?></td>
                                       <td><?= $creditos->totalAbonado?></td>
                                       <td><a href="<?= base_url()?>Creditos/DetalleCredito?id=<?= $creditos->idCredito?>&cc=<?= $creditos->codigoCredito?>" title='ver detalle' class='waves-effect waves-light ver'><i class='fa fa-eye'></i></a></td>
                                    </tr>
                                    <?php
                                  } ?>
                                  </tbody>
                                </table>
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
