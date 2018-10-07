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
                                        <form id="basic-form" method="POST" action="">
                                           
                                        </form> 
                                    
                         <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">
                                
                                    <div class="wizard">
                                        <!-- <div class="wizard-inner"> -->
                                            <!-- <div class="connecting-line"></div> -->
                                            <ul class="nav nav-tabs" role="tablist">

                                                <li class="active">
                                                    <a href="#step1" class="btn btn-block btn-lg btn-primary waves-effect waves-light" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1"> Informacion personal
                                                    </a>
                                                </li>

                                                <li role="presentation" class="disabled">
                                                    <a href="#step2" class="btn btn-block btn-lg btn-primary waves-effect waves-light" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2"> Documentos y Domicilio
                                                    </a>
                                                </li>
                                                <li role="presentation" class="disabled">
                                                    <a href="#step3" class="btn btn-block btn-lg btn-primary waves-effect waves-light" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3"> Profesion u oficio
                                                    </a>
                                                </li>
                                                <li role="presentation" class="disabled">
                                                    <a href="#step4" class="btn btn-block btn-lg btn-primary waves-effect waves-light" data-toggle="tab" aria-controls="step3" role="tab" title="Step 4"> Otra informacion
                                                    </a>
                                                </li>
                                            </ul>
                                        <!-- </div> -->

                                        <form role="form" id="basic-form" method="POST" action="<?= base_url()?>Clientes/InsertarCliente">
                                            <div class="tab-content">
                                                <div class="tab-pane active" role="tabpanel" id="step1">
                                                <br>
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

                                                                    <label class="col-lg-2 control-label" for="name">Estado Civil </label>
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

                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                                                    </ul>
                                                </div>
                                                <!--Tab Panel 2-->
                                                <div class="tab-pane" role="tabpanel" id="step2">
                                                <br>
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
                                  
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="btn btn-default prev-step">Atras</button>
                                                        <button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                                                    </ul>
                                                </div>
                                                <!--TAB PANEL 3-->
                                                <div class="tab-pane" role="tabpanel" id="step3">
                                                <br>
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
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="btn btn-default prev-step">Atras</button>
                                                        <button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="step4">
                                                <br>
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
                                                          
                                                                  
                                                            </div>
                                                        </div>
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="btn btn-default prev-step">Atras</button>
                                                        <button type="submit" class="btn btn-success btn-info-full next-step">Guardar</button></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>
                                    </div>
                      
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->
                                </div>
                            </div> <!-- end col -->

                        </div> <!-- End row -->
                        <style type="text/css">
.wizard {
    margin: 30px auto;
    background: #fff;
}

/*    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }*/

/*.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}
*/
.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    background: blue;
}
.active a{
    color: red
}

/*span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}*/

/*.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}*/

/*.wizard li.active {*/
    /*background: #000;*/
    /*color: #fff;*/
/*    content: " ";
    position: absolute;*/
    /*left: 46%;*/
    /*opacity: 1;*/
/*    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;*/
    /*border-bottom-color: #5bc0de;*/
/*}*/

.wizard .nav-tabs > li a {
    background: #eee;
}

    .wizard .nav-tabs > li a:hover {
        background: gray;
    }
/*.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}*/

/*.wizard h3 {
    margin-top: 0;
}*/

/*@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }*/

/*    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }
*/
/*    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}*/
   </style>
   <script type="text/javascript">
       $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
   </script>

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