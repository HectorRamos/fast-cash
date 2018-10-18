<!-- contenedor -->
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
                    <h3 class="panel-title">Solicitud de prestamo</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form method="post" action="">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-2">
                            <label for="numero_solicitud">Número de solicitud</label>
                            <input type="text" class="form-control" id="numero_solicitud" name="numero_solicitud" placeholder="Numero de la solicitud">
                      </div>
                      <div class="form-group col-md-8">
                      </div>
                      <div class="form-group col-md-2" align="center">
                        <div class="mar_che_cobrar">
                            <label for="cobra_mora">Cobrar mora</label><br>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" value="" id="cobra_mora" name="cobra_mora">
                                <label for="cobra_mora">Cobrar</label>
                            </div>
                        </div>  
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                      <label for="nombre_cliente">Cliente</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre del cliente">
                          <a title="Agregar cliente" class="input-group-addon btn btn-primary" data-toggle="modal" data-target="#agregarCliente"><i class="fa fa-user-plus fa-lg"></i></a>
                        </div>
                      </div>
<!--                     </div>                    
                    <div class="row"> -->

                      <div class="form-group col-md-6">
                            <label for="tipo_prestamo">Linea</label>
                              <select class="select" id="tipo_prestamo" name="tipo_prestamo" data-placeholder="Seleccione un tipo de prestamo">
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
                            <label for="fecha_recibido">Fecha Recibida</label>
                            <input type="text" class="form-control DateTime" id="fecha_recibido" name="fecha_recibido" placeholder="Fecha de recibido del prestamo" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="fecha_apertura">Fecha Apertura</label>
                            <input type="text" class="form-control DateTime" id="fecha_apertura" name="fecha_apertura" placeholder="Fecha de apertura del prestamo" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="tasa_interes">Tasa de interes</label>
                            <input type="text" class="form-control" id="tasa_interes" name="tasa_interes" placeholder="Tasa de interes del prestamo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="monto_dinero">Monto de dinero</label>
                            <input type="text" class="form-control" id="monto_dinero" name="monto_dinero" placeholder="Monto de dinero">
                      </div>
                    </div>
                    <!-- Fin de la segunda Linea del formulario-->

                     <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <label for="plazo">Plazo(meses)</label>
                            <input type="text" class="form-control" id="plazo" name="" placeholder="Plazo de tiempo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="fecha_vencimiento">Fecha de vencimiento</label>
                            <input type="text" class="form-control DateTime" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="Fecha de vencimiento del prestamo" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="capital_intereses">Capital e intereses + IVA</label>
                            <input type="text" class="form-control" id="capital_intereses" name="capital_intereses" placeholder="Capital e intereses + IVA">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="interes_diario">Interes diario</label>
                            <input type="text" class="form-control" id="interes_diario" name="interes_diario" placeholder="Interes diario">
                      </div>
                    </div>
                    <!-- Fin de la tercera Linea del formulario-->

                    <!-- Cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control resize" rows="3" id="observaciones" name="observaciones"></textarea>
                      </div>
                    </div>
                    <!-- Fin de la cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                            <!-- <label for="">Id Cliente(Este ira oculto, utual es solo para muestra)</label> -->
                            <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" placeholder="">
                      </div>
                    </div>
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
          <table id="datatable" class="table">
            <thead class="thead-dark thead thead1">
              <tr class="tr tr1">
                <th class="th th1" scope="col">Código</th>
                <th class="th th1" scope="col">Nombre del Cliente</th>
                <th class="th th1" scope="col">Agregar</th>
              </tr>
            </thead>
            <tbody class="tbody tbody1">
              <?php 
                foreach ($clientes->result() as $cliente)
                {
                  $datosCliente = $cliente->Id_Cliente." ".$cliente->Nombre_Cliente." ". $cliente->Apellido_Cliente;
              ?>
              <tr class="tr tr1">
                <td class="td td1"  width="300"><b><?= $cliente->Codigo_Cliente ?></b></td>
                <td class="td td1"><?= $cliente->Nombre_Cliente. " ".$cliente->Apellido_Cliente ?></td>
                <td class="td td1">
                  <button type="button" title="Agregar" class="btn btn-success btn-custom waves-effect waves-light m-b-5 btn-xs seleccionarCliente" 
                        value="<?=$datosCliente;?>" data-toggle="tooltip" data-dismiss="modal">
                    <i class="fa fa-user-plus fa-lg"></i>
                  </button>
                </td>
              </tr>
              <?php } ?>
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
<script type="text/javascript">
  $(document).on("ready", main);
  function main()
  {
    $(".seleccionarCliente").on("click", agregarCliente);
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

<script>
// Funcion para calcular Intereses, IVA y toal a pagar, Funcion nueva esta en proceso aun

function calcularIntereses()
{
  tipoPrestamo = $("#tipo_prestamo").val();
  tasaInteres = $("#tasa_interes").val();
  montoDinero = $(this).val();

  numeroDePagos = (tipoPrestamo*30) - (tipoPrestamo*4);

  totalInteresesAPagar = montoDinero * tasaInteres;
  totalIvaAPagar = totalInteresesAPagar * 0.13;
  totalAPagar = parseFloat(totalIvaAPagar) + parseFloat(totalInteresesAPagar) + parseFloat(montoDinero);
  cuotaDiaria = totalAPagar/numeroDePagos

  // Probando calculos
  totalPagoConCuotas = cuotaDiaria.toFixed(2)*26;
  $("#totalP").attr("value", totalAPagar.toFixed(2));
  $("#totalPP").attr("value", totalPagoConCuotas.toFixed(2) );

  //faltante
  faltante = totalAPagar.toFixed(2) - totalPagoConCuotas.toFixed(2);
  $("#ajusteP").attr("value", faltante.toFixed(2));

  $("#total_pagar").attr("value",  cuotaDiaria.toFixed(2));
  $("#IVA_Pagar").attr("value", totalIvaAPagar.toFixed(2));
  $("#interes_total_pagar").attr("value", totalInteresesAPagar.toFixed(2));
  //alert(cuotaDiaria.toFixed(2));
}
</script>