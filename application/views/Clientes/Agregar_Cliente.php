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

                       <div class="row">
                       <h1>Registro de Clientes</h1>
                           <form method="POST" action="<?= base_url()?>Clientes/InsertarCliente">
                             <!-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre</label>
                                          <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" placeholder="Nombre del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Apellido</label>
                                          <input type="text" class="form-control" id="Apellido_Cliente" name="Apellido_Cliente" placeholder="Apellido del cliente">
                                    </div>
                              </div>
                              -->
<!--
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Departamento</label>
                                          <select id="cbbDepartamentos" name="cbbDepartamentos" class="form-control">
                                            <option value=""></option>
                                          <?php 
                                            foreach ($datos->result() as $departamentos) { 
                                          ?>

                                            <option value="<?= $departamentos->Id_Departamento ?>"><?= $departamentos->Nombre_Departamento ?></option>

                                          <?php  } ?>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Municipio</label>
                                          <select id="cbbMunicipios" name="cbbMunicipios" class="form-control">
                                            <option value="">...</option>
                                          </select>
                                    </div>
                              </div> -->


                            <!--  <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Condición actual</label>
                                          <select id="Condicion_Cliente" name="Condicion_Cliente" class="form-control">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                          </select>
                                    </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Estado civil</label>
                                          <select id="Estado_Cliente" name="Estado_Cliente" class="form-control">
                                            <option value="Soltero/a">Soltero/a</option>
                                            <option value="Casado/a">Casado/a</option>
                                            <option value="Divorsiado/a">Divorciado/a</option>
                                          </select>
                                    </div>
                              </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Genero</label>
                                          <select id="Genero_Cliente" name="Genero_Cliente" class="form-control">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                          </select>
                                    </div>
                                  <div class="form-group col-md-6">
                                          <label for="">Teléfono fijo</label>
                                          <input type="text" class="form-control" id="Telefono_Cliente" name="Telefono_Cliente" placeholder="Teléfono móvil">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Teléfono celular</label>
                                          <input type="text" class="form-control" id="Celular_Cliente" name="Celular_Cliente" placeholder="Teléfono celular">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Fecha de nacimiento</label>
                                          <input type="text" class="form-control" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento">
                                    </div>-->
                              </div>

                              <!--  <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Zona</label>
                                          <select id="Zona" name="Zona" class="form-control">
                                            <option value="Rural">Rural</option>
                                            <option value="Urbana">Urbana</option>
                                          </select>
                                    </div>
                                  <div class="form-group col-md-6">
                                          <label for="">DUI</label>
                                          <input type="text" class="form-control" id="Dui_Cliente" name="Dui_Cliente" placeholder="DUI del cliente">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">NIT</label>
                                          <input type="text" class="form-control" id="Nit_Cliente" name="Nit_Cliente" placeholder="NIT del cliente">
                                    </div>-->
                                    <div class="form-group col-md-6">

                                          <label for="">Fecha de registro</label>
                                          <input type="text" class="form-control" id="Fecha_Registro" name="Fecha_Registro" placeholder="Fecha de registro del cliente">
                                    </div>
                              </div>

                             <!-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Profesión</label>
                                          <input type="text" class="form-control" id="Prpofesion_Cliente" name="Profesion_Cliente" placeholder="Profesión del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Tipo de cliente</label>
                                          <select id="Tipo_Cliente" name="Tipo_Cliente" class="form-control">
                                            <option value="Empleado">Empleado</option>
                                            <option value="Empresario">Empresario</option>
                                          </select>
                                    </div>
                              </div>
                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Domicilio</label>
                                          <textarea id="Domicilio_Cliente" name="Domicilio_Cliente" class="form-control"></textarea>
                                    </div>-->
                                    <div class="form-group col-md-6">
                                          <label for="">Observaciones</label>
                                          <textarea id="Observaciones" name="Observaciones" class="form-control"></textarea>
                                    </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Siguiente</button>
                            </form>
                       </div>   <!-- row -->    

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

