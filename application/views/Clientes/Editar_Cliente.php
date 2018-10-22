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

<?php 
    foreach ($cliente->result() as $datos_cliente) {
    }
?> 
            <!-- ============================================================== -->
             <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <h4 class="pull-left page-title">Inicio</h4> -->
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?= base_url() ?>Clientes/gestionarCliente">Gestión de clientes</a></li>
                                    <li class="active">Actualizar cliente</li>
                                </ol>
                            </div>
                        </div>
                        
                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">ACTUALIZAR INFORMACIÓN DEL CLIENTE CODIGO <?php echo $datos_cliente->Codigo_Cliente?></h3>
                                    </div> 
                                    <div class="panel-body">
                                        <div class="wizard">
                                          <div role="tabpanel">
                                              <!-- Nav tabs -->
                                              <ul class="nav nav-tabs nav-justified nav-tabs-dropdown nav-pills" role="tablist">
                                                    <li role="presentation" class="active"><a href="#cliente1" class="btn-block waves-effect waves-light" aria-controls="cliente" role="tab" data-toggle="tab" style="pointer-events: none;cursor: default;">Información personal</a></li>
                                                    <li role="presentation" class="disabled"><a href="#cliente2" class="btn-block waves-effect waves-light" aria-controls="cliente2" role="tab" data-toggle="tab" style="pointer-events: none;cursor: default;">Documentos y Domicilio</a></li>
                                                    <li role="presentation" ><a href="#cliente3" id="btnTabsCliente" class="btn-block waves-effect waves-light" aria-controls="cliente3" role="tab" data-toggle="tab" style="pointer-events: none;cursor: default;">Profesión u oficio</a></li>
                                                    <li role="presentation" class="disabled" id="tabsEmpleado"><a href="#empleado" id="btnTabsEmpleado" class="btn-block waves-effect waves-light" aria-controls="empleado" role="tab" data-toggle="tab" style="pointer-events: none;cursor: default;">Tipo de cliente</a></li>
                                                <div class="clearfix"></div>
                                              </ul>

                                              <!-- Tab panes --> 
                                              <div class="tab-content margn top">
                                                <!--Tab Panel 1-->
                                                <div class="tab-pane active" role="tabpanel" id="cliente1">
                                                   <form role="form" id="basic-form" method="POST" action="<?= base_url()?>Clientes/editarCliente" autocomplete="off">
                                                    <!--*******************************CAMPOS OCULTOS***************************-->
                                                      <input type="hidden" name="id_cliente" value="<?php echo $datos_cliente->Id_Cliente; ?>">
                                                      <input type="hidden" name="departamento" value="<?= $datos_cliente->Fk_Id_Departamento;?>">
                                                      <input type="hidden" name="municipio" value="<?php echo $datos_cliente->Fk_Id_Municipio;?>">
                                                      <input type="hidden" name="condicion" value="<?php echo $datos_cliente->Condicion_Actual_Cliente;?>">
                                                      <input type="hidden" name="estado_civil" value="<?php echo $datos_cliente->Estado_Civil_Cliente;?>">
                                                      <input type="hidden" name="Tipo_Cliente" id="Tipo_Cliente" value="<?php echo $datos_cliente->Tipo_Cliente;?>">
                                                      <!--FIN DE CAMPOS OCULTOS-->
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                  <label for="Nombre_Cliente">Nombre</label>
                                                                  <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" value="<?= $datos_cliente->Nombre_Cliente ?>" placeholder="Nombre del cliente">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                  <label for="Apellido_Cliente">Apellido</label>
                                                                  <input type="text" class="form-control" id="Apellido_Cliente" name="Apellido_Cliente" value="<?= $datos_cliente->Apellido_Cliente ?>" placeholder="Apellido del cliente">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="Telefono_Cliente">Teléfono</label>
                                                                <input type="text" class="form-control" id="Telefono_Cliente" name="Telefono_Cliente" value="<?= $datos_cliente->Telefono_Fijo_Cliente?>"  placeholder="Teléfono móvil">
                                                                </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Celular_Cliente">Celular</label>
                                                                <input type="text" class="form-control" id="Celular_Cliente" name="Celular_Cliente" value="<?= $datos_cliente->Telefono_Celular_Cliente?>" placeholder="Teléfono celular">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="Ingreso_Mensual">Ingreso Mensual</label>
                                                                <input type="text" class="form-control" id="Ingreso_Mensual" name="Ingreso_Mensual" placeholder="Ingreso mensual">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                  <label for="Estado_Cliente">Estado Civil</label>
                                                                  <select onchange="javascript:document.all('estado_civil').value=this.value;" id="Estado_Cliente" name="Estado_Cliente" class="form-control">
                                                                  <option style="background-color:green; color:white;" value="<?php echo $datos_cliente->Estado_Civil_Cliente;?>"><?php echo $datos_cliente->Estado_Civil_Cliente;?></option>
                                                                    <option value="Soltero/a">Soltero/a</option>
                                                                    <option value="Casado/a">Casado/a</option>
                                                                    <option value="Divorsiado/a">Divorciado/a</option>
                                                                  </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="Fecha_Nacimiento">Fecha de nacimiento</label>
                                                                <input type="text" class="form-control DateTime" id="Fecha_Nacimiento" name="Fecha_Nacimiento" value="<?= $datos_cliente->Fecha_Nacimiento_Cliente?>" placeholder="Fecha de nacimiento" data-mask="9999/99/99">
                                                            </div>
                                                        </div>
                                                        <ul class="pull-right">
                                                            <li><button type="button" class="btn btn-primary waves-effect waves-light m-b-5 next-step"><i class="fa fa-share fa-lg"></i> Siguiente</button></li>
                                                        </ul>

                                                    </div>
                                                   <!-- </form>  -->
                                                    <!--Tab Panel 2-->
                                                    <div class="tab-pane" role="tabpanel" id="cliente2">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                  <label for="Dui_Cliente">DUI</label>
                                                                  <input type="text" class="form-control" id="Dui_Cliente" name="Dui_Cliente" placeholder="DUI del cliente" value="<?= $datos_cliente->DUI_Cliente?>" data-mask="99999999-9">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Nit_Cliente">NIT</label>
                                                                <input type="text" class="form-control" id="Nit_Cliente" name="Nit_Cliente" placeholder="NIT del cliente" value="<?= $datos_cliente->NIT_Cliente?>" data-mask="9999-999999-999-9">
                                                            </div>
                                                        </div>
                                                        <div class="row"> 
                                                            <div class="form-group col-md-4">
                                                                <label for="cbbDepartamentos">Departamento</label>
                                                                <select id="cbbDepartamentos" name="cbbDepartamentos" class="select" onchange="javascript:document.all('departamento').value=this.value;" data-placeholder="Elige un Departamento ...">
                                                                <option style="background-color:green; color:white;" value="<?= $datos_cliente->Fk_Id_Departamento;?>"><?= $datos_cliente->Nombre_Departamento?></option>
                                                                <?php 
                                                                  foreach ($datos->result() as $departamentos) {
                                                                ?>
                                                                <option value="<?= $departamentos->Id_Departamento ?>"><?= $departamentos->Nombre_Departamento ?></option>
                                                                <?php  } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cbbMunicipios">Municipio</label>
                                                                <select id="cbbMunicipios" name="cbbMunicipios" class="select" onchange="javascript:document.all('municipio').value=this.value;" data-placeholder="...">
                                                                <option style="background-color:green; color:white;" value="<?php echo $datos_cliente->Fk_Id_Municipio;?>"><?= $datos_cliente->Nombre_Municipio?></option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="Zona">Zona </label>
                                                                <select id="Zona" name="Zona" class="form-control" value="<?= $datos_cliente->Zona_Cliente?>">
                                                                <option value="">.::Seleccionar::.</option>
                                                                <option value="Rural">Rural</option>
                                                                <option value="Urbana">Urbana</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="Domicilio_Cliente">Domicilio</label>
                                                                <textarea id="Domicilio_Cliente" rows="3" name="Domicilio_Cliente" class="form-control resize"
                                                                  value="<?= $datos_cliente->Domicilio_Cliente?>"><?= $datos_cliente->Domicilio_Cliente?></textarea>
                                                            </div>
                                                        </div>
                                                        <ul class="pull-right">
                                                            <li><button type="button" class="btn btn-default waves-effect waves-light m-b-5 prev-step"><i class="fa fa-reply fa-lg"></i> Atras</button>
                                                            <button type="button" id="siguient0" class="btn btn-primary waves-effect waves-light m-b-5 next-step"><i class="fa fa-share fa-lg"></i> Siguiente</button></li>
                                                        </ul>
                                                    </div>

                                                    <!--TAB PANEL 3-->
                                                    <div class="tab-pane cliente3" role="tabpanel" id="cliente3">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="Profesion_Cliente">Profesión</label>
                                                                <input type="text" class="form-control" id="Profesion_Cliente" name="Profesion_Cliente" placeholder="Profesión del cliente" value="<?= $datos_cliente->Profesion_Cliente?>">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="Condicion_Cliente">Condición actual</label>
                                                                <select onchange="javascript:document.all('condicion').value=this.value;" id="Condicion_Cliente" name="Condicion_Cliente" class="form-control">
                                                                <option style="background-color:green; color:white;" value="<?php echo $datos_cliente->Condicion_Actual_Cliente;?>"><?php echo $datos_cliente->Condicion_Actual_Cliente;?></option>
                                                                <option value="Activo">Activo</option>
                                                                <option value="Inactivo">Inactivo</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="select">Tipo de cliente</label>
                                                                <select id="select" onchange="javascript:document.all('Tipo_Cliente').value=this.value;" class="form-control">
                                                                <option style="background-color:green; color:white;" value="<?php echo $datos_cliente->Tipo_Cliente;?>"><?php echo $datos_cliente->Tipo_Cliente;?></option>
                                                                <option value="Empleado">Empleado</option>
                                                                <option value="Empresario">Empresario</option>
                                                                <option value="Otro">Otro</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="Genero_Cliente">Genero</label>
                                                                <select id="Genero_Cliente" name="Genero_Cliente" class="form-control">
                                                                <option value="">.::Seleccionar::.</option>
                                                                <option value="Masculino">Masculino</option>
                                                                <option value="Femenino">Femenino</option>
                                                                <option value="Otro">Otro</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="Observaciones">Observaciones</label>
                                                                <textarea id="Observaciones" rows="3" name="Observaciones" class="form-control resize"
                                                                  value="<?= $datos_cliente->Observaciones_Cliente?>"><?= $datos_cliente->Observaciones_Cliente?></textarea>
                                                            </div>
                                                        </div>
                                                        <ul class="pull-right">
                                                            <li>
                                                                <button type="button" id="atras0" class="btn btn-default waves-effect waves-light m-b-5 prev-step"><i class="fa fa-reply fa-lg"></i> Atras</button>
                                                                <a href="<?= base_url() ?>Clientes/gestionarCliente" class="btn btn-default waves-effect waves-light m-b-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
                                                                <button  type="submit" class="btn btn-warning waves-effect waves-light m-b-5 btn-info-full guardar1"><i class="fa fa-save fa-lg"></i> Actualizar</button>
                                                                <a id="btn" class="btn btn-primary waves-effect waves-light m-b-5 next-step siguiente1" style="display: none;"><i class="fa fa-share fa-lg"></i> Siguiente</a></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                                <!--Final del formulario Para ACTUALIZAR-->

                                                <!--Tab Panel 4-->
                                                <!--Tab Panel 4.1-->

                                                <!--FORMULARIO PARA ACTUALIZAR DATOS LABORALES DEL CLIENTE-->

                                                    <div role="tabpanel" class="tab-pane empleado" style="display: none;">
                                                <form role="form" method="POST" action="<?= base_url()?>Clientes/datosLaborales" autocomplete="off">
                                                        <div class="row">
                                                          <div class="form-group col-md-6">
                                                              <label>Cliente: <input type="text" id="NombreTipoClienteEmpleado" class="style" readonly="true"></label>
                                                            <!--===============CAMPO OCULTO================-->
                                                             <input type="text" hidden id="Id_Cliente1" name="Fk_Id_Cliente" class="style" readonly="true">
                                                           </div>
                                                            <div class="form-group col-md-6">
                                                              <label>Tipo de cliente: <input type="text" id="TipoClienteEmpleado" class="style" readonly="true">
                                                                </label>
                                                              </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="Nombre_Empresa">Nombre de la empresa</label>
                                                                <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Empresa" placeholder="Nombre de la empresa">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="Cargo">Cargo que desempeña</label>
                                                                <input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Cargo que desempeña">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="Telefono">Teléfono</label>
                                                                <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Teléfono" data-mask="(999) 9999-9999? x99999">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="Direccion">Dirección de la empresa</label>
                                                                <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Dirección de empresa">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Rubro">Rubro de la empresa en que trabaja</label>
                                                                <input type="text" class="form-control" id="Rubro" name="Rubro" placeholder="Rubro de la empresa">
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="Observaciones">Observaciones</label>
                                                                <textarea id="Observaciones" rows="3" name="Observaciones" class="form-control resize"></textarea>
                                                            </div>
                                                        </div>
                                                        <ul class="list-inline pull-right">
                                                            <li><a href="<?= base_url() ?>Clientes/gestionarCliente" class="btn btn-default waves-effect waves-light m-b-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
                                                            <button type="submit" class="btn btn-warning waves-effect waves-light m-b-5 btn-info-full"><i class="fa fa-save fa-lg"></i> Actualizar</button></li>
                                                        </ul>
                                                </form>
                                                    </div>
                                                    <!--FINAL DEL FORMULARIO PARA ACTUALIZAR DATOS LABORALES-->
                                                <!--Tab Panel 4.2-->
                                                <!--FORMULARIO PARA ACTUALIZAR DATOS DEL NEGOCIO DEL CLIENTE-->
                                                    <div role="tabpanel" class="tab-pane empresario" style="display: none;">
                                                <form role="form" method="POST" action="<?= base_url()?>Clientes/datosNegocio" autocomplete="off">
                                                        <div class="row">
                                                          <div class="form-group col-md-6">
                                                              <label>Cliente: <input type="text" id="NombreTipoClienteEmpresario" class="style" readonly="true"></label>
                                                              <!--===============CAMPO OCULTO================-->
                                                            <input type="text" hidden id="Id_Cliente2" name="Fk_Id_Cliente" class="style" readonly="true">
                                                           </div>
                                                            <div class="form-group col-md-6">
                                                              <label>Tipo de cliente: <input type="text" id="TipoClienteEmpresario" class="style" readonly="true">
                                                                </label>
                                                              </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="Nombre_Empresa">Nombre del negocio</label>
                                                                <input type="text" class="form-control" id="Nombre_Empresa" name="Nombre_Negocio" placeholder="Nombre del negocio">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="NIT">NIT</label>
                                                                <input type="text" class="form-control" id="NIT" name="NIT" placeholder="NIT" data-mask="9999-999999-999-9">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="NRC">Número de Registro del Contribuyente(NRC)</label>
                                                                <input type="text" class="form-control" id="NRC" name="NRC" placeholder="Número de Registro del Contibuyente" data-mask="9999-999999-999-9">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Giro">Giro</label>
                                                                <input type="text" class="form-control" id="Giro" name="Giro" placeholder="Giro del negocio">
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-7">
                                                                <label for="Direccion_Negocio">Dirección del negocio</label>
                                                                <input type="text" class="form-control" id="Direccion_Negocio" name="Direccion_Negocio" placeholder="Dirección del negocio">
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label for="Tipo_Factura">Tipo de factura</label>
                                                                <input type="text" class="form-control" id="Tipo_Factura" name="Tipo_Factura" placeholder="Tipo factura">
                                                            </div>
                                                        </div>
                                                        <ul class=" pull-right">
                                                            <li><a href="<?= base_url() ?>Clientes/gestionarCliente" class="btn btn-default waves-effect waves-light m-b-5"><i class="fa fa-close fa-lg"></i> Cancelar</a>
                                                            <button type="submit" id="Guardar" class="btn btn-warning waves-effect waves-light m-b-5 btn-info-full"><i class="fa fa-save fa-lg"></i> Actualizar</button></li>
                                                        </ul>
                                                </form>
                                                    </div>
                                                    <!--FINAL DEL FORMULARIO PARA ACTUALIZAR DATOS DEL NEGOCIO DEL CLIENTE-->
                                                <!-- Fin Tab Panel 4-->
                                                <div class="clearfix"></div>
                                            </div>
                                         </div>
                                        </div>                     
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->           
                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

<script type="text/javascript">
/*funcion ajax que llena el combo dependiendo de la categoria seleccionada*/

$(document).ready(function(){
    //funcion para insertar los datos
    $("#btn").on("click",function(){
        //evnt.preventDefault();
        alert('hola')
        $.ajax({
        url:"<?= base_url()?>Clientes/InsertarCliente",
        type:"POST",
        data:$('#basic-form').serialize(),
        success:function(respuesta){
            alert('hola');
            var regi=eval(respuesta);
            alert(regi[0]['Id_Cliente']);
            $('#Id_Cliente1').val(regi[0]['Id_Cliente']);
            $('#Id_Cliente2').val(regi[0]['Id_Cliente']);

        }
            
    });
    });
    //final de la funcion para insertar los datos
   $("#cbbDepartamentos").change(function () {
      
      $('#cbbMunicipios').each(function(){
          $('#cbbMunicipios option').remove();
      })

      $.ajax({
             url: "obtenerMunicipios",
             type: "GET",
             data: {ID:$(this).val()},
            success:function(respuesta){
                var registro = eval(respuesta);
                    if (registro.length > 0)
                    {
                        var opciones = "";
                        for (var i = 0; i < registro.length; i++) 
                        {
                            opciones += "<option value='"+ registro[i]["Id_Municipio"] +"'>"+ registro[i]["Nombre_Municipio"] +"</option>";
                        }
                            //alert(opciones);

                            $("#cbbMunicipios").append(opciones);
                            //$("#cbbMunicipios").innerHTML=opciones;
                    }
                }
             });

   });   
});
/*fin de la funcion ajax que llena el combo dependiendo de la categoria seleccionada*/
</script>
    <script type="text/javascript">

        $( function() {
            $("#select").change( function() {
                if ($(this).val() === "") {
                    $(".siguiente1").hide();
                    $(".guardar1").show();
                }
                if ($(this).val() === "Otro") {
                    $(".siguiente1").hide();
                    $(".guardar1").show();
                }
                if ($(this).val() === "Empleado") {
                    $(".siguiente1").show();
                    $(".guardar1").hide();
                } 
                if ($(this).val() === "Empresario") {
                    $(".siguiente1").show();
                    $(".guardar1").hide();
                }
            });

            $("#btn").click( function() {
                var $r = $("#select").val();
                if ($r === "Empleado") {
                    $(".cliente3").hide();
                    $(".empleado").show();
                } 
                if ($r === "Empresario") {
                    $(".cliente3").hide();
                    $(".empresario").show();
                } 

                $("#NombreTipoClienteEmpleado").val($("#Nombre_Cliente").val());
                $("#TipoClienteEmpleado").val($("#select").val());

                $("#NombreTipoClienteEmpresario").val($("#Nombre_Cliente").val());
                $("#TipoClienteEmpresario").val($("#select").val());
            });

            $("#atras0").click( function() {
                var $r2 = $("#select").val();
                if ($r2 === "") {
                    $(".cliente3").hide();
                }
                if ($r2 === "Otro") {
                    $(".cliente3").hide();
                }
                if ($r2 === "Empleado") {
                    $(".cliente3").hide();
                }
                if ($r2 === "Empresario") {
                    $(".cliente3").hide();
                }
            });

            $("#siguient0").click( function() {
                var $r2 = $("#select").val();
                if ($r2 === "") {
                    $(".cliente3").show();
                }
                if ($r2 === "Otro") {
                    $(".cliente3").show();
                }
            }); 

            $("#btnTabsEmpleado").click( function() {
                var $r3 = $("#select").val();
                if ($r3 === "Empleado") {
                    $(".empleado").show();
                    $(".cliente3").hide();
                }
                if ($r3 === "Empresario") {
                    $(".empresario").show();
                    $(".cliente3").hide();
                }
            });
            $("#btnTabsCliente").click( function() {
                var $r4 = $("#select").val();
                if ($r4 === "Empleado") {
                    $(".empleado").hide();
                    $(".cliente3").show();
                }
                if ($r4 === "Empresario") {
                    $(".empresario").hide();
                    $(".cliente3").show();
                }
            });
        });
    </script>