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
              <form method="post" action="<?= base_url() ?>Solicitud/GuardarCredito">
               <!--  <label for="">Id de la solicitud</label>
                <input type="text" value="<?= $id ?>"> -->
                <?php 
                  foreach ($datos->result() as $amortizacion) {
                    
                  }
                ?>

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
                                <option value="CPFC">Crédito personal</option>
     
                              </select>
                        </div>
                      </div>
<!--                     </div>                    
                    <div class="row"> -->

                      <div class="form-group col-md-6">
                            <label for="codigo_tipo_credito">Código tipo de cŕedito</label>
                            <input type="text" class="form-control" id="codigo_tipo_credito" name="codigo_tipo_credito" placeholder="Código del tipo de crédito">
                            <input type="hidden" class="form-control" id="numero_meses" name="numero_meses" value="<?= $amortizacion->plazoMeses ?>">
                            <input type="hidden" class="form-control" id="nombre_credito" name="nombre_credito">
                            <input type="hidden" class="form-control" id="id_solicitud" name="id_solicitud" value="<?= $amortizacion->idSolicitud ?>">
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
                            <input type="text" class="form-control" id="fecha_de_vencimiento" name="fecha_de_vencimiento" placeholder="Fecha de vencimiento">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="monto_dinero">Monto de dinero</label>
                            <input type="text" class="form-control" id="monto_dinero" name="monto_dinero" value="<?= $amortizacion->ivaInteresCapital ?>">
                      </div>
                    </div>
                    <!-- Fin de la segunda Linea del formulario-->

                     <!-- Tercera Linea del formulario-->
                    <div class="row">
                      <div class="form-group col-md-3">
                            <!-- <label for="">Amortizacion</label> -->
                            <input type="hidden" class="form-control" id="amortizacion" name="amortizacion" value="<?= $amortizacion->idAmortizacion ?>">
                      </div>
                      <!-- <div class="form-group col-md-9">
                            <label for="nombre_cliente">Documento</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento">
                            <a title="Agregar Documento" class="input-group-addon btn btn-primary" data-toggle="modal" data-target="#agregarDocumento"><i class="fa fa-user-plus fa-lg"></i></a>
                          </div>
                      </div> -->
                    </div>
                    <!-- Fin de la tercera Linea del formulario-->
               </div>
               <button hidden  type="submit" id="btnGuadar"></button>
              </form>
              <br>
                  <!-- Subir documentos-->
                    <div class="row" style="display:none;" id="divDocs">
                      <form action="/" method="post" class="dropzone" enctype="multipart/form-data" id="dropzone">
                          <div class="fallback">
                            <input type="file" name="file">
                          </div>
                          <input hidden type="text" name="codigo" id="codigo">
                          <div class="dz-default dz-message">
                            <h3>subir documentos</h3>
                            <p>Arrastre los archivos hasta la zona indicada o click aqui para abrir la ventana de subida</p>
                          </div>
                      </form>
                    </div>
                    <!-- Fin para subir documentos-->
                    <br>
                    <div class="row">
                        <a id="env" class="btn btn-success waves-effect waves-light m-d-5"><i class="fa fa-save fa-lg"></i> Guardar</a>
                       <button type="reset" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-refresh fa-lg"></i> Limpiar</button>
                       <a href="<?= base_url() ?>Home/Main" class="btn btn-default waves-effect waves-light m-d-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
                      
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

<!--INICIO DEL CODIGO JAVSCRIPT-->
<script type="text/javascript">
  $(document).ready(function()
  {
    Dropzone.options.dropzone = {
      url:"<?= base_url()?>Documentos/SubirDocumentos",
      acceptedFiles : ".doc, .docx, .pdf",
      maxFilesize: 2,
      maxFiles:2,
      init:function(){
          var self = this;
          // config
          self.options.addRemoveLinks = true;
          self.options.dictRemoveFile = "Quitar";
          self.options.dictInvalidFileType="Tipo de documento invalido";
          self.options.dictFileTooBig="Tamaño del archivo no permito el tamaño maximo es de 2 MB";

          //New file added
          self.on("addedfile", function (file) {
            console.log('new file added ', file);
          });
           // Send file starts
          self.on("sending", function (file) {
            console.log('upload started', file);
            $('.meter').show();
          });
          self.on("error", function(file){
            alert("Error subiendo el archivo " + file.name);
            //removeFIle(file);

          });
      }
    }
    //ejecutar el envento submit para el formulario
        $("#env").on("click", function(){
          alert('aaaaaaaaa');
          $('#btnGuadar').click();
        });
    //validar el codigo del cliente
      $("#codigo_credito").on("change", function(){
        if($("#codigo_credito").val()!==""){
          $("#codigo").val($("#codigo_credito").val());
          document.getElementById("divDocs").style.display="block";
        }
        else{
          document.getElementById("divDocs").style.display="none";
        }
      })
        


    // Funciones para capturar el codigo del prestamo y calcular nueva fecha de vencimiento

    // Bloqueando las cajas de codigo de credito y fecha de vencimiento
    $("#codigo_tipo_credito").prop('readonly', true);
    $("#fecha_de_vencimiento").prop('readonly', true);
    $("#monto_dinero").prop('readonly', true);

    $("#tipo_credito").on("change", function()
    {
        indice = document.getElementById('tipo_credito').selectedIndex;
        codigoCredito = $("#tipo_credito").val();
        tipoCredito = document.getElementById('tipo_credito').options[indice].text;
        $("#codigo_tipo_credito").attr("value", codigoCredito);
        $("#nombre_credito").attr("value", tipoCredito);
    });

    // Calculando fecha de vencimiento
    $("#fecha_apertura").on("change", function() {
      fechaApertura = $("#fecha_apertura").val();
      meses = parseInt($("#numero_meses").val());

      // fecha = new Date();
      // fechaVencimiento = fecha.setMonth(fecha.getMonth() + 3);

      var dt = new Date(fechaApertura);

      // Display the month, day, and year. getMonth() returns a 0-based number.
      // var myDate = new Date("1/1/1990");
      var dayOfMonth = dt.getMonth();
      dt.setMonth(dayOfMonth + meses);

      var month = dt.getMonth()+1;
      var day = dt.getDate();
      var year = dt.getFullYear();
      // document.write();

      fechaVencimiento = year + '/' + month + '/' + day;
      $("#fecha_de_vencimiento").attr("value", fechaVencimiento);
      // alert(dt);
    });
  });
</script>
<!--FINAL DEL CODIGO JAVSCRIPT