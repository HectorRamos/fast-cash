            <?php if($this->session->flashdata("errorr")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('error', 'top right', 'Aviso!', '<?php echo $this->session->flashdata("errorr")?>');
                });
              </script>
            <?php endif; ?>
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
                                <h4 class="pull-left page-title">Clientes</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?= base_url() ?>Clientes/gestionarCliente">Registro de clientes</a></li>
                                    <li class="active">Registro de nuevo Cliente</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <div class="table-title">
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <h3 class="panel-title">Registro de nuevo Cliente</h3>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <form id="FormNuevoCliente" method="POST" action="<?= base_url()?>Clientes/InsertarCliente" autocomplete="off">
                                                  <div class="row">
                                                      <div class="form-group col-sm-6">
                                                            <label for="Nombre_Cliente">Nombre</label>
                                                            <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" placeholder="Nombre del cliente">
                                                      </div>
                                                      <div class="form-group col-sm-6">
                                                            <label for="Apellido_Cliente">Apellido</label>
                                                            <input type="text" class="form-control" id="Apellido_Cliente" name="Apellido_Cliente" placeholder="Apellido del cliente">
                                                      </div>
                                                  </div>

                                                  <div class="row">
                                                        <div class="form-group col-sm-6">
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
                                                        <div class="form-group col-sm-6">
                                                              <label for="cbbMunicipios">Municipio</label>
                                                              <select id="cbbMunicipios" name="cbbMunicipios" class="select" data-placeholder="...">
                                                                <option value="">...</option>
                                                              </select>
                                                        </div>
                                                    </div> 

                                                    <div class="row">
                                                          <div class="form-group col-sm-6">
                                                                <label for="Condicion_Cliente">Condición actual</label>
                                                                <select id="Condicion_Cliente" name="Condicion_Cliente" class="form-control">
                                                                  <option value="Activo">Activo</option>
                                                                  <option value="Inactivo">Inactivo</option>
                                                                </select>
                                                          </div>
                                                          <div class="form-group col-sm-6">
                                                                <label for="Estado_Cliente">Estado civil</label>
                                                                <select id="Estado_Cliente" name="Estado_Cliente" class="form-control">
                                                                  <option value="Soltero/a">Soltero/a</option>
                                                                  <option value="Casado/a">Casado/a</option>
                                                                  <option value="Divorsiado/a">Divorciado/a</option>
                                                                </select>
                                                          </div>
                                                    </div>

                                                    <div class="row">
                                                          <div class="form-group col-sm-6">
                                                                <label for="Genero_Cliente">Genero</label>
                                                                <select id="Genero_Cliente" name="Genero_Cliente" class="form-control">
                                                                  <option value="Masculino">Masculino</option>
                                                                  <option value="Femenino">Femenino</option>
                                                                </select>
                                                          </div>
                                                          <div class="form-group col-sm-6">
                                                                <label for="Telefono_Cliente">Teléfono fijo</label>
                                                                <input type="text" class="form-control" id="Telefono_Cliente" name="Telefono_Cliente" placeholder="Teléfono móvil" data-mask="(999) 9999-9999? x99999">
                                                          </div>
                                                    </div>

                                                    <div class="row">
                                                          <div class="form-group col-sm-6">
                                                                <label for="Celular_Cliente">Teléfono celular</label>
                                                                <input type="text" class="form-control" id="Celular_Cliente" name="Celular_Cliente" placeholder="Teléfono celular" data-mask="(999) 9999-9999? x99999">
                                                          </div>
                                                          <div class="form-group col-sm-6">
                                                                <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                                                                <input type="text" class="form-control DateTime" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" data-mask="9999/99/99">
                                                          </div>
                                                    </div>

                                                    <div class="row">
                                                          <div class="form-group col-sm-6">
                                                                <label for="Zona">Zona</label>
                                                                <select id="Zona" name="Zona" class="form-control">
                                                                  <option value="Rural">Rural</option>
                                                                  <option value="Urbana">Urbana</option>
                                                                </select>
                                                          </div>
                                                          <div class="form-group col-sm-6">
                                                                <label for="Dui_Cliente">DUI</label>
                                                                <input type="text" class="form-control" id="Dui_Cliente" name="Dui_Cliente" placeholder="DUI del cliente" data-mask="99999999-9">
                                                          </div>
                                                    </div>

                                                  <div class="row">
                                                        <div class="form-group col-sm-6">
                                                              <label for="Nit_Cliente">NIT</label>
                                                              <input type="text" class="form-control" id="Nit_Cliente" name="Nit_Cliente" placeholder="NIT del cliente" data-mask="9999-999999-999-9">
                                                        </div>
                                                        <div class="form-group col-sm-6">

                                                              <label for="Fecha_Registro">Fecha de registro</label>
                                                              <input type="text" class="form-control DateTime" id="Fecha_Registro" name="Fecha_Registro" placeholder="Fecha de registro del cliente" data-mask="9999/99/99">
                                                        </div>
                                                  </div>

                                                  <div class="row">
                                                        <div class="form-group col-sm-6">
                                                              <label for="Profesion_Cliente">Profesión</label>
                                                              <input type="text" class="form-control" id="Profesion_Cliente" name="Profesion_Cliente" placeholder="Profesión del cliente">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                              <label for="Tipo_Cliente">Tipo de cliente</label>
                                                              <select id="Tipo_Cliente" name="Tipo_Cliente" class="form-control">
                                                                <option value="Empleado">Empleado</option>
                                                                <option value="Empresario">Empresario</option>
                                                              </select>
                                                        </div>
                                                  </div>

                                                   <div class="row">
                                                        <div class="form-group col-sm-6">
                                                              <label for="Domicilio_Cliente">Domicilio</label>
                                                              <textarea id="Domicilio_Cliente" rows="3" name="Domicilio_Cliente" class="form-control resize"></textarea>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                              <label for="Observaciones">Observaciones</label>
                                                              <textarea id="Observaciones" rows="3" name="Observaciones" class="form-control resize"></textarea>
                                                        </div>
                                                  </div>
                                                  <button type="submit" class="btn btn-primary"><i class="fa fa-mail-forward"></i> Siguiente</button>
                                                </form>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Row -->  

                    </div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

 <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
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
