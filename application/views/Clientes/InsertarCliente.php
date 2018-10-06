          <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
<!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Registro de clientes</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="basic-form" method="POST" action="<?= base_url()?>Clientes/InsertarCliente">
                                            <div>
                                                <h3>Informacion personal</h3>
                                                <section>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                        <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">Nombre</label>
                                                            <div class="col-lg-10">
                                                               <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" placeholder="Nombre del cliente">
                                                            </div>
                                                        </div>       
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                              <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">Apellidos</label>
                                                            <div class="col-lg-10">
                                                               <input type="text" class="form-control" id="Apellido_Cliente" name="Apellido_Cliente" placeholder="Apellido del cliente">
                                                            </div>
                                                        </div> 
                                                              
                                                        </div>
                                                  </div>
                                                  <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                        <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">Telefono</label>
                                                            <div class="col-lg-10">
                                                               <input type="text" class="form-control" id="Telefono_Cliente" name="Telefono_Cliente" placeholder="Teléfono móvil">
                                                            </div>
                                                        </div>       
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                              <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">Celular</label>
                                                            <div class="col-lg-10">
                                                               <input type="text" class="form-control" id="Celular_Cliente" name="Celular_Cliente" placeholder="Teléfono celular">
                                                            </div>
                                                        </div> 
                                                              
                                                        </div>
                                                  </div>
                                                  <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                        <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">F. de nacimiento</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento">
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                               <div class="form-group clearfix">

                                                                    <label class="col-lg-2 control-label" for="name">Estado_Civil </label>
                                                                    <div class="col-lg-10">
                                                                        <select id="Estado_Cliente" name="Estado_Cliente" class="form-control">
                                                                            <option value="Soltero/a">Soltero/a</option>
                                                                            <option value="Casado/a">Casado/a</option>
                                                                            <option value="Divorsiado/a">Divorciado/a</option>
                                                                        </select>
                                                                    </div>
                                                                </div>                                                     
                                                       </div>
                                                  </div>



                                                </section>
                                                <h3>Documentos y Domicilio</h3>
                                                <section>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                        <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">DUI</label>
                                                            <div class="col-lg-10">
                                                               <input type="text" class="form-control" id="Dui_Cliente" name="Dui_Cliente" placeholder="DUI del cliente">
                                                            </div>
                                                        </div>       
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                              <div class="form-group clearfix">

                                                            <label class="col-lg-2 control-label" for="name">NIT</label>
                                                            <div class="col-lg-10">
                                                               <input type="text" class="form-control" id="Nit_Cliente" name="Nit_Cliente" placeholder="NIT del cliente">
                                                            </div>
                                                        </div> 
                                                              
                                                        </div>
                                                    </div>
                                                  <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Departamento</label>
                                                                <div class="col-lg-10">
                                                                   <select id="cbbDepartamentos" name="cbbDepartamentos" class="form-control">
                                                                        <option value=""></option>
                                                                      <?php 
                                                                        foreach ($datos->result() as $departamentos) { 
                                                                      ?>

                                                                        <option value="<?= $departamentos->Id_Departamento ?>"><?= $departamentos->Nombre_Departamento ?></option>

                                                                      <?php  } ?>
                                                                    </select>
                                                                </div>
                                                            </div>       
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <div class="form-group clearfix">

                                                                    <label class="col-lg-2 control-label" for="name">Municipio</label>
                                                                    <div class="col-lg-10">
                                                                      <select id="cbbMunicipios" name="cbbMunicipios" class="form-control">
                                                                        <option value="">...</option>
                                                                      </select>
                                                                    </div>
                                                                </div>     
                                                        </div>
                                                  </div>
                                                  <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Zona </label>
                                                                <div class="col-lg-10">
                                                                    <select id="Zona" name="Zona" class="form-control">
                                                                        <option value="Rural">Rural</option>
                                                                        <option value="Urbana">Urbana</option>
                                                                      </select>
                                                                </div>
                                                            </div>       
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <div class="form-group clearfix">

                                                                    <label class="col-lg-2 control-label" for="name">Domicilio</label>
                                                                    <div class="col-lg-10">
                                                                      <textarea id="Domicilio_Cliente" name="Domicilio_Cliente" class="form-control"></textarea>
                                                                    </div>
                                                                </div>     
                                                        </div>
                                                  </div>
                                  
                                                </section>
                                                <h3>Profesion u oficio</h3>
                                                <section>

                                                    <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Profesion</label>
                                                                <div class="col-lg-10">
                                                                   <input type="text" class="form-control" id="Prpofesion_Cliente" name="Profesion_Cliente" placeholder="Profesión del cliente">
                                                                </div>
                                                            </div>       
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                  <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Tipo de cliente</label>
                                                                <div class="col-lg-10">
                                                                  <select id="Tipo_Cliente" name="Tipo_Cliente" class="form-control">
                                                                    <option value="Empleado">Empleado</option>
                                                                    <option value="Empresario">Empresario</option>
                                                                  </select>
                                                                </div>
                                                            </div> 
                                                                  
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Genero</label>
                                                                <div class="col-lg-10">
                                                                   <select id="Genero_Cliente" name="Genero_Cliente" class="form-control">
                                                                    <option value="Masculino">Masculino</option>
                                                                    <option value="Femenino">Femenino</option>
                                                                  </select>
                                                                </div>
                                                            </div>       
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                  <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Observaciones</label>
                                                                <div class="col-lg-10">
                                                                   <textarea id="Observaciones" name="Observaciones" class="form-control"></textarea>
                                                                </div>
                                                            </div> 
                                                                  
                                                            </div>
                                                        </div>
                                                    
                                                </section>
                                                <h3>Otra informacion</h3>
                                                <section>
                                                    <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">Condición actual</label>
                                                                <div class="col-lg-10">
                                                                   <select id="Condicion_Cliente" name="Condicion_Cliente" class="form-control">
                                                                        <option value="Activo">Activo</option>
                                                                        <option value="Inactivo">Inactivo</option>
                                                                    </select>
                                                                </div>
                                                            </div>       
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                  <div class="form-group clearfix">

                                                                <label class="col-lg-2 control-label" for="name">F.registro</label>
                                                                <div class="col-lg-10">
                                                                   <input type="text" class="form-control" id="Fecha_Registro" name="Fecha_Registro" placeholder="Fecha de registro del cliente">
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Siguiente</button> 
                                                                  
                                                            </div>
                                                        </div>
                                                </section>
                                            </div>
                                        </form> 
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->
                    </div>
                </div>
            </div>

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