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
              <form method="post" action="<?= base_url() ?>Solicitud/GuardarSolicitud">
                <div class="margn">
                <!-- Primera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-2">
                            <label for="numero_solicitud">Número de solicitud</label>
                            <input type="text" class="form-control" id="numero_solicitud" name="numero_solicitud" placeholder="Numero de la solicitud">
                      </div>
                      <div class="form-group col-md-8">
                       <!--  <label for="tipo_credito">Tipo de crédito</label>
                              <select class="select" id="tipo_credito" name="tipo_credito" data-placeholder="Seleccione un tipo de prestamo">
                                <option value="">Seleccione un tipo de crédito</option>
                                <option value="1">Crédito Fiduciario</option>
                                <option value="2">Crédito Hipotecario</option>
                                <option value="3">Crédito Prendario</option>
                                
                              </select> -->
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
                          <input type="text" class="form-control" id="nombre_cliente" name="" placeholder="Nombre del cliente">
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
                                      if ($plazos->tiempo_plazo ==1)
                                      {
                                        echo '<option value="'.$plazos->id_plazo.'">Populares hasta '.$plazos->tiempo_plazo.' mes</option>';
                                      }
                                      else
                                      {
                                ?>
                                <option value="<?= $plazos->id_plazo ?>">Populares hasta <?= $plazos->tiempo_plazo ?> meses</option>
                                <?php }} ?>
                              </select>
                            <input type="hidden" class="form-control" id="numero_meses" name="numero_meses">
                      </div>
                    </div>
                    <!-- Fin de la primera Linea del formulario-->

                    <!-- Segunda Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-4">
                            <label for="fecha_recibido">Fecha Recibida</label>
                            <input type="text" class="form-control DateTime" id="fecha_recibido" name="fecha_recibido" placeholder="Fecha de recibido del prestamo" data-mask="9999/99/99">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="tasa_interes">Tasa de interes</label>
                            <input type="text" value="10" class="form-control" id="tasa_interes" name="tasa_interes" placeholder="Tasa de interes del prestamo">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="monto_dinero">Monto de dinero</label>
                            <input type="text" value="0" class="form-control" id="monto_dinero" name="monto_dinero" placeholder="Monto de dinero">
                      </div>
                    </div>
                    <!-- Fin de la segunda Linea del formulario-->

                     <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <label for="">IVA a pagar</label>
                            <input type="text" class="form-control" id="iva_pagar" name="iva_pagar" placeholder="Plazo de tiempo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Intereses a pagar</label>
                            <input type="text" class="form-control" id="intereses_pagar" name="intereses_pagar" placeholder="Plazo de tiempo">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Cuota diaria</label>
                            <input type="text" class="form-control" id="cuota_diaria" name="cuota_diaria" placeholder="Interes diario">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="">Total a pagar</label>
                            <input type="text" class="form-control" id="total_pagar" name="total_pagar" placeholder="Capital e intereses + IVA">
                      </div>
                    </div>
                    <!-- Fin de la tercera Linea del formulario-->

                    <!-- Cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-10">
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control resize" rows="3" id="observaciones" name="observaciones"></textarea>
                      </div>
                      <div class="form-group col-md-2 text-center">
                        <p><label for="">Operación</label></p>
                        <!-- <button class="btn btn-success" id="fiador" type="button" data-toggle="modal" data-target="#agregarFiador"><i class="fa fa-user-plus fa-lg"></i> Fiador </button> -->
                        <!-- <button class="btn btn-success" id="prenda" type="button" data-toggle="modal" data-target="#agregarPrenda"><i class="fa fa-user-plus fa-lg"></i> Prenda</button> -->
                        <!-- <button class="btn btn-success" id="hipoteca" type="button" data-toggle="modal" data-target="#agregarFiador"><i class="fa fa-user-plus fa-lg"></i> Hipoteca</button> -->
                      <div class="btn-group-vertical">
                             <button type="button" class="btn btn-primary" id="fiador" data-toggle="modal" data-target="#agregarFiador"><i class="fa fa-user-plus fa-lg"></i> Fiador </button>
                             <button type="button" class="btn btn-primary" id="prenda" data-toggle="modal" data-target="#agregarPrenda"><i class="fa fa-bicycle fa-lg"></i> Prenda</button>
                             <button type="button" class="btn btn-primary" id="hipoteca" data-toggle="modal" data-target="#agregarFiador"><i class="fa fa-file fa-lg"></i> Hipoteca</button>
                      </div>
                      </div>
                    </div>
                    <!-- Fin de la cuarta Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-12">
                        <table class="table" id="garantia">
                            
                        </table>
                            <!-- <label for="">Id Cliente(Este ira oculto, utual es solo para muestra)</label> -->
                            <input type="hidden" value="1" class="form-control" id="id_cliente" name="id_cliente" placeholder="">
                            <input type="hidden" value="1" class="form-control" id="numero_cuotas" name="numero_cuotas" placeholder="">
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
                  // $datosCliente = $cliente->Id_Cliente." ".$cliente->Nombre_Cliente." ". $cliente->Apellido_Cliente;
                  $id = $cliente->Id_Cliente; 
                  $nombre = '"'.$cliente->Nombre_Cliente.'"'; 
                  $apellido = '"'.$cliente->Apellido_Cliente.'"';
                  $dui = '"'.$cliente->DUI_Cliente.'"';
              ?>
              <tr class="tr tr1">
                <td class="td td1"  width="300"><b><?= $cliente->Codigo_Cliente ?></b></td>
                <td class="td td1"><?= $cliente->Nombre_Cliente. " ".$cliente->Apellido_Cliente ?></td>
                <td class="td td1">
                  <!-- <button type="button" title="Agregar" class="btn btn-success btn-custom waves-effect waves-light m-b-5 btn-xs seleccionarCliente" 
                        value="<?=$datosCliente;?>" data-toggle="tooltip" data-dismiss="modal">
                    <i class="fa fa-user-plus fa-lg"></i>
                  </button> -->
                  <?php
                  echo "<a title='Agregar' class='btn btn-success btn-custom waves-effect waves-light m-b-5 btn-xs seleccionarCliente' 
                          onclick='agregarCliente($id, $nombre, $apellido, $dui)' data-toggle='tooltip' data-dismiss='modal'>
                        <i class='fa fa-user-plus fa-lg'></i>
                      </a>";
                  ?>
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
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Ventana Modal para agregar Fiador-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarFiador" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos del fiador</h4>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" id="nombre_fiador" name="nombre_fiador" placeholder="Nombre del fiador">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control" id="apellido_fiador" name="apellido_fiador" placeholder="Apellido del fiador">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">DUI</label>
                          <input type="text" class="form-control" id="dui_fiador" name="dui_fiador" placeholder="DUI" data-mask="9999999-9">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">NIT</label>
                          <input type="text" class="form-control" id="nit_fiador" name="nit_fiador" placeholder="NIT" data-mask="9999-999999-999-9">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Teléfono</label>
                          <input type="text" class="form-control" id="telefono_fiador" name="telefono_fiador" placeholder="Teléfono" data-mask="9999-9999">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Email</label>
                          <input type="email" class="form-control" id="email_fiador" name="email_fiador" placeholder="Correo electrónico">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                          <label for="">Fecha de Nacimiento</label>
                          <input type="text" class="form-control DateTime" id="nacimiento_fiador" name="nacimiento_fiador" placeholder="Fecha de nacimiento">
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Género</label>
                          <select class="form-control" id="genero_fiador" name="genero_fiador" data-placeholder="Seleccione un género">
                                <option value="">Seleccione un género</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                              </select>
                    </div>
                    <div class="form-group col-md-4">
                          <label for="">Ingreso</label>
                          <input type="text" class="form-control" id="ingreso_fiador" name="ingreso_fiador" placeholder="Ingreso mensual">
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                          <label for="">Dirección</label>
                          <textarea class="form-control resize" rows="3" id="direccion_fiador" name="direccion_fiador"></textarea>

                    </div>
                </div>
            </form>    
        </div>
        <div align="center">
          <button class="btn btn-success" type="button" onclick="agregarFiador()"><i class="fa fa-user-plus fa-lg"></i> Agregar</button>
          <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Ventana Modal para agregar prenda-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarPrenda" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos del la prenda</h4>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="row">
                    <div class="form-group col-md-6">
                          <label for="">Nombre de la prenda</label>
                          <input type="text" class="form-control" id="nombre_prenda" name="nombre_prenda" placeholder="Nombre del fiador">
                    </div>
                    <div class="form-group col-md-6">
                          <label for="">Precio valorado</label>
                          <input type="text" class="form-control" id="precio_valorado" name="precio_valorado" placeholder="Apellido del fiador">
                    </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-12">
                          <label for="">Descripción</label>
                          <textarea class="form-control resize" rows="3" id="descripcion_prenda" name="descripcion_prenda"></textarea>

                    </div>
                </div>
            </form>    
        </div>
        <div align="center">
          <button class="btn btn-success" type="button" onclick="agregarPrenda()"><i class="fa fa-user-plus fa-lg"></i> Agregar</button>
          <button type="button" class="btn btn-default waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
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
    $("#numero_solicitud").prop('readonly', true);
    $("#nombre_cliente").prop('readonly', true);
    $("#tasa_interes").prop('readonly', true);
    $("#monto_dinero").prop('readonly', true);
    $("#iva_pagar").prop('readonly', true);
    $("#intereses_pagar").prop('readonly', true);
    $("#cuota_diaria").prop('readonly', true);
    $("#total_pagar").prop('readonly', true);

    // $(".seleccionarCliente").on("click", agregarCliente);
    $("#tipo_prestamo").on('change', activarIP);
    $("#monto_dinero").on('change', calcularIntereses);
    $("#tasa_interes").on('change', calcularIntereses);
    $("#tipo_credito").on('change', mostrarOperacion);
  }

function agregarCliente(id, nombre, apellido, dui)
  {
    // separador = " ";
    // cliente = $(this).val(); //Obteniendo el valor
    // datos = cliente.split(separador); // Convirtiendolo en arreglo
    // id_cliente = datos[0]; // Capturando el primer elemento del arreglo que es el id del cliente

    // datos.splice(0,1); // Eliminando la primera posicion del arreglo que es el id para que queden solo las posiciones del nombre

    // // Obteniendo el nombre en una cadena
    // nombre_cliente = ""
    // for (var i = 0; i < datos.length; i++)
    // {
    //   nombre_cliente = nombre_cliente + " " + datos[i];
    // }
    // // Fin del proceso
    str = dui.replace("-", "");
    codigo = "F"+str;
    nombre_cliente = nombre +" "+apellido;
    $("#nombre_cliente").attr("value", nombre_cliente);
    $("#id_cliente").attr("value", id);
    $("#numero_solicitud").attr("value", codigo);
    // $("#id_cliente").val(id2["id"]);

  }

// Funcion para calcular Intereses, IVA y toal a pagar, Funcion nueva esta en proceso aun

// Funcion para desbloquear cajas de text para ingresar interes y monto de dinero
function activarIP()
{
  $("#tasa_interes").removeAttr("readonly");
  $("#monto_dinero").removeAttr("readonly");

  //Capturando valor del select para sacar el numero de meses
  separador = " ";
  indice = document.getElementById('tipo_prestamo').selectedIndex;
  if (indice != "")
  {
    cadena = document.getElementById('tipo_prestamo').options[indice].text;
    //cadena = document.getElementById('tipo_prestamo').options[document.getElementById('tipo_prestamo').selectedIndex].text;
    datos = cadena.split(separador);

    meses = datos[2]; // numero de meses
  }
  else
  {
    meses = "";
  }

    $("#numero_meses").attr("value", meses);


}
function calcularIntereses()
{
  mesesD = $("#numero_meses").val();
  tipoPrestamo = $("#tipo_prestamo").val();
  tasaInteres = (parseFloat($("#tasa_interes").val()) / 100) * mesesD;
  montoDinero = $("#monto_dinero").val();


  separador = " ";
  indice = document.getElementById('tipo_prestamo').selectedIndex;
  if (indice != "")
  {
    cadena = document.getElementById('tipo_prestamo').options[indice].text;
    //cadena = document.getElementById('tipo_prestamo').options[document.getElementById('tipo_prestamo').selectedIndex].text;
    datos = cadena.split(separador);

    meses = datos[2]; // numero de meses
  }
  else
  {
    meses = "";
  }

  // numeroDePagos = (tipoPrestamo*30) - (tipoPrestamo*4);
  numeroDePagos = (meses*30);

  // alert(numeroDePagos);

  totalInteresesAPagar = montoDinero * tasaInteres;
  totalIvaAPagar = totalInteresesAPagar * 0.13;
  totalAPagar = parseFloat(totalIvaAPagar) + parseFloat(totalInteresesAPagar) + parseFloat(montoDinero);
  cuotaDiaria = totalAPagar.toFixed(4)/numeroDePagos.toFixed();

  // Probando calculos
  

  //totalPagoConCuotas = cuotaDiaria.toFixed(2)*26;
  totalPagoConCuotas = cuotaDiaria*26;
  //$("#totalP").attr("value", totalAPagar.toFixed(2)); // Total a pagar multiplicando el numero de cuotas por el monto diario a pagar
  //$("#totalPP").attr("value", totalPagoConCuotas.toFixed(2)); // Valor real a pagar 
  //faltante
  //faltante = totalAPagar.toFixed(2) - totalPagoConCuotas.toFixed(2);
  //$("#ajusteP").attr("value", faltante.toFixed(2));

  $("#cuota_diaria").attr("value",  cuotaDiaria.toFixed(4));
  $("#iva_pagar").attr("value", totalIvaAPagar.toFixed(4));
  $("#intereses_pagar").attr("value", totalInteresesAPagar.toFixed(4));
  $("#total_pagar").attr("value", totalAPagar.toFixed(4));
  $("#numero_cuotas").attr("value", numeroDePagos);

}

//Redondeo a dos decimales
function redondeo2decimales(numero)
{
  var flotante = parseFloat(numero);
  var resultado = Math.round(flotante*100)/100;
  return resultado;
}

function agregarFiador()
{
  nombre = $("#nombre_fiador").val();
  apellido = $("#apellido_fiador").val();
  dui = $("#dui_fiador").val();
  nit = $("#nit_fiador").val();
  telefono = $("#telefono_fiador").val();
  email = $("#email_fiador").val();
  nacimiento = $("#nacimiento_fiador").val();
  genero = $("#genero_fiador").val();
  ingreso = $("#ingreso_fiador").val();
  direccion = $("#direccion_fiador").val();

  fila = '';
  fila += '<tr>';
  fila +=  '<td><p>'+nombre +" "+ apellido +'</p></td>';
  fila +=  '<td><p>'+ingreso+'</p></td>';
  fila +=  '<td><p>'+direccion+'</p></td>';
  fila += '</tr>';

  fila += '<tr>';
  fila +=  '<td><input type="hidden" name="nombreFiador[]" class="form-control" value="'+nombre+'"></td>';
  fila +=  '<td><input type="hidden" name="apellidoFiador[]" class="form-control" value="'+apellido+'"></td>';
  fila +=  '<td><input type="hidden" name="duiFiador[]" class="form-control" value="'+dui+'"></td>';
  fila +=  '<td><input type="hidden" name="nitFiador[]" class="form-control" value="'+nit+'"></td>';
  fila +=  '<td><input type="hidden" name="telefonoFiador[]" class="form-control" value="'+telefono+'"></td>';
  fila +=  '<td><input type="hidden" name="emailFiador[]" class="form-control" value="'+email+'"></td>';
  fila +=  '<td><input type="hidden" name="nacimientoFiador[]" class="form-control" value="'+nacimiento+'"></td>';
  fila +=  '<td><input type="hidden" name="generoFiador[]" class="form-control" value="'+genero+'"></td>';
  fila +=  '<td><input type="hidden" name="ingresoFiador[]" class="form-control" value="'+ingreso+'"></td>';
  fila +=  '<td><input type="hidden" name="direccionFiador[]" class="form-control" value="'+direccion+'"></td>';
  fila += '</tr>';

  $("#garantia").append(fila);
   // alert(nombre);
   // alert(apellido);
   // alert(dui);
   // alert(nit);
   // alert(telefono);
   // alert(email);
   // alert(nacimiento);
   // alert(genero);
   // alert(ingreso);
   // alert(direccion);
}

function agregarPrenda()
{
  nombre = $("#nombre_prenda").val();
  precio = $("#precio_valorado").val();
  descripcion = $("#descripcion_prenda").val();

  fila = '';
  fila += '<tr>';
  fila +=  '<td><p>'+nombre+'</p></td>';
  fila +=  '<td><p>'+precio+'</p></td>';
  fila +=  '<td><p>'+descripcion+'</p></td>';
  fila += '</tr>';
  fila += '<tr>';
  fila +=  '<td><input type="hidden" name="nombrePrenda[]" class="form-control" value="'+nombre+'"></td>';
  fila +=  '<td><input type="hidden" name="precioPrenda[]" class="form-control" value="'+precio+'"></td>';
  fila +=  '<td><input type="hidden" name="descripcionPrenda[]" class="form-control" value="'+descripcion+'"></td>';
  fila += '</tr>';
  $("#garantia").append(fila);
}

// function mostrarOperacion()
// {
//   pivote = $("#tipo_credito").val();
//   switch(pivote) {
//     case '1':
//         $("#fiador").fadeIn()
//         $("#hipoteca").fadeOut()
//         $("#prenda").fadeOut()
//         break;
//     case '2':
//         $("#hipoteca").fadeIn()
//         $("#fiador").fadeOut()
//         $("#prenda").fadeOut()
//         break;
//     case '3':
//         $("#prenda").fadeIn()
//         $("#fiador").fadeOut()
//         $("#hipoteca").fadeOut()
//         break;
//   } 
// }
</script>