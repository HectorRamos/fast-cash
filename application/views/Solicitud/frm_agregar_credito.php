contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
            <li class="active">Gestión de Solicitud de prestamo</li>
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
                    <h3 class="panel-title">Crédito de prestamo</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form method="post" action="">
               <!--  <label for="">Id de la solicitud</label>
                <input type="text" value="<?= $id ?>"> -->


                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-2">
                            <label for="codigo_credito">Código del crédito</label>
                            <input type="text" class="form-control" id="codigo_credito" name="codigo_credito" placeholder="Código del crédito">
                      </div>
                      <div class="form-group col-md-8">
                      </div>
                      <!-- <div class="form-group col-md-2" align="center">
                        <div class="mar_che_cobrar">
                            <label for="cobra_mora">Cobrar mora</label><br>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" value="" id="cobra_mora" name="cobra_mora">
                                <label for="cobra_mora">Cobrar</label>
                            </div>
                        </div>  
                      </div> -->
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                      <label for="tipo_credito">Tipo de Crédito</label>
                        <div class="">
                          <select class="select" id="tipo_credito" name="tipo_credito" data-placeholder="Seleccione un tipo de cré  dito">
                                <option value="">Seleccione un tipo de crédito</option>
                                <option value="">Credito 1</option>
                                <option value="">Credito 2</option>
                                <option value="">Credito 3</option>
                                <option value="">Credito 4</option>
                                
                              </select>
                        </div>
                      </div>
<!--                     </div>                    
                    <div class="row"> -->

                      <div class="form-group col-md-6">
                            <label for="codigo_tipo_credito">Código tipo de cŕedito</label>
                            <input type="text" class="form-control" id="codigo_tipo_credito" name="codigo_tipo_credito" placeholder="Cdigo del tipo de crédito">
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Segunda Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="fecha_apertura">Fecha Apertura</label>
                            <input type="text" class="form-control DateTime" id="fecha_apertura" name="fecha_apertura" placeholder="Fecha de recibido de apertura" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="fecha_de_vencimiento">Fecha de vencimiento</label>
                            <input type="text" class="form-control DateTime" id="fecha_de_vencimiento" name="fecha_de_vencimiento" placeholder="Fecha de vencimiento">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="monto_dinero">Monto de dinero</label>
                            <input type="text" value="" class="form-control" id="monto_dinero" name="monto_dinero" placeholder="Monto de dinero">
                      </div>
                    </div>
                    <!-- Fin de la segunda Linea del formulario-->

                     <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <label for="">Amortizacion</label>
                            <input type="text" class="form-control" id="amortizacion" name="amortizacion" placeholder="Amortizacion">
                      </div>
                      <div class="form-group col-md-9">
                            <label for="nombre_cliente">Documento</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento">
                            <a title="Agregar Documento" class="input-group-addon btn btn-primary" data-toggle="modal" data-target="#agregarDocumento"><i class="fa fa-user-plus fa-lg"></i></a>
                          </div>
                      </div>
                    </div>
                    <!-- Fin de la tercera Linea del formulario-->

                    
                    <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Guardar</button>
                     <button type="reset" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-refresh fa-lg"></i> Limpiar</button>
                     <a href="<?= base_url() ?>Home/Main" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
               </div>

              </form>
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


<!-- ============================================================== -->
<!-- Ventana Modal para agregar documento-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarDocumento" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Clientes Existentes</h4>
        </div>
        <div class="modal-body">
          <table id="datatable" class="table">
            <thead class="thead-dark thead thead1">
              <tr class="tr tr1">
                <th class="th th1" scope="col">Nombre</th>
                <th class="th th1" scope="col">Tipo de documento</th>
                <th class="th th1" scope="col">Agregar</th>
              </tr>
            </thead>
            <tbody class="tbody tbody1">
             
            </tbody>
          </table>
        </div>
        <div align="center">
          <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->