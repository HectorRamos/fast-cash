
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

       <div class="row">
       <h3 class="text-center">Plazos existentes</h3>
           <table class="table table-bordered">
           <tr>
             <td colspan="3" class="text-right"><a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#agregarPlazo"><i class="fa fa-plus"></i>Agregar un nuevo plazo</a></td>
           </tr>
             <tr >
               <th  class="text-center">#</th>
               <th  class="text-center">PLAZOS EXISTENTES</th>
               <th  class="text-center">ACCIÓN</th>
             </tr>

             <?php 
                foreach ($plazos->result() as $plazo)
                {
                  if ($plazo->estado_plazo != 0)
                  {
                  $idPlazo = '"'.$plazo->id_plazo.'"';  // variable que se le pasara como parametro a las funciones de actualizar y eliminar...
                  $tiempoPlazo= '"'.$plazo->tiempo_plazo.'"'; // variable que se le pasara como parametro a la funcion actualizar...
                  $fechaPlazo = '"'.$plazo->fecha_creacion.'"'; // variable que se le pasara como parametro a la funcion actualizar...
             ?>
                <tr>
                  <td  class="text-center"><h5><?= $plazo->id_plazo ?></h5></td>
                  <td  class="text-center"><h5>Populares hasta <?= $plazo->tiempo_plazo ?> dias</h5></td>
                   <td>                                
                      <div class="dropdown" align="center">
                          <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                          <ul class="dropdown-menu">
                          <?php 
                              echo "<li><a onclick='actualizarPlazo($idPlazo, $tiempoPlazo, $fechaPlazo)' data-toggle='modal' data-target='#actualizarPlazo'><i class='fa fa-edit fa-lg'></i> Actualizar</a></li>";
                              echo "<li><a onclick='eliminarPlazo($idPlazo)'><i class='fa fa-edit fa-lg'></i> Eliminar</a></li>";
                          ?>
                              
                              
                          </ul>
                      </div>
                  </td>
                </tr>

             <?php }} ?>
           </table>
       </div>   <!-- row -->    

    </div> <!-- container -->
               
</div> <!-- content -->

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana Modal para agregar Nuevo Plazo-->
<!-- ============================================================== -->
<div class="modal fade" id="agregarPlazo" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ingrese los datos del nuevo plazo</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url() ?>Solicitud/guardarPlazo" >
                <div class="form-row">
                    <div class="form-group col-md-12">
                          <label for="">Plazo de tiempo</label>
                          <input type="text" class="form-control" id="" name="tiempo_plazo" placeholder="Plazo de tiempo">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Guardar</button>
               </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Ventana Modal para actualizar Nuevo Plazo-->
<!-- ============================================================== -->
<div class="modal fade" id="actualizarPlazo" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ingrese los datos del nuevo plazo</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url() ?>Solicitud/actualizarPlazo" >
                <div class="form-row">

                    <div class="form-group col-md-6">
                          <label for="">Fecha de creacíon</label>
                          <input type="text" class="form-control" id="fecha_plazo" name="fecha_plazo" placeholder="" readonly="">
                    </div>

                    <div class="form-group col-md-6">
                          <label for="">Estado del plazo</label>
                          <input type="text" class="form-control" value="Activo" id="estado_plazo" name="estado_plazo" placeholder="" readonly="">
                    </div>

                    <div class="form-group col-md-12">
                          <label for="">Tiempo del plazo</label>
                          <input type="text" class="form-control" id="plazo_tiempo" name="tiempo_plazo" placeholder="">
                    </div>

                    <div class="form-group col-md-12">
                          <input type="text" class="form-control" id="id_plazo" name="id_plazo" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Actualizar</button>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Fin de ventana modal -->
<!-- ============================================================== -->

<!-- ============= Inicio del Script================== -->
<script type="text/javascript">

  // Funcion para poder actualizar los datos del plazo...  
  function actualizarPlazo(idPlazo, tiempoPlazo, fechaPlazo)
     {
        document.getElementById('id_plazo').value=idPlazo;
        document.getElementById('plazo_tiempo').value=tiempoPlazo;
        document.getElementById('fecha_plazo').value=fechaPlazo;
        document.getElementById('id_plazo').style.display = 'none';
      }

  // Funcion para poder eliminar los datos del plazo...  
    function eliminarPlazo(id)
      {
        if (!confirm("¿Está seguro de que desea eliminar el plazo?"))
        {
          return false;
        }
        else
        {
          document.location= 'eliminarPlazo/'+id;
          return true;
        }
      }
</script>
<!-- ============= Fin del Script================== -->