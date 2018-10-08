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
                                    <li class="active">Registro de clientes</li>
                                </ol>
                            </div>
                        </div>
                        
                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Registro de clientes</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="basic-form" method="POST" action="">
                                           
                                        </form> 
                                    <div class="wizard">
                                        <div role="tabpanel">

                                            <ul class="nav nav-tabs nav-justified nav-tabs-dropdown" role="tablist">
                                                <li role="presentation" class="active"><a href="#step1" class="btn-block waves-effect waves-light" aria-controls="step1" role="tab" data-toggle="tab">Información personal</a></li>
                                                <li role="presentation" class="disabled"><a href="#step2" class="btn-block waves-effect waves-light" aria-controls="step2" role="tab" data-toggle="tab">Documentos y Domicilio</a></li>
                                                <li role="presentation" class="disabled"><a href="#step3" class="btn-block waves-effect waves-light" aria-controls="step3" role="tab" data-toggle="tab">Profesión u oficio</a></li>
                                                <li role="presentation" class="disabled"><a href="#step4" class="btn-block waves-effect waves-light" aria-controls="step4" role="tab" data-toggle="tab">Otra información</a></li>
                                                <div class="clearfix"></div>
                                            </ul>

                                        <form role="form" id="basic-form" method="POST" action="<?= base_url()?>Clientes/InsertarCliente">
                                            <div class="tab-content margn">

                                                <div class="tab-pane active" role="tabpanel" id="step1">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Nombre_Cliente">Nombre</label>
                                                            <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" placeholder="Nombre del cliente">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Apellido_Cliente">Apellido</label>
                                                            <input type="text" class="form-control" id="Apellido_Cliente" name="Apellido_Cliente" placeholder="Apellido del cliente">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Telefono_Cliente">Teléfono</label>
                                                            <input type="text" class="form-control" id="Telefono_Cliente" name="Telefono_Cliente" placeholder="Teléfono móvil">
                                                            </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Celular_Cliente">Celular</label>
                                                            <input type="text" class="form-control" id="Celular_Cliente" name="Celular_Cliente" placeholder="Teléfono celular">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Fecha_Nacimiento">Fecha de nacimiento</label>
                                                            <input type="text" class="form-control DateTime" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" data-mask="9999/99/99">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Estado_Cliente">Estado Civil</label>
                                                            <select id="Estado_Cliente" name="Estado_Cliente" class="form-control">
                                                                <option value="">.:Seleccione:.</option>
                                                                <option value="Soltero/a">Soltero/a</option>
                                                                <option value="Casado/a">Casado/a</option>
                                                                <option value="Divorsiado/a">Divorciado/a</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="pull-right">
                                                        <li><button type="button" class="btn btn-primary waves-effect waves-light next-step"><i class="fa fa-share"></i> Siguiente</button></li>
                                                    </ul>
                                                </div>

                                                <!--Tab Panel 2-->
                                                <div class="tab-pane" role="tabpanel" id="step2">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Dui_Cliente">DUI</label>
                                                            <input type="text" class="form-control" id="Dui_Cliente" name="Dui_Cliente" placeholder="DUI del cliente">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Nit_Cliente">NIT</label>
                                                            <input type="text" class="form-control" id="Nit_Cliente" name="Nit_Cliente" placeholder="NIT del cliente">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="cbbDepartamentos">Departamento</label>
                                                            <select id="cbbDepartamentos" name="cbbDepartamentos" class="select" data-placeholder="Elige un Departamento ...">
                                                            <option value=""></option>
                                                            <?php 
                                                            foreach ($datos->result() as $departamentos) { 
                                                            ?>
                                                            <option value="<?= $departamentos->Id_Departamento ?>"><?= $departamentos->Nombre_Departamento ?></option>
                                                              <?php  } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="cbbMunicipios">Municipio</label>
                                                            <select id="cbbMunicipios" name="cbbMunicipios" class="select" data-placeholder="...">
                                                            <option value="">...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="Zona">Zona </label>
                                                            <select id="Zona" name="Zona" class="form-control">
                                                            <option value="">.:Seleccione:.</option>
                                                            <option value="Rural">Rural</option>
                                                            <option value="Urbana">Urbana</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Domicilio_Cliente">Domicilio</label>
                                                            <textarea id="Domicilio_Cliente" rows="3" name="Domicilio_Cliente" class="form-control resize"></textarea>
                                                        </div>
                                                    </div>
                                                    <ul class="pull-right">
                                                        <li><button type="button" class="btn btn-default waves-effect waves-light prev-step"><i class="fa fa-reply"></i> Atras</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light next-step"><i class="fa fa-share"></i> Siguiente</button></li>
                                                    </ul>
                                                </div>

                                                <!--TAB PANEL 3-->
                                                <div class="tab-pane" role="tabpanel" id="step3">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="Prpofesion_Cliente">Profesion</label>
                                                            <input type="text" class="form-control" id="Prpofesion_Cliente" name="Profesion_Cliente" placeholder="Profesión del cliente">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="Tipo_Cliente">Tipo de cliente</label>
                                                            <select id="Tipo_Cliente" name="Tipo_Cliente" class="form-control">
                                                            <option value="">.:Seleccione:.</option>
                                                            <option value="Empleado">Empleado</option>
                                                            <option value="Empresario">Empresario</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="Genero_Cliente">Genero</label>
                                                            <select id="Genero_Cliente" name="Genero_Cliente" class="form-control">
                                                            <option value="">.:Seleccione:.</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Femenino">Femenino</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Observaciones">Observaciones</label>
                                                            <textarea id="Observaciones" rows="3" name="Observaciones" class="form-control resize"></textarea>
                                                        </div>
                                                    </div>
                                                    <ul class="pull-right">
                                                        <li><button type="button" class="btn btn-default waves-effect waves-light prev-step"><i class="fa fa-reply"></i> Atras</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light next-step"><i class="fa fa-share"></i> Siguiente</button></li>
                                                    </ul>
                                                </div>

                                                <!--TAB PANEL 4-->
                                                <div class="tab-pane" role="tabpanel" id="step4">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="name">Condición actual</label>
                                                            <select id="Condicion_Cliente" name="Condicion_Cliente" class="form-control">
                                                            <option value="">.:Seleccione:.</option>
                                                            <option value="Activo">Activo</option>
                                                            <option value="Inactivo">Inactivo</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Fecha_Registro">Fecha de registro</label>
                                                            <input type="text" class="form-control DateTime" id="Fecha_Registro" name="Fecha_Registro" placeholder="Fecha de registro del cliente" data-mask="9999/99/99">
                                                        </div>
                                                    </div>
                                                    <ul class="pull-right">
                                                        <li><button type="button" class="btn btn-default waves-effect waves-light prev-step"><i class="fa fa-reply"></i> Atras</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light btn-info-full next-step"><i class="fa fa-floppy-o"></i> Guardar</button></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>
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