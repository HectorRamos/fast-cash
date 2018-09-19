            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                       <div class="row">
                           <form>
                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre</label>
                                          <input type="text" class="form-control" id="" placeholder="Nombre del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Apellido</label>
                                          <input type="text" class="form-control" id="" placeholder="Apellido del cliente">
                                    </div>
                              </div>


                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Departamento</label>
                                          <select id="cbbDepartamentos" class="form-control">
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
                                          <select id="cbbMunicipios" class="form-control">
                                            <option value="">...</option>
                                          </select>
                                    </div>
                              </div> 


                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Condición actual</label>
                                          <select id="" class="form-control">
                                            <option value="">Activo</option>
                                            <option value="">Inactivo</option>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Estado civil</label>
                                          <select id="" class="form-control">
                                            <option value="">Soltero</option>
                                            <option value="">Casado</option>
                                            <option value="">Divorciado</option>
                                          </select>
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Genero</label>
                                          <select id="" class="form-control">
                                            <option value="">Masculino</option>
                                            <option value="">Femenino</option>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Teléfono móvil</label>
                                          <input type="text" class="form-control" id="" placeholder="Teléfono móvil">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Teléfono celular</label>
                                          <input type="text" class="form-control" id="" placeholder="Teléfono celular">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Fecha de nacimiento</label>
                                          <input type="text" class="form-control" id="" placeholder="Fecha de nacimiento">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Zona</label>
                                          <select id="" class="form-control">
                                            <option value="">Rural</option>
                                            <option value="">Urbana</option>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">DUI</label>
                                          <input type="text" class="form-control" id="" placeholder="DUI del cliente">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">NIT</label>
                                          <input type="text" class="form-control" id="" placeholder="NIT del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Fecha de registro</label>
                                          <input type="text" class="form-control" id="" placeholder="Fecha de registro del cliente">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Profesión</label>
                                          <input type="text" class="form-control" id="" placeholder="Profesión del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Tipo de cliente</label>
                                          <select id="" class="form-control">
                                            <option value="">Empleado</option>
                                            <option value="">Empresario</option>
                                          </select>
                                    </div>
                              </div>

                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Domicilio</label>
                                          <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Observaciones</label>
                                          <textarea class="form-control"></textarea>
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

 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

