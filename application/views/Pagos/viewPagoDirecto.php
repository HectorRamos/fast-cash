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
            <li><a href="<?= base_url() ?>Creditos">Operecinones</a></li>
            <li class="active">Pagos</li>
          </ol>
        </
      </div>
      <?php
      if (sizeof($caja->result())==0)
              {
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Accion no permitida</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="alert alert-danger">
                <h3>No se a realizado la apertura de caja o ya se hizo el cierre de caja, comuniquese con el administrador</h3>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    else{
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Pago de credito</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <!-- Formulario del empleado  -->
              <form method="post" action="<?= base_url()?>Pagos/InsertarPago" autocomplete="off" id="FrmPagos">
                <div class="margn">
                  <div class="row">
                  <!--CAMPOS OCULTOS-->
                  <?php 
                  foreach ($caja->result() as $caja) {
                    # code...
                  }
                  ?>
                  <input type="text" hidden name="idCajaChica" value="<?php echo $caja->idCajaChica?>">
                  <input type="text" hidden name="fechaCajaChica" value="<?= $caja->fechaCajaChica?>">
                  <input type="text" hidden name="cantidadApertura" value="<?= $caja->cantidadApertura?>">
                  <!--FIN DE LOS CAMPOS OCULTOS-->
                    <div class="form-group col-md-12">
                    </div>                
                  </div>
                   <div id="infor" class="alert alert-success" >
                    <?php 
                      foreach ($creditos->result() as $pago) {
                      # code...
                      }
                    ?>
                      <h4>Informacion</h4>
                        <div class="row">
                          <div class="form-group col-md-4">
                            <label for="Cliente">Cliente</label>
                            <input type="text" hidden name="idCredito" value="<?= $pago->idCredito?>">
                              <input type="text" class="form-control" id="cliente" name="Cliente" placeholder="Código del cliente"
                              readonly  value="<?php echo $pago->Nombre_Cliente." ".$pago->Apellido_Cliente?>">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="Nombre_Cliente">Capital</label>
                              <input type="text" class="form-control" id="capital" name="capital" readonly="true" placeholder="Nombre del cliente" value="<?= $pago->capital?>" >
                            </div>
                            <div class="form-group col-md-4">
                              <label for="Apellido_Cliente">Tasa de interes</label>
                              <input type="text" class="form-control" id="tasa" name="tasa" readonly="true" placeholder="Apellido del cliente" value="<?= $pago->tasaInteres?>" >
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label for="Apellido_Cliente">Fecha de apertura del credito</label>
                              <input type="text" class="form-control" id="fechaA" name="fechaA" readonly="true" placeholder="Apellido del cliente" value="<?= $pago->fechaPago?>" >
                            </div>
                            <div class="form-group col-md-4">
                              <label for="Apellido_Cliente">Capital abonado hasta la fecha</label>
                              <input type="text" class="form-control" id="totalAb" name="totalAb" readonly="true" placeholder="Capital Abonado" value="<?= $pago->totalAbonado?>" >
                            </div>
                            <div class="form-group col-md-4">
                              <label for="Apellido_Cliente">Capital pendiente</label>
                              <input type="text" class="form-control" id="capitalPendiente1" name="capitalPendiente1" readonly="true" placeholder="Capital Abonado" value="<?php 
                              echo $pago->capital-$pago->totalAbonado;
                              ?>">
                              <input type="text" hidden name="pagoReal" id="pagoReal">
                            </div>
                        </div>
                    </div>
                  <div class="row">
                  <div class="form-group col-md-4">
                        <label for="Nombre_Cliente">Fecha de pago</label>
                        <input type="text" class="form-control DateTime" id="fechaPago" name="fechaPago" placeholder="Fecha de nacimiento" data-mask="9999/99/99" required data-parsley-required-message="Por favor, seleccione  una fecha de pago">
                      </div>
                    <div class="form-group col-md-4">
                      <label for="Codigo_Cliente">Total Pago</label>
                        <input type="text" class="form-control" id="totalPago" name="totalPago" placeholder="Código del cliente" required data-parsley-required-message="Por favor, inserte el monto de dinero">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Nombre_Cliente">iva</label>
                        <input type="text" class="form-control" id="iva" name="iva" readonly="true" placeholder="Nombre del cliente" required data-parsley-required-message="No puede guardar el pago sin seleccionar un credito">
                      </div>
                      
                  </div>
                  <div class="row">
                      <div class="form-group col-md-4">
                        <label for="Apellido_Cliente">interes</label>
                        <input type="text" class="form-control" id="interes" name="interes" readonly="true" placeholder="Apellido del cliente" required data-parsley-required-message="No puede guardar el pago sin seleccionar un credito">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Codigo_Cliente">abono a capital</label>
                        <input type="text" class="form-control" id="abonoCapital" name="abonoCapital" readonly="true" placeholder="Código del cliente" required data-parsley-required-message="No puede guardar el pago sin seleccionar un credito">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="Apellido_Cliente">dias a cancelar</label>
                        <input type="text" class="form-control" id="diasPagados" name="diasPagados" readonly="true" placeholder="Apellido del cliente" required data-parsley-required-message="No puede guardar el pago sin seleccionar un credito">
                      </div> 
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="Nombre_Cliente">capital pendiente</label>
                      <input type="text" class="form-control" id="capitalP" name="capitalPendiente" readonly="true" placeholder="capital pendiente" required data-parsley-required-message="No puede guardar el pago sin seleccionar un credito">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="Nombre_Cliente">Total Abonado</label>
                      <input type="text" class="form-control" id="totalAbonado" name="totalAbonado" readonly="true" placeholder="capital total abonado despues del pago" required data-parsley-required-message="No puede guardar el pago sin seleccionar un credito">
                    </div>  
                       
                    <div class="form-group col-md-4">
                      <label for="vuelto">Vuelto</label>
                        <input type="text" class="form-control" id="vuelto" name="vuelto" readonly="true" placeholder="Vuelto" 
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-floppy-o fa-lg"></i> Guardar</button>
                  <button type="reset" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-refresh fa-lg"></i> Limpiar</button>
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
<?php
}
?>
<script type="text/javascript">
$(document).on('ready', function(){
  $('#FrmPagos').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  });
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
    //alert(capitalPendiente);
    var totalp = $('#totalPago').val();
    var diaspa = $('#diasPagados').val();
    var tasa = $('#tasa').val();
    var capitalpendiente1 = $('#capitalPendiente1').val();
    if(totalp ==""){
      //alert('campo para pagos vacio')
    }
    else{
      if(diaspa==""){
        alert('vacio');
      }
      else{
        var tasaI = tasa/100;
        //var TasaInteresDiario= tasaI/30;
        //var totalInteres = TasaInteresDiario*(capitalPendiente)*diaspa;
        var Interes=(capitalPendiente*diaspa*tasaI)/30;
        var iva = Interes*0.13;
        //alert("Interes:"+Interes+" Iva: "+iva+"tasa: "+tasaI);
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
        alert('Nuevo abonado: '+newAbono);
        $('#pagoReal').val(totalp);
       if(parseFloat($('#totalAbonado').val()) >= parseFloat($('#capital').val())){
          var abono = $('#totalAbonado').val();
          var vuelto;
          var capitalPend = $('#capitalPendiente1').val();
          vuelto = abonoCapital - capitalPend;
          var newAbonoCApital = abonoCapital-vuelto;
          var newCapitalPendiente=capitalPend - newAbonoCApital;
          var ab= $('#totalAb').val()
          var newTotalAbono= newAbonoCApital + parseFloat(ab); 
          $('#abonoCapital').val(newAbonoCApital)
          $('#vuelto').val(vuelto);
          $('#capitalP').val(newCapitalPendiente);
          $('#totalAbonado').val(newTotalAbono);
          $('#pagoReal').val(parseFloat(newAbonoCApital)+parseFloat(Interes)+parseFloat(iva));
          swal("Mensaje de notificación!", "El credito seria saldado con este pago");
        }
        
      } 
      //alert('asas');
    }

}
  
</script>

