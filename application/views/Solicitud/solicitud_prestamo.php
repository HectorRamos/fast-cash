
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">
       <h3 class="text-center">Solicitud de prestamo</h3>
          <form method="post" action="" >
                <div class="form-row">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-2">
                            <label for="">Número de solicitud</label>
                            <input type="text" class="form-control" id="numero_solicitud" name="numero_solicitud" placeholder="Numero de la solicitud">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="">Cliente</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente">
                          <a title="Agregar cliente" class="input-group-addon btn btn-success" data-toggle="modal" data-target="#agregarCliente"><i class="fa fa-plus"></i></a>
                        </div>
                      </div>
                      <div class="form-group col-md-4">
                            <label for="">Linea</label>
                              <select class="form-control" id="tipo_prestamo" name="tipo_prestamo">
                                <option value="">Seleccione un tipo de prestamo</option>
                                <?php 
                                    foreach ($plazos->result() as $plazos)
                                    {
                                ?>
                                <option value="<?= $plazos->id_plazo ?> ">Populares hasta <?= $plazos->tiempo_plazo ?> dias</option>
                                <?php } ?>
                              </select>
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Segunda Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <label for="">Fecha Recibida</label>
                            <input type="text" class="form-control" id="fecha_recibido" name="fecha_recibido" placeholder="Fecha de recibido del prestamo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Fecha Apertura</label>
                            <input type="text" class="form-control" id="fecha_apertura" name="fecha_apertura" placeholder="Fecha de apertura del prestamo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Tasa de interes</label>
                            <input type="text" class="form-control" id="tasa_interes" name="tasa_interes" placeholder="Tasa de interes del prestamo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Monto de dinero</label>
                            <input type="text" class="form-control" id="monto_dinero" name="monto_dinero" placeholder="Monto de dinero">
                      </div>
                    </div>
                    <!-- Fin de la segunda Linea del formulario-->

                     <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <label for="">Plazo(meses)</label>
                            <input type="text" class="form-control" id="" name="" placeholder="Plazo de tiempo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Fecha de vencimiento</label>
                            <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="Fecha de vencimiento del prestamo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Capital e intereses + IVA</label>
                            <input type="text" class="form-control" id="capital_intereses" name="capital_intereses" placeholder="Capital e intereses + IVA">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Interes diario</label>
                            <input type="text" class="form-control" id="interes_diario" name="interes_diario" placeholder="Interes diario">
                      </div>
                    </div>
                    <!-- Fin de la tercera Linea del formulario-->

                    <!-- Cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-10">
                            <label for="">Observaciones</label>
                            <textarea class="form-control" rows="5" id="observaciones" name="observaciones"></textarea>
                      </div>
                      <div class="form-group col-md-2">
                            <label for="">Cobrar mora</label><br>
                            <input type="checkbox" value="" id="cobra_mora" name="cobra_mora">
                      </div>
                    </div>
                    <!-- Fin de la cuarta Linea del formulario-->

                    <div class="row">
                      <div class="form-group col-md-12">
                            <label for="">Id Cliente(Este ira oculto, utual es solo para muestra)</label>
                            <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="">
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Guardar Solicitud</button>
               </div>
          </form>
    </div> <!-- container -->
               
</div> <!-- content -->

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana Modal para agregar Nuevo Plazo-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarCliente" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Clientes Existentes</h4>
        </div>
        <div class="modal-body">
          <table id="datatable" class="table table-bordered">
            <thead class="thead-dark thead thead1">
              <tr>
                <th class="text-center">CODIGO CLIENTE</th>
                <th class="text-center">NOMBRE CLIENTE</th>
                <th class="text-center">AGREGAR</th>
              </tr>
            </thead>
            <tbody class="thead-dark thead thead1">
              <?php 
                foreach ($clientes->result() as $cliente)
                {
                  $datosCliente = $cliente->Id_Cliente." ".$cliente->Nombre_Cliente." ". $cliente->Apellido_Cliente;
              ?>
              <tr>
                <td class="text-center"><?= $cliente->Codigo_Cliente ?></td>
                <td class="text-center"><?= $cliente->Nombre_Cliente. " ".$cliente->Apellido_Cliente ?></td>
                <td class="text-center">
                  <button type="button" class="btn btn-success btn-sm seleccionarCliente" 
                        value="<?=$datosCliente;?>" data-dismiss="modal">
                    <i class="fa fa-plus close" ></i>
                  </button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->
<script type="text/javascript">
  $(document).on("ready", main);
  function main()
  {
    $(".seleccionarCliente").on("click", agregarCliente);

    $.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
        };
  $('#fecha_apertura').datepicker({
        format: 'yyyy-mm-dd',
        language:'es',

      });
  }

  function agregarCliente()
  {
    separador = " ";
    cliente = $(this).val(); //Obteniendo el valor
    datos = cliente.split(separador); // Convirtiendolo en arreglo
    id_cliente = datos[0]; // Capturando el primer elemento del arreglo que es el id del cliente

    datos.splice(0,1); // Eliminando la primera posicion del arreglo que es el id para que queden solo las posiciones del nombre

    // Obteniendo el nombre en una cadena
    nombre_cliente = ""
    for (var i = 0; i < datos.length; i++)
    {
      nombre_cliente = nombre_cliente + " " + datos[i];
    }
    // Fin del proceso

    $("#nombre_cliente").attr("value", nombre_cliente);
    $("#id_cliente").attr("value", id_cliente);

  }
</script>

