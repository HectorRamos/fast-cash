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
        <div class="col-md-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Empleados/Index">Gestión de Empleados</a></li>
            <li class="active">Nuevo Empleado</li>
          </ol>
        </
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Pago de crédito</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <!-- Formulario del empleado  -->
              <form method="post" action="<?= base_url()?>Pagos/InsertarPago" autocomplete="off" id="FormPago" autocomplete="off">
                <div class="margn">
                  <!-- <div class="mar_che_cobrar1"> -->
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="idCredito" style='color: #424949;'>Crédito</label>
                      <select id="idCredito" name="idCredito" class="select" data-placeholder="Elige un credito...">
                        <option value="">.::Seleccione un crédito::.</option>
                        <?php
                          foreach ($creditos->result() as $c) {
                            # code...
                            echo '<option value="'.$c->idCredito.'">'.$c->codigoCredito.'
                                   || '.$c->Nombre_Cliente.'
                            </option>';
                          }
                        ?>
                      </select>
                    </div>                
                    <div class="col-md-6"></div>
                  </div>                
                  <!-- </div> -->
                  <!-- <br> -->
                   <div id="infor" class="mar_che_cobrar2" style="padding-left: 15px; padding-right: 15px; display:none;">
                      <h4 style='color: #424949;'>Detalle del crédito</h4>
                        <div class="row">
                          <div class="form-group col-md-4">
                            <label for="" style='color: #424949;'>Cliente</label>
                              <input type="text" class="form-control" id="cliente" name="Cliente" placeholder="Cliente" readonly="true">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="" style='color: #424949;'>Capital</label>
                              <input type="text" class="form-control validaDigit" id="capital" name="capital" readonly="true" placeholder="Capital">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="" style='color: #424949;'>Tasa de interés</label>
                              <input type="text" class="form-control validaDigit" id="tasa" name="tasa" readonly="true" placeholder="Tasa de interes">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                              <label for="" style='color: #424949;'>Fecha de apertura del crédito</label>
                              <input type="text" class="form-control" id="fechaA" name="fechaA" readonly="true" data-mask="9999/99/99" placeholder="Fecha de apertura del crédito">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="" style='color: #424949;'>Capital abonado hasta la fecha</label>
                              <input type="text" class="form-control validaDigit" id="totalAb" name="totalAb" readonly="true" placeholder="Capital Abonado">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="" style='color: #424949;'>Capital pendiente</label>
                              <input type="text" class="form-control validaDigit" id="capitalPendiente1" name="capitalPendiente1" readonly="true" placeholder="Capital pendiente">
                            </div>
                        </div>
                    </div>
                  <div class="row">
                  <div class="form-group col-md-3">
                        <label for="fechaPago">Fecha de pago</label>
                        <input type="text" class="form-control DateTime" id="fechaPago" name="fechaPago" placeholder="Fecha de pago" data-mask="9999/99/99">
                      </div>
                    <div class="form-group col-md-3">
                      <label for="totalPago">Total pago</label>
                        <input type="text" class="form-control validaDigit" id="totalPago" name="totalPago" placeholder="Total pago">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">IVA</label>
                        <input type="text" class="form-control validaDigit" id="iva" name="iva" readonly="true" placeholder="IVA">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">Interés</label>
                        <input type="text" class="form-control validaDigit" id="interes" name="interes" readonly="true" placeholder="Interés">
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-3">
                        <label for="">Abono a capital</label>
                        <input type="text" class="form-control validaDigit" id="abonoCapital" name="abonoCapital" readonly="true" placeholder="Abono a capital">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">Días a cancelar</label>
                        <input type="text" class="form-control validaDigit" id="diasPagados" name="diasPagados" readonly="true" placeholder="Días a cancelar">
                      </div> 
                      <div class="form-group col-md-3">
                        <label for="">Capital pendiente</label>
                        <input type="text" class="form-control validaDigit" id="capitalP" name="capitalPendiente" readonly="true" placeholder="Capital pendiente">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">Total abonado</label>
                        <input type="text" class="form-control validaDigit" id="totalAbonado" name="totalAbonado" readonly="true" placeholder="Total abonado">
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-floppy-o fa-lg"></i> Guardar</button>
                  <button type="button" class="btn btn-default waves-effect waves-light m-d-5" onclick="limpiar()"><i class="fa fa-refresh fa-lg"></i> Limpiar</button>
                  <a href="<?= base_url() ?>home/Main" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
                </div>
              </form>
              <!-- Fin formulario Empleado -->
            </div>
          </div>
        </div>
      </div> <!-- End Row -->
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).on('ready', function(){
  //Fucion Change del select donde estan los datos de los clientes aqui vamos a cargar los datos que necesitemos------------
  $('#idCredito').on('change', function(){
    //alert('id'+$('#idCredito').val());
    ide = $('#idCredito').val();
    //cargar el ultimo pago si lo hay si no carga los datos del credito directamente
    $.ajax({
      url:"CargarUltimoPago",
      type:"GET",
      data:{Id:ide},
      success:function(respuesta){
        var registro = eval(respuesta);
        if (registro.length > 0)
        {
          //alert('funciona');
          for (var i =0 ; i<registro.length ; i++){
             $('#cliente').val(registro[i]['Nombre_Cliente']+" "+registro[i]['Apellido_Cliente']);
             $('#capital').val(registro[i]['capital']);
             $('#tasa').val(registro[i]['tasaInteres']);
             $('#fechaA').val(registro[i]['fechaPago']);
             $('#totalAb').val(registro[i]['totalAbonado']);
             var cpendiente = registro[i]['capital']-registro[i]['totalAbonado'];
             $('#capitalPendiente1').val(cpendiente);
             document.getElementById('infor').style.display='block';
          }
        }
        else{
          //cargar datos del credito en lugar de los pagos
          $.ajax({
            url:"CargarDetallePago",
            type:"GET",
            data:{Id:ide},
            success:function(respuesta){
              var registro = eval(respuesta);
              if (registro.length > 0)
              {
                //alert('funciona');
                for (var i =0 ; i<registro.length ; i++){
                  $('#cliente').val(registro[i]['Nombre_Cliente']+" "+registro[i]['Apellido_Cliente']);
                  $('#capital').val(registro[i]['capital']);
                  $('#tasa').val(registro[i]['tasaInteres']);
                  $('#fechaA').val(registro[i]['fechaApertura']);
                  $('#totalAb').val(registro[i]['totalAbonado']);
                  var cpendiente = registro[i]['capital']-registro[i]['totalAbonado'];
                  $('#capitalPendiente1').val(cpendiente);
                  document.getElementById('infor').style.display='block';
                }//fin del for
            }//fin del if
          }//fin de success
          });//fin de la funcion si no hay un pago todavia del credito
        }//fin del else
      }//cierre succes
    }); //cierre de ajax
  });//cierre de la funcion change
  //FUNCION PARA CALCULAR LOS DIAS------------------------------
  $('#fechaPago').on('change', function(){
    //alert($('#fechaA').val());
    var fechaIncicio = new Date($('#fechaA').val()).getTime();
    var fechaFin = new Date($('#fechaPago').val()).getTime();
    //var fechaFin = new Date('2018-11-13').getTime();
    var dias = fechaFin - fechaIncicio;
    var diasp=Math.round(dias/(1000*60*60*24));
    $('#diasPagados').val(diasp);
    calculos();
  });//CIERRE DE LA FUNCION PARA CALCULAR LOS DIAS
  //FUNCION PARA HACER LOS DEMAS CALCULOS----------------------
  $('#totalPago').on('change', function(){
    calculos();
    
  })
});//cierre de la funcion principal

//funcion general para realizar todos los calculos

function calculos(){
    var capitalPendiente = $('#capitalPendiente1').val();
    // alert(capitalPendiente);
    var totalp = $('#totalPago').val();
    var diaspa = $('#diasPagados').val();
    var tasa = $('#tasa').val();
    var capitalpendiente1 = $('#capitalPendiente1').val();
    if(totalp ==""){
      //alert('campo para pagos vacio')
    }
    else{
      if(diaspa==""){
        // alert('vacio');
      }
      else{
        var tasaI = tasa/100;
        //var TasaInteresDiario= tasaI/30;
        //var totalInteres = TasaInteresDiario*(capitalPendiente)*diaspa;
        var Interes=(capitalPendiente*diaspa*tasaI)/30;
        var iva = Interes*0.13;
        // alert("Interes:"+Interes+" Iva: "+iva+"tasa: "+tasaI);
        var abonoCapital = totalp-Interes-iva;
        $('#iva').val(iva.toFixed(4));
        $('#interes').val(Interes.toFixed(4));
        $('#abonoCapital').val(abonoCapital.toFixed(4));
        var capitalPen = capitalPendiente - abonoCapital;
        //alert(capitalPen);
        $('#capitalP').val(capitalPen.toFixed(4));
        var ta=$('#totalAb').val();
        //alert(ta);
        var newAbono = abonoCapital+parseFloat(ta);
        $('#totalAbonado').val(newAbono.toFixed(4));
      } 
      //alert('asas');
    }

}
    function limpiar(){
        $('#idCredito').val("");
        $('#fechaPago').val("");
        $('#totalPago').val("");
    }
</script>

