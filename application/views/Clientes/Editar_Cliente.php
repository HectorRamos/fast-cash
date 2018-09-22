<?php 
foreach ($cliente->result() as $datos_cliente) {
}
?>
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
                    <h3>EDITAR INFORMACION DEL CLIENTE CODIGO <?= $datos_cliente->Codigo_Cliente?></h3>
                       <div class="row">
                           <form method="POST" action="<?= base_url()?>Clientes/editarCliente">
                              <div class="form-row">
                              <!--*******************************CAMPOS OCULTOS**********************************-->
                              <input type="hidden" name="id_cliente" value="<?php echo $datos_cliente->Id_Cliente; ?>">
                              <input type="hidden" name="departamento" value="<?= $datos_cliente->Fk_Id_Departamento;?>">
                              <input type="hidden" name="municipio" value="<?php echo $datos_cliente->Fk_Id_Municipio;?>">
                              <input type="hidden" name="condicion" value="<?php echo $datos_cliente->Condicion_Actual_Cliente;?>">
                              <input type="hidden" name="estado_civil" value="<?php echo $datos_cliente->Estado_Civil_Cliente;?>">
                              <!--FIN DE CAMPOS OCULTOS-->
                                    <div class="form-group col-md-6">
                                          <label for="">Nombre</label>
                                          <input type="text" class="form-control" id="Nombre_Cliente" name="Nombre_Cliente" value="<?= $datos_cliente->Nombre_Cliente ?>" placeholder="Nombre del cliente">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Apellido</label>
                                          <input type="text" class="form-control" id="Apellido_Cliente" name="Apellido_Cliente" value="<?= $datos_cliente->Apellido_Cliente ?>" placeholder="Apellido del cliente">
                                    </div>
                              </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Departamento</label>
                                          <input type="text" class="form-control" id="Departamento" name="Departamento" value="<?= $datos_cliente->Nombre_Departamento?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Municipio</label>
										  <input type="text" class="form-control" id="Municipio" name="Departamento" value="<?= $datos_cliente->Nombre_Municipio?>"">
                                    </div>
                              </div> 


                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Cambiar Departamento</label>
                                          <select id="cbbDepartamentos" name="cbbDepartamentos" class="form-control" onchange="javascript:document.all('departamento').value=this.value;">
                                            <option value=""></option>
                                          <?php 
                                            foreach ($datos->result() as $departamentos) {
                                          ?>
                                            <option value="<?= $departamentos->Id_Departamento ?>"><?= $departamentos->Nombre_Departamento ?></option>

                                          <?php  } ?>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for=""> Cambiar Municipio</label>
                                          <select id="cbbMunicipios" name="cbbMunicipios" class="form-control" onchange="javascript:document.all('municipio').value=this.value;">
                                            <option value="">...</option>
                                          </select>
                                    </div>
                              </div> 

                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Condición actual</label>
                                          <input type="text"  name="" value="<?= $datos_cliente->Condicion_Actual_Cliente;?>" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Estado civil</label>
                                          <input type="text"  name="" value="<?= $datos_cliente->Estado_Civil_Cliente;?>" class="form-control">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Cambiar Condición actual</label>
                                          <select onchange="javascript:document.all('condicion').value=this.value;" id="Condicion_Cliente" name="Condicion_Cliente" class="form-control">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Cambiar Estado civil</label>
                                          <select onchange="javascript:document.all('estado_civil').value=this.value;" id="Estado_Cliente" name="Estado_Cliente" class="form-control">
                                            <option value="Soltero/a">Soltero/a</option>
                                            <option value="Casado/a">Casado/a</option>
                                            <option value="Divorsiado/a">Divorciado/a</option>
                                          </select>
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Genero</label>
                                          <input type="text" name="Genero_Cliente" class="form-control" value="<?= $datos_cliente->Genero_Cliente?>">
                                         
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Teléfono fijo</label>
                                          <input type="text" class="form-control" id="Telefono_Cliente" name="Telefono_Cliente" placeholder="Teléfono móvil" value="<?= $datos_cliente->Telefono_Fijo_Cliente?>">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Teléfono celular</label>
                                          <input type="text" class="form-control" id="Celular_Cliente" name="Celular_Cliente" placeholder="Teléfono celular" value="<?= $datos_cliente->Telefono_Celular_Cliente?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Fecha de nacimiento</label>
                                          <input type="text" class="form-control" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" value="<?= $datos_cliente->Fecha_Nacimiento_Cliente?>">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Zona</label>
                                          <input type="text" name="Zona" class="form-control" value="<?= $datos_cliente->Zona_Cliente?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">DUI</label>
                                          <input type="text" class="form-control" id="Dui_Cliente" name="Dui_Cliente" placeholder="DUI del cliente" value="<?= $datos_cliente->DUI_Cliente?>">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">NIT</label>
                                          <input type="text" class="form-control" id="Nit_Cliente" name="Nit_Cliente" placeholder="NIT del cliente" value="<?= $datos_cliente->NIT_Cliente?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Fecha de registro</label>
                                          <input type="text" class="form-control" id="Fecha_Registro" name="Fecha_Registro" placeholder="Fecha de registro del cliente" value="<?= $datos_cliente->Fecha_Registro_Cliente?>">
                                    </div>
                              </div>

                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="">Profesión</label>
                                          <input type="text" class="form-control" id="Prpofesion_Cliente" name="Profesion_Cliente" placeholder="Profesión del cliente" value="<?= $datos_cliente->Profesion_Cliente?>">
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
                                          <textarea id="Domicilio_Cliente" name="Domicilio_Cliente" class="form-control"
                                          value="<?= $datos_cliente->Domicilio_Cliente?>"><?= $datos_cliente->Domicilio_Cliente?></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="">Observaciones</label>
                                          <textarea id="Observaciones" name="Observaciones" class="form-control"
                                          value="<?= $datos_cliente->Observaciones_Cliente?>"><?= $datos_cliente->Observaciones_Cliente?></textarea>
                                    </div>
                              </div>
                              <button type="submit" class="btn btn-primary" onclick="hh()">Siguiente</button>
                            </form>
                       </div>   <!-- row -->    


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